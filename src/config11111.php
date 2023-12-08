<?php
define('DB_SERVER','localhost');
define('DB_USER','svrmsvrm_travels');
define('DB_PASS' ,'svrmsvrm_travels');
define('DB_NAME', 'svrmsvrm_travels');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>