<?php
session_start();
error_reporting(0);
include('config.php');
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body style="background: #fff">

<?php include('header.php'); ?>



    <!-- PAGE WRAP -->
    <div id="page-wrap">
   <style>
       .oqaxz{
           width:70px;
       }
       .color-hty{
           color:#ED3237;
       }
       .naqw{
           display:block; border:1px solid rgba(0,0,0,0.2); border-radius:5px;  padding:10px 5px;
           min-height:300px;
       }
   </style>
        <section>
            <div class="container rmsa1">
                
                <div class="row" style="margin-top:10px; margin-bottom:40px;">
                    <div class="col-md-5">
<?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
    $id1=$row['id'];
?> 

                        <iframe src="<?php echo $row['googlemap']; ?>" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<?php } ?>

                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <div class="">
                            <div class="title">
                                <span>We would like to know you</span>
                                <h2 class="color-hty" style="color:#000">CONTACT US</h2>
                            </div>
                            <!--<div class="descriptions">-->
                            <!--    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id tempor dolor, id cursus sem. Vestibulum placerat non nibh et sodales. </p>-->
                            <!--</div>-->
                            <form class="contact-form" method="post">
                                <div class=" col-md-6 col-xs-12 mb-2">
                                    <input type="text" style="color:black;" required value="Your Name *" name="name" class="form-control">
                                </div>
                                <div class="f col-md-6 col-xs-12 mb-2">
                                    <input type="text" style="color:black;" required value="Your Mobile Number" name="phone" class="form-control">
                                </div>
                                <div class=" col-md-12 col-xs-12 mb-2">
                                  
                                      <input type="email" style="color:black;" required value="Your Email *" name="email" class="form-control">
                                </div>
                           
                                <div class=" col-md-12 col-xs-12 mb-2">
                                    <textarea name="message" style="color:black;" required class="form-control" rows="4">Your Message</textarea>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Send" name="contactform" class="submit-contact">
                                </div>
                                <div id="contact-content"></div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="row" style="margin-top:40px; margin-bottom:40px;">
                     <div class="col-md-12 text-center mt-2 mb-2">
                         <h4>Our Branch Offices</h4>
                         </div>
                         
                      <?php
$ret=mysqli_query($con,"select * from adminaddress ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 
                             
                    <div class="col-md-4 col-xs-12 text-center mt-2 mb-2">
                        <div class="naqw">
                            <p style="font-size:22px;"><img src="image/location-icon.png" alt="Location" class="oqaxz"></p>
                            <p style="font-size:16px"><?php echo $row['city']; ?></p>
                            <h5 style="margin-top:0;"><a href="#"><?php echo $row['address']; ?></a></h5>
                             <p><a href="mailto:<?php echo $row['adminemail1']; ?>" style="font-size:16px;"><i class="fa fa-envelope"></i> <?php echo $row['adminemail1']; ?></a></p>
                            <a href="tel:<?php echo $row['contact1']; ?>" style="font-size:16px;"><i class="fa fa-phone"></i> +91-<?php echo $row['contact1']; ?></a>
                                                             ,
                            <a href="tel: <?php echo $row['contact2']; ?>" style="font-size:16px;"><i class="fa fa-phone"></i> +91- <?php echo $row['contact2']; ?></a>
                                
                                                        </div>
                    </div>
                    
                 <?php } ?>   
                                        
                </div>
            </div>
        </section>

     <style>
    .ccl-refresh-footer {
    background: #e3f2ff;
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjUwJSIgeTE9IjAlIiB4Mj0iNTAlIiB5Mj0iMTAwJSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2UzZjJmZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==);
    background-size: 100%;
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffffff), color-stop(100%, #ffffff));
    background-image: -webkit-linear-gradient(#ffffff, #ffffff);
    background-image: -moz-linear-gradient(#ffffff, #ffffff);
    background-image: -o-linear-gradient(#ffffff, #ffffff);
    background-image: linear-gradient(#ffffff, #ffffff);
}
 </style>
   
 
 <!--  <div class="container-fluid f-hide1" style="background: #ffffff;">-->
 <!--    <div class="container">-->
 <!--      <div class="row">-->
 <!--          <div style="position: absolute;  left: 0; right: 0; margin: auto; text-align: center; top: 20%;">-->
 <!--              <h4 style="font-size: 20px;">Ready to get Holiday Pakages? Get your <br>free quote</h4>-->
 <!--              <h5 style="font-size: 25px; color: #990000;">Call Now : <br><span style="">+91 7535869999,+91 8755558615</span></h5>-->
 <!--               <div class="section-title ">-->
 <!--               <h2 style="margin-top:0px; margin-bottom:0;"><a href="https://abdholidays.com/hotels" class="gradient-button gradient-button-1">-->
 <!--               Enquiry Now-->
 <!--               <i class="fa-solid fa-circle-chevron-right"></i><i class="fa fa-arrow-circle-o-right" style="font-size:16px;"></i></a></h2>-->
 <!--               </div>-->
 <!--          </div>-->
 <!--           <img src="https://abdholidays.com/nice/shape2.png">-->
 <!--      </div>-->
 <!--  </div>-->
 <!-- </div>-->
   
 <!--<div class="container-fluid f-hide" style="background: #ffffff;">-->
 <!--    <div class="container">-->
 <!--      <div class="row">-->
 <!--          <div style="position: absolute;  left: 0; right: 0; margin: auto; text-align: center; top: 20%;">-->
 <!--              <h4 style="font-size: 12px;">Ready to get Holiday Pakages? Get your <br>free quote</h4>-->
 <!--              <h5 style="font-size: 14px; color: #990000;">Call Now : <br><span style="">+91 7535869999,+91 8755558615</span></h5>-->
 <!--               <div class="section-title ">-->
               
 <!--               </div>-->
 <!--          </div>-->
 <!--           <img style="height: 200px; width: 100%;" src="https://abdholidays.com/nice/bgd.png">-->
 <!--      </div>-->
 <!--  </div>-->
 <!-- </div>-->
 
 <style>
 .f-hide{
     display: none;
 }
 .f-hide1{
     display: block;
 }
     @media only screen and (max-width: 768px) {
  .f-hide{
     display: block;
 }
 .f-hide1{
     display: none;
 }
}

 </style>
 

 
<?php include('footer.php'); ?>