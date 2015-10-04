<?php 

# ========================================= #\
# 
#   NOT USED NOW.
# 
# ========================================= #\
# 
# 
# name:     includes/connect.inc.php
# 
# =========================================
# 
# purpose:  this file allows a connection via mysql
#           to connect to the database
#           
#           **please revise when moving the location of database. **
# 
# ========================================= #/

// 
// this allows a connection but does not
// interact with the submitted username or password
// with login forms ... yet :[.
// 


# 
# #mysql connect
# 

class Database
{
    // link is the mysql_connect method, w/in a variable of `$link.
    public $link;



    /*
    * 
    * a constuctor for access to our d.b.
    * will require the following data: name,
    * pass, and dbname
    * 
     */

    function __construct($user, $pass, $dbname) {

        $this->link = mysql_connect('localhost', $user, $pass); // switch if going to live server.

        if (!$this->link) {
            // if link does not work.
            die('could not connect');
        }

        $db_selected = mysql_select_db($dbname, $this->link);

        if (!$db_selected) {
            // if db cannot be selected.
            die ('can\'t use that database.');
        }
    }



    /*
    * a query function to submit queries
    * to the db through object oriented means
    * 
     */
    
    function query($q){

        $result = mysql_query($q, $this->link);

        if (!$result) {
            // if no result occurs.
            die('invalid query');
        }

        return $result; 
    }



    /*
    * 
    * a close function to
    * close the my_sql 
    * connection to our d.b.
    * 
     */
    
    function close(){
        mysql_close($this->link);
    }
}



/*
* end of connect v2 . php
 */

