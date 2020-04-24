<?php

function get_copyright_years($start_year=null)
{
    if (isset($start_year)) {
        $current_year = date('Y');
        if ($start_year < $current_year) {
            // $current_year = date('y');
            echo  '&copy;'. $start_year .'&ndash;'.$current_year;
        } else {
            echo '&copy;' .$start_year;
        }
    } else {
        echo 'No Copyright';
    }
}

function url_for($script_path)
{
    // add the leading '/' if not present
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function url_for_private($script_path)
{
    // add the leading '/' if not present
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    $new_url = str_replace("public", "private", WWW_ROOT);
    return $new_url . $script_path;
}

function u($string="")
{
    return urlencode($string);
}

function raw_u($string="")
{
    return rawurlencode($string);
}

function h($string="")
{
    return htmlspecialchars($string);
}

function error_404()
{
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    exit();
}

function error_500()
{
    header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
    exit();
}

function redirect_to($location)
{
    header("Location: " . $location);
    exit;
}

function is_post_request()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request()
{
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

// PHP on Windows does not have a money_format() function.
// This is a super-simple replacement.
if (!function_exists('money_format')) {
    function money_format($format, $number)
    {
        return '$' . number_format($number, 2);
    }
}

// Used for browser details of the user
function user_session()
{
    if (!isset($_SESSION['user_active_time'])) {
        $_SESSION['user_active_time'] = 1;

        $bd = new Browser_details();
        $bd->detect();
        $set = ['remote_ip'=>$_SERVER['REMOTE_ADDR'],
                'plateform'=> $bd->platform,
                'browser_name'=> $bd->browser_name,
                'request_time'=> date('l, F j, Y g:ia', $_SERVER['REQUEST_TIME']),
                'remote_port'=>$_SERVER['REMOTE_PORT']
              ];

        $bd->set_args_for_db($set);
        $result = $bd->save();
    }
}


// After developement process, you can remove this function
function print_array_using_pre_tag($set=[], $exit= false)
{
    if (!empty($set) && $exit === true) {
        echo '<pre>';
        print_r($set);
        echo '</pre>';
        exit;
    } elseif (!empty($set) && $exit === false) {
        echo '<pre>';
        print_r($set);
        echo '</pre>';
    } else {
        echo '<div style=\'color:red;\'>ERROR: Record Not Found for `pre` tag...!</div>';
    }
}


// if $full_path = '/var/www/html/private/shared/public_footer.php'
// then its explode value will be -
// [0] => [1] => var [2] => www [3] => html [4] => demo2
// [5] => private [6] => shared [7] => public_footer.php
// So here we want only [5] => private [6] => shared [7] => public_footer.php
// Hence the return value will be -
// 'private/shared/public_footer.php'


function extract_short_path($full_path){
    $short_path = []; 
    $cnvrt_to_array = explode('/', $full_path);
    $length = count($cnvrt_to_array);
    $required = $length - 3;

    for($i=$required; $i < $length; $i++){  
        if (($length - $i) !== 1 ){
        $temp = $cnvrt_to_array[$i] . '/';
        }else{
        $temp = $cnvrt_to_array[$i];
        }

        $short_path[] =$temp;
        
    }
    return implode($short_path);
}
