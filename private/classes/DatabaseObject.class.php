<?php

class DatabaseObject
{
    protected static $database;
    protected static $table_name = "";
    protected static $columns = [];
    public $errors = [];

    public static  function get_table_name(){
        return static::$table_name;
    }

    public static function set_database($database)
    {
        self::$database = $database;
    }

    public static function find_by_sql($sql)
    {
        $result = self::$database->query($sql);

        if (!$result) {
            exit("Database query failed.");
        }

        // results into objects
        $object_array = [];
        while ($record = $result->fetch_assoc()) {
            $object_array[] = static::instantiate($record);
        }

        $result->free();

        return $object_array;
    }

    // the find_by_sql() function returns object values
    // which is not good when want to get only one attribute column of db-table.
    public static function find_by_sql_without_object($sql)
    {
        $result = self::$database->query($sql);

        if (!$result) {
            exit("Database query failed.");
        }

        // results into array
        $data_array = [];
        $record = $result->fetch_assoc();
            $data_array = $record;

        $result->free();

        return $data_array;
    }

    public static function find_all()
    {
        $sql = "SELECT * FROM " . static::$table_name;
        return static::find_by_sql($sql);
    }

    public static function count_all()
    {
        $sql = "SELECT COUNT(*) FROM " . static::$table_name;
        $result_set = static::$database->query($sql);
        $row = $result_set->fetch_array();
        return array_shift($row);
    }

    public static function find_by_id($id)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE id='" . self::$database->escape_string($id) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }

    // This function is different from find_by_id()
    // because here you can pass the attribute name of the db.
    // so the function find_by_id() is only used for finding the `id`. 
    public static function find_by_attribute($set = ['attribute' => '', 'id' => ''])
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE {$set['attribute']}='" . self::$database->escape_string($set['id']) . "'";
        $_SESSION['temp_sql'] = $sql;

        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }

    protected static function instantiate($record)
    {
        $object = new static;
        // Could manually assign values to properties
        // but automatically assignment is easier and re-usable
        foreach ($record as $property => $value) {
            if (property_exists($object, $property)) {
                $object->$property = $value;
            }
        }
        return $object;
    }

    protected function validate()
    {
        $this->errors = [];

        // Add custom validations

        return $this->errors;
    }

    protected function create()
    {
        $this->validate();
        if (!empty($this->errors)) {
            return false;
        }

        $attributes = $this->sanitized_attributes();
        $sql = "INSERT INTO " . static::$table_name . " (";
        $sql .= join(', ', array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes));
        $sql .= "')";
        $result = self::$database->query($sql);

        if ($result) {
            $this->id = self::$database->insert_id;
        } else {
            die(mysqli_error(self::$database));
        }
        return $result;
    }

    protected function update()
    {
        $this->validate();
        if (!empty($this->errors)) {
            return false;
        }


        $attributes = $this->sanitized_attributes();
        $attribute_pairs = [];
        foreach ($attributes as $key => $value) {
            $attribute_pairs[] = "{$key}='{$value}'";
        }

        $sql = "UPDATE " . static::$table_name . " SET ";
        $sql .= join(', ', $attribute_pairs);
        $sql .= " WHERE id='" . self::$database->escape_string($this->id) . "' ";
        $sql .= "LIMIT 1";
        $result = self::$database->query($sql);
        return $result;
    }

    public function save()
    {
        // A new record will not have an ID yet
        if (isset($this->id)) {
            return $this->update();
        } else {
            return $this->create();
        }
    }

    public function merge_attributes($args=[])
    {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }

    // Properties which have database columns, excluding ID
    public function attributes()
    {
        $attributes = [];
        foreach (static::$db_columns as $column) {
            if ($column == 'id') {
                continue;
            }
            $attributes[$column] = $this->$column;
        }
        return $attributes;
    }

    protected function sanitized_attributes()
    {
        $sanitized = [];
        foreach ($this->attributes() as $key => $value) {
            $sanitized[$key] = self::$database->escape_string($value);
        }
        return $sanitized;
    }

    public function delete()
    {
        $sql = "DELETE FROM " . static::$table_name . " ";
        $sql .= "WHERE id='" . self::$database->escape_string($this->id) . "' ";
        $sql .= "LIMIT 1";
        $result = self::$database->query($sql);
        return $result;

        // After deleting, the instance of the object will still
    // exist, even though the database record does not.
    // This can be useful, as in:
    //   echo $user->first_name . " was deleted.";
    // but, for example, we can't call $user->update() after
    // calling $user->delete().
    }

    /* for ajax */
    protected function ajax_update()
    {
        //$this->validate();
        //if(!empty($this->errors)) { return false; }

        $attributes = $this->sanitized_attributes();
        $attribute_pairs = [];
        foreach ($attributes as $key => $value) {
            $attribute_pairs[] = "{$key}='{$value}'";
        }

        $sql = "UPDATE " . static::$table_name . " SET ";
        $sql .= join(', ', $attribute_pairs);
        $sql .= " WHERE id='" . self::$database->escape_string($this->id) . "' ";
        $sql .= "LIMIT 1";
        $result = self::$database->query($sql);
        return $result;
    }

    public function ajax_save()
    {
        // A new record will not have an ID yet
        if (isset($this->id)) {
            return $this->ajax_update();
        } else {
            //return $this->create();
        }
    }

    // * validate uniqueness
    // A common validation, but not an easy one to write generically.
    // Requires going to the database to check if value is already present.
    // Implementation depends on your database set-up.
    // Instead, here is a mock-up of the concept.
    // Be sure to escape the user-provided value before sending it to the database.
    // Table and column will be provided by us and escaping them is optional.
    // Also consider whether you want to trim whitespace, or make the query
    // case-sentitive or not.
//
    public function has_uniqueness($value, $column='')
    {
        $sql = "SELECT {$column} FROM " . static::$table_name . " ";
        $sql .= "WHERE {$column} ='" . self::$database->escape_string($value) . "' ";
        $result = self::$database->query($sql);

        // Here $result will be an object.
        // So $result will be something like -
        // *-----*[field_count] => 1
        // *-----*[lengths] =>
        // *-----*[num_rows] => 1
        // *-----*[type] => 0
        // If num_rows > 0 then it means, we got some value from database.

        // return false if something is in database
        // else return true
        // true is for uniqueness

        if ($result->num_rows > 0) {
            return false;
        } else {
            return true;
        }
    }
}
