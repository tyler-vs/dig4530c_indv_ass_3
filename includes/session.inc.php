<?php 
/* SESSION .PHP
* 
* this file is to be included on pages were
* the user is expected to have already started
* a session and is currently working within one.
* 
*/ 


require 'connect.inc.php';



/*
* authenticate func
* 
* makes sure the a user exists w/ given 
* 'username' and 'password' and 'db name' 
* w/in a sql string.
*
* then makes a sql query with the sql string
* to find and grab that 'users id' if it happens to exist,
* else we return `false`.
*
* this function will work inside the next function `login funct`
* 
* 
 */
function authenticate($username, $password, $db){

    // query
    $q = "SELECT 
            id
        FROM 
            users 
        WHERE 
            username = '$username'; 
        AND 
            password = '$password'";

    // result
    $res = $db->query($q);

    $fetched = mysql_fetch_assoc($res);

    if (!empty($fetched['user_id'])) {
        echo 'a matching user has been found in d.b. <br />';
        return true;
    } else {
        echo 'no user was matched in the d.b. error.';
        return false;
    }
}





/*
* 
* login func
* 
* this functions begins a session w/
* given credentials from authenticate\?\?
* 
 */


function login($username, $password, $db){

    session_start();

    // check if user is already logged in or not

    if ( (isset($_SESSION['username'])) && ($_SESSION['username']) == $username ) {
        return true;
    } 
    else if ( authenticate($username, $password, $db) ){
        // set up session data
        $_SESSION['username'] = $username;
        return true;
    }
    else {
        echo 'errors occuring when trying to login or authenticate user session.';
        logout();   // define below.
        return false;
    }
}



/*
* LOGOUT func
* 
* simply unsets a active sessions, if a session is
* currently in progress or failed at an attempt to begin
* a start session.
* 
 */

function logout(){
    session_unset();
}