<?php

// * validate value is a number
// submitted values are strings, so use is_numeric instead of is_int
// options: max, min
// has_number($items_to_order, ['min' => 1, 'max' => 5])
function has_number($value, $options=[])
{
    if (!is_numeric($value)) {
        return false;
    }
    if (isset($options['max']) && ($value > (int)$options['max'])) {
        return false;
    }
    if (isset($options['min']) && ($value < (int)$options['min'])) {
        return false;
    }
    return true;
}

  // is_blank('abcd')
  // * validate data presence
  // * uses trim() so empty spaces don't count
  // * uses === to avoid false positives
  // * better than empty() which considers "0" to be empty
  function is_blank($value)
  {
      return !isset($value) || trim($value) === '';
  }

  // has_presence('abcd')
  // * validate data presence
  // * reverse of is_blank()
  // * I prefer validation names with "has_"
  function has_presence($value)
  {
      return !is_blank($value);
  }

  // has_length_greater_than('abcd', 3)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
  function has_length_greater_than($value, $min)
  {
      $length = strlen($value);
      return $length > $min;
  }

  // has_length_less_than('abcd', 5)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
  function has_length_less_than($value, $max)
  {
      $length = strlen($value);
      return $length < $max;
  }

  // has_length_exactly('abcd', 4)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
  function has_length_exactly($value, $exact)
  {
      $length = strlen($value);
      return $length == $exact;
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  // * validate string length
  // * combines functions_greater_than, _less_than, _exactly
  // * spaces count towards length
  // * use trim() if spaces should not count
  function has_length($value, $options)
  {
      if (isset($options['min']) && !has_length_greater_than($value, $options['min'] - 1)) {
          return false;
      } elseif (isset($options['max']) && !has_length_less_than($value, $options['max'] + 1)) {
          return false;
      } elseif (isset($options['exact']) && !has_length_exactly($value, $options['exact'])) {
          return false;
      } else {
          return true;
      }
  }

  // --SLOWER VERSION------------->>
  // has_inclusion_of( 5, [1,3,5,7,9] )
  // * validate inclusion in a set
  // by default in_array is case-sensitive.
  // here in this function, I have defined $case_insensitive=true
  // which means function will by default use the case-insensitive values.
  // |---------
  // |* EXAMPLE 1 (return true)-
  // |   has_inclusion_of( 'Mango', ['pine-apple','grapes','appLE','apple','ManGO'])
  // |---------
  // |* EXAMPLE 2 (return true)-
  // |   has_inclusion_of( 'Mango', ['pine-apple','grapes','appLE','apple','mangO'], $case_insensitive=true)
  // |---------
  // |* EXAMPLE 3 (return true)-
  // |   has_inclusion_of( 'Mango', ['pine-apple','grapes','appLE','apple','MANGO'], true)
  // |---------

  // ** If you pass $case_insensitive=false then it will use case-sensitive values
  // |* EXAMPLE 4 (return false)-
  // |   has_inclusion_of( 'Mango', ['pine-apple','grapes','appLE','apple','mangO'], $case_insensitive=false)
  // |---------
  // |* EXAMPLE 5 (return false)-
  // |   has_inclusion_of( 'Mango', ['pine-apple','grapes','appLE','apple','MANGO'], false)
  // |---------
  // |* EXAMPLE 6 (return false)-
  // |   has_inclusion_of( 'Mango', ['pine-apple','grapes','appLE','apple','Mango'], false)

  /*-------------------------++++++++-------------------------------*/

  // --FASTER VERSION------------->>
function has_inclusion_of($value, $set=[], $case_insensitive=true)
{
    if ($case_insensitive === true) {
        $search_array = array_flip(array_map('strtolower', $set));
        return isset($search_array[strtolower($value)]) ? true : false;
    } else {
        $search_array = array_flip($set);
        return isset($search_array[$value]) ? true : false;
    }
}

  /*

  // --SLOWER VERSION------------->>
  //Here we're using in_array() php's built-in function.
  // ** NOTE : in_array() is not so fast for large arrays.
  // has_exclusion_of( 5, [1,3,5,7,9] )
  // * validate exclusion from a set
  // by default in_array is case-sensitive.
  // here in this function, I have defined $case_insensitive=true
  // which means function will by default use the case-insensitive values.
  // If you pass $case_insensitive=false then it will use case-sensitive values

  function has_exclusion_of($value, $set=[],$case_insensitive=true) {
    if ($case_insensitive === true) {
    $search_array = array_map('strtolower', $set);
    // case-insensitive return
    return !in_array(strtolower($value), $search_array);
  }else{
    // case-sensitive return
    return !in_array($value, $set);
  }
  }

  */

/*-------------------------++++++++-------------------------------*/

    /* --FASTER VERSION------------->>
    Here we're not using in_array() php's built-in function.
    Searching arrays however is linear.
    **NOTE : don't use in_array() for large arrays.
      If you have a large array or you're going to do this a lot(searching),
      it would be better to put the search terms in key of the array
      as this will be much faster access.
      -----------------
      The only issue here is that array keys must be unique so if you have a collision (eg "One" and "one") you will lose previous One (the very last value will preserve).
      **EXAMPLE -
          $input = array("a" => 1, "b" => 1, "c" => 2);
          $flipped = array_flip($input);
          print_r($flipped);

      **OUTPUT -
          Array
          (
              [1] => b
              [2] => c
          )

    */
  function has_exclusion_of($value, $set=[], $case_insensitive=true)
  {
      if ($case_insensitive === true) {
          $search_array = array_flip(array_map('strtolower', $set));
          return !isset($search_array[strtolower($value)]) ? true : false;
      } else {
          $search_array = array_flip($set);
          return !isset($search_array[$value]) ? true : false;
      }
  }

  // has_string('nobody@nowhere.com', '.com')
  // * validate inclusion of character(s)
  // * strpos returns string start position or false
  // * uses !== to prevent position 0 from being considered false
  // * strpos is faster than preg_match()
  function has_string($value, $required_string)
  {
      return strpos($value, $required_string) !== false;
  }

  // * validate value has a format matching a regular expression
// Be sure to use anchor expressions to match start and end of string.
// (Use \A and \Z, not ^ and $ which allow line returns.)
//
// Example:
// has_format_matching('1234', '/\d{4}/') is true
// has_format_matching('12345', '/\d{4}/') is also true
// has_format_matching('12345', '/\A\d{4}\Z/') is false
function has_format_matching($value, $regex='//')
{
    return preg_match($regex, $value) === 1;
}

  // has_valid_email_format('nobody@nowhere.com')
  // * validate correct format for email addresses
  // * format: [chars]@[chars].[2+ letters]
  // * preg_match is helpful, uses a regular expression
  //    returns 1 for a match, 0 for no match
  //    http://php.net/manual/en/function.preg-match.php
  function has_valid_email_format($value)
  {
      $regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
      return has_format_matching($value, $regex);
      //return preg_match($email_regex, $value) === 1;
  }

// You can use this function for both first name and last name
function has_valid_name_format($value)
{
    $regex = "/^([a-zA-Z' ]+)$/";
    return has_format_matching($value, $regex);
}

  // has_unique_username('johnqpublic')
  // * Validates uniqueness of admins.username
  // * For new records, provide only the username.
  // * For existing records, provide current ID as second argument
  //   has_unique_username('johnqpublic', 4)

  function has_unique_username($username, $current_id="0")
  {
      $admin = Admin::find_by_username($username);
      if ($admin === false || $admin->id == $current_id) {
          // is unique
          return true;
      } else {
          // not unique
          return false;
      }
  }

  /* Now you can dynamically check for all CLASSES
  because we're passing `$class_name` as parameter.
  */
  function has_unique_email($email, $current_id="0", $class_name="")
  {
      $$class_name = $class_name::find_by_email($email);
      if ($$class_name === false || $$class_name->id == $current_id) {
          // is unique
          return true;
      } else {
          // not unique
          return false;
      }
  }

  /*function has_unique_email_of_teacher($email, $current_id="0") {
    $bicycle = Bicycle::find_by_email($email);
    if($bicycle === false || $bicycle->id == $current_id) {
      // is unique
      return true;
    } else {
      // not unique
      return false;
    }
  }*/

  function is_valid_full_name($name="")
  {
      $regexp = "/^([a-zA-Z' ]+)$/";
      if (!empty(trim($name))) {
          $checking = has_format_matching($name, $regexp);
          return $checking;
      } else {
          return false;
      }
  }

  function is_valid_dob($dob="")
  {
      if (!preg_match("/^\d{1,2}\/\d{1,2}\/\d{4}$/", $dob)) {
          // invalid dob
          return true;
      }
      if (!empty(trim($dob))) {
          list($dd, $mm, $yyyy) = explode('/', $dob);
          if (!checkdate($mm, $dd, $yyyy)) {
              // invalid dob
              $checking = true;
              return $checking;
          }
      } else {
          return false;
      }
  }

  function is_valid_mobile_number($number="")
  {
      if (!empty($number)) {
          $regexp = '/^[0-9]{10}+$/';
          return has_format_matching($number, $regexp);
      }
  }

// Allow GET(in url) parameters
// * Example-
// *  $get_params = allowed_get_params(['username', 'password']);
// * http://localhost/allowed_params.php?username=kskoglund&password=secret&logged_in=1
// * logged_in=1 will not accept

function allowed_get_params($allowed_params=[])
{
    $allowed_array = [];
    foreach ($allowed_params as $param) {
        if (isset($_GET[$param])) {
            $allowed_array[$param] = $_GET[$param];
        } else {
            $allowed_array[$param] = null;
        }
    }
    return $allowed_array;
}

// Allow POST parameters
function allowed_post_params($allowed_params=[])
{
    $allowed_array = [];
    foreach ($allowed_params as $param) {
        if (isset($_POST[$param])) {
            $allowed_array[$param] = $_POST[$param];
        } else {
            $allowed_array[$param] = null;
        }
    }
    return $allowed_array;
}
