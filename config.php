<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'atsystem');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    echo "<script type='text/javascript'>alert(\"error in connecting\");</script>";
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>