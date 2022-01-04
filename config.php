<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'ybtheflash');
define('DB_PASSWORD', 'English@18Learners');
define('DB_NAME', 'loginsys');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>