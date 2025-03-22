<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'sql303.infinityfree.com');
define('DB_USERNAME', 'if0_35767051');
define('DB_PASSWORD', 'QKbGCVM0eyl9s4o');
define('DB_NAME', 'if0_35767051_id20536900_login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
