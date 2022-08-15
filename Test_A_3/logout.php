<?php
session_start();
$_SESSION = array();


if (ini_get("session.use_cookies")) {

    $params = session_get_cookie_params();
    setcookie( session_name(), '', 
               time() - 42000,
               $params["path"], 
               $params["domain"],
               $params["secure"], 
               $params["httponly"] );
}

header('location:../login.php');
session_destroy();

/*
    Found at
    https://www.php.net/session_destroy

    The sample code didn't work... Session cookies weren't being destroyed.
    
    There's most likely a better way to accomplish this.
    Ran out of time to explore.
*/
?>