<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['hotelform']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $checkindate=$_POST['checkindate'];
    $checkoutdate=$_POST['checkoutdate'];
    $adult=$_POST['adult'];
    $kid=$_POST['kid'];
    $hotelroomcategoryid=$_POST['hotelroomcategoryid'];
    $hotelid=$_POST['hotelid'];
$sql=mysqli_query($con,"insert into hotelform(name,phone,email,checkindate,checkoutdate,adult,kid,hoteroomcategoryid,hotelid) values('$name','$phone','$email','$checkindate','$checkoutdate','$adult','$kid','$hotelroomcategoryid','$hotelid')");
$_SESSION['msg']="Registered Successfully !!";

}

?>

