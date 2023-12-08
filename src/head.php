<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8">
    <!-- TITLE -->
    <?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
?>            

    <title><?php echo $row['title']; ?></title>
	<meta name="keywords" content="<?php echo $row['description']; ?>"/>
	<meta name="description" content="<?php echo $row['description']; ?>"/>
          <link rel="icon" href="image/logo/<?php echo htmlentities($row['favicon']) ?>">

<?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/boot1.css">
    <!--<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/awe-booking-font.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- REVOLUTION DEMO -->
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/styles37.css">
    <link rel="stylesheet" type="text/css" href="css/demo1.css">
    <link rel="stylesheet" type="text/css" href="css/header4.css">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <!-- CSS COLOR -->
    <link id="colorreplace" rel="stylesheet" type="text/css" href="css/colors/blue13.css">
    <link rel="stylesheet" href="css/swiper2.css" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <meta name="google-site-verification" content="nMoNnnNKlOH1Djm0RNxxESv5sP2mxjLOazuzbZhSDhM" />
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/style34.css">
  <link rel="stylesheet" type="text/css" href="css/new1.css">
  <link rel="stylesheet" type="text/css" href="css/iti2.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
 
 
 
</head>


<?php 


if(isset($_POST['helicoptorform']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $numberofperson=$_POST['numberofperson'];
    $helicopterid=$_POST['helicopterid'];
    $date=$_POST['date'];
 
$sql=mysqli_query($con,"insert into helicopterform(name,email,phone,numberofperson,helicopterid,date) values('$name','$email','$phone','$numberofperson','$helicopterid','$date')");
$_SESSION['msg']="Added Successfully !!";

}


if(isset($_POST['sendenquiryform']))
{
    $destination=$_POST['destination'];
    $departuredate=$_POST['departuredate'];
    $adult=$_POST['adult'];
    $child=$_POST['child'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
 
$sql=mysqli_query($con,"insert into sendenquiryform(destination,departuredate,adult,child,name,phone,email,message) values('$destination','$departuredate','$adult','$child','$name','$phone','$email','$message')");
$_SESSION['msg']="Added Successfully !!";

}



if(isset($_POST['newsletter']))
{
    $email=$_POST['email'];
 
$sql=mysqli_query($con,"insert into newsletter(email) values('$email')");
$_SESSION['msg']="Registered Successfully !!";

}


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



if(isset($_POST['contactform']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
$sql=mysqli_query($con,"insert into contactform(name,phone,email,message) values('$name','$phone','$email','$message')");
$_SESSION['msg']="Registered Successfully !!";

}


if(isset($_POST['blogcommentform']))
{
    $name=$_POST['name'];
    $blogid=$_POST['blogid'];
    $email=$_POST['email'];
    $message=$_POST['message'];
$sql=mysqli_query($con,"insert into blogcommentsform(message,name,email,blogid) values('$message','$name','$email','$blogid')");
$_SESSION['msg']="Successfully !!";

}


?>


        <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="fonts/icofont/icofont.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/fontawesome.min.css">

        <!-- VENDOR -->
        <link rel="stylesheet" href="vendor/venobox/venobox.min.css">
        <link rel="stylesheet" href="vendor/slickslider/slick.min.css">
        <link rel="stylesheet" href="vendor/niceselect/nice-select.min.css">
        <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/home-standard.css">
        <style>
            .cat__img__band{
                color:#f29b00;
            }
            .sunm{
                color:#f29b00;
            }
            .btnmn{
                background:#f29b00;
            }
            .gradient-button-1 {background-image: linear-gradient(to right, #f29b00 0%, #748098 51%, #f29b00 100%);}
            .blog-heading-content h2 {
  background: #f29b00;
}

        </style>
