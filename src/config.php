<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'unitravells');


$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection

$ret1=mysqli_query($con,"SELECT * FROM adminlogin where id='1' ");
$num1=mysqli_fetch_array($ret1);

$_SESSION['alogin']=intval($num1['status']);

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>