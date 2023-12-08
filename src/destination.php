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


<style>
   .ulwec p,.ulwec span,.ulwec div,.ulwec a,.ulwec h1,.ulwec h2,.ulwec h3,.ulwec h4,.ulwec h5,.ulwec h6{
    font-size: 15px;
    
    line-height: 24px;
    }
    
     
    .ulwec li{
        /*margin-bottom:10px;*/
        line-height:26px;
    }
   .ulwec table tr td{
        font-family: 'Roboto', sans-serif;
    }
    .h5a{
                    color: #fff; padding: 15px;
                }
   .cont-size{
      width: 85%;
    }
    .vf{
        display: block;
    }
    @media only screen and (max-width: 768px) {
         .vf{
        display: none;
    }
   .cont-size{
      width: 100%;
    }
      }
</style>
        
        <section class="product-detail rmsa ulwec">
            <div class="container cont-size">
               <div class="row">
                    <div class="col-md-9">
                         <div class="product-detail__info hidden-md hidden-lg">
                        <div class="product-title">
                            <?php
$ret=mysqli_query($con,"select * from destination where id='$id' ");
while ($row=mysqli_fetch_array($ret)) 
{
    $id1=$row['id'];
?> 

                          <h3 style="font-size: 16px; font-weight: 500;"><?php echo $row['name']; ?> <?php echo $row['duration']; ?></h3>
                                                                                    <p><span class="time-gh">Duration : &nbsp;<?php echo $row['duration']; ?></span></p>
                                
                                                       
                        </div>
                    </div>
                        <div class="product-detail__gallery">
                            <div class="product-slider-wrapper">
                                <div class="product-slider">
                                                                  
<?php
$ret1=mysqli_query($con,"select * from destinationimage where destinationid='$id1' ");
while ($row1=mysqli_fetch_array($ret1)) 
{

    ?>    
                                                                       <div class="item">
                                        <div class="vf" style="position: absolute; z-index: 999999; background: rgba(0,0,0,0.5); width: 100%; padding: 6px 0; bottom: 0;">
                                            <a class="h5a" style="font-size: 20px; color: #fff;"><?php echo $row['name']; ?>  <?php echo $row['duration']; ?></a>
                                        </div>
                                        <img src="image/destinationimage/<?php echo $row1['image']; ?>" alt="<?php echo $row['name']; ?>  <?php echo $row['duration']; ?>">
                                       
                                    </div>
                                <?php } ?>

                                                                        
                                                                      </div>
                              </div>
                        </div>
                           
                    <div class="  package_tab_view" id="detailstab">
                      <ul class="nav nav-tabs hteldetailmenu  border-bottom-0">
                        <li>
                          <a href="#Overview" class="nav-link active">Overview</a>
                        </li>
                        <li>
                          <a href="#Itinerary" class="nav-link">Itinerary</a>
                        </li>
                        <li>
                          <a href="#inclusion" class="nav-link">Inclusion</a>
                        </li>
                        <li>
                          <a href="#inclusion" class="nav-link text-center">Exclusion</a>
                        </li>
                        <!-- <li><a href="#Inclusion" class="nav-link">Package Policy </a></li>-->
                        <li>
                          <a href="#Enquiry" class="nav-link" data-target=".bd-example-modal-lg" data-toggle="modal">Enquiry</a>
                        </li>
                      </ul>
                    </div>
                                         <div id="Overview">
                      <div class=" ">
                        <h5 class="logo_color1 fw_5 pt-4 pb-0 mb-3" style="font-weight: 600;">About Tour</h5>
                        <div class="row  p15 mb15 parentclass m-0 iternnary_border">
                          <span class="fs_12">

<?php
$ret1=mysqli_query($con,"select * from destinationabout where destinationid='$id1' ");
while ($row1=mysqli_fetch_array($ret1)) 
{

    ?>    

<?php echo $row1['name']; echo $row1['description']; ?>
<?php } ?>
                          </span>
                        </div>
                      </div>
                    </div>
                                        
                    <div id="Itinerary">
                     
                    
                        <div class="bd-example  package_overview" id="package_overview">
                          <div class="row m-0 tab_container pt-3">
                            <div class="  date_add">
                           <h5 class="logo_color1 fw_5 pt-4 pb-0 mb-0" style="font-weight: 600;">Itinerary Highlights</h5>
                                                          
<?php
$ret1=mysqli_query($con,"select * from destinationitinerary where destinationid='$id1' ");
while ($row1=mysqli_fetch_array($ret1)) 
{

    ?>    


                                                          <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                                   
                                <h4 id="list-item-1">
                                  <div class="pd_shadow">
                                    <div class="day_desc">
                                      <div class="day_content">
                                        <div class="day_content_left">
                                          <div class="col-md-9 p-0">
                                            <div class="day_type">
                                              <div class="d-flex package_link">
                                                <a class="list-group-item list-group-item-action text-white text-left pt-2 pb-2 border-radius-0" href="#list-item-999">
                                                  <?php echo $row1['name'];?></a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="text-capitalize span_hotel">
                                              <span><br>  </span>  
                                            </div>
                                          </div>
                                        </div>
                                        
                                         <div style="padding: 55px 10px 10px 10px;"><p style="font-size: 14px; text-align: justify;">

                                            <?php 
                            echo str_replace('<p','<p style="font-size: 14px; text-align: justify;"',$row1['description']);?>

                                                </div>
                                          <div class="w-100 "> </div>
                                       
                                     </div>
                                    </div>
                                  </div>
                                       </h4>
                                    </div>
<?php } ?>



                                                                      </div>
                         
                            
                            </div> 
                          
                          </div>
                        </div>
                       
                        
                   <div id="inclusion">
                      <div class="">
                        <h5 class="logo_color1 fw_5 pt-4 pb-0 mb-3" style="font-weight: 600;">Inclusion</h5>
                        <div class="row  p15 mb15 parentclass m-0 iternnary_border">
                          <span class="fs_12">
                              <ul>
                                <?php
$ret1=mysqli_query($con,"select * from destinationinclusion where destinationid='$id1' ");
while ($row1=mysqli_fetch_array($ret1)) 
{

    ?>    

                                                                                     <li>
                                             <div class="timeline-content">
                                               
                                                <p style="text-align: justify;"><?php echo $row1['name']; ?></p>
                                             </div>
                                          </li>
                                      <?php } ?>
                                                                                   </ul>
                          </span>
                        </div>
                      </div>
                    </div>
                    
                                   
                                   
                                         <div id="exclusion">
                      <div class=" ">
                        <h5 class="logo_color1 fw_5 pt-4 pb-0 mb-3" style="font-weight: 600;">Exclusion</h5>
                        <div class="row  p15 mb15 parentclass m-0 iternnary_border">
                          <span class="fs_12">
                          <ul>
<?php
$ret1=mysqli_query($con,"select * from destinationexclusion where destinationid='$id1' ");
while ($row1=mysqli_fetch_array($ret1)) 
{

    ?>    

    <li><?php echo $row1['name']; ?></li>
<?php } ?>
</ul>
                          </span>
                        </div>
                      </div>
                    </div>
                      
                        </div>
             
    <style>
 .road {
    box-shadow: 0 3px 30px 0 rgb(0 0 0 / 10%); height: 320px; padding: 10px; border-radius: 10px;
  }
        @media only screen and (max-width: 768px) {
  .road {
    box-shadow: 0 3px 30px 0 rgb(0 0 0 / 10%); height: 260px; padding: 10px; border-radius: 10px; margin-top: 10px;
  }
}
    </style>         
             
             
             
             
                    <div class="col-md-3">
                        <div class="road">
                        <div class="product-detail__info">
                            <div class="product-title hidden-xs hidden-sm">
                               
                              <ul style="padding: 0; list-style: none; margin-top: 10px;">
                                   <li style="text-align: center;">
                                    <p class="amount16"><i class="fa-solid fa-indian-rupee" style="font-size:24px;"></i><?php echo $row['price']; ?>                                     <span class="pprt">Per Person</span></p> 
                                  </li>
                                 
                              </ul>
                              
                             </div>
                         
                          <div class="ueac mt-5">
                               <h5><img src="https://img.icons8.com/windows/22/000000/sorting-options.png"/>&nbsp; Customize Tour</h5>
                                <p style="font-size: 12px;">Customizable itineraries where you may choose transport, stay & sightseeing as per your taste & comfort.</p>
                                
                                                                                        <p><span style="font-weight: 600;">Duration : &nbsp;<?php echo str_replace('n','Nights',str_replace('N','Nights',str_replace('d','Days',str_replace('D','Days',$row['duration'])))); ?></span></p>
                                
                                                        </div>
                            <div class="col-md-12 col-xs-12" style="padding-left:5px; padding-right: 5px; margin-top: 5px; margin-bottom:10px;">
                                <div class="button-iti1" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                    <a id="myBtn16">
                                      
                                   <i class="fa-solid fa-envelope"></i>&nbsp; Send Enquiry</a>
                                </div>
                            </div>

                            <div class="col-md-12 col-xs-12" style="padding-left:5px; padding-right: 5px; margin-top:5px; margin-bottom:10px;">
                                <div class="button-iti1"  style="background: #748098; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                                    <?php
$ret1=mysqli_query($con,"select * from admin ");
$contact=0;
while ($row1=mysqli_fetch_array($ret1)) 
{
 $contact=$row1['contact1'];
    ?>    

                                    <a href="tel:+<?php echo $row1['calltobook'] ?>;" id="myBtn12" style="color: #fff;">
                                        <!--<img src="img/questions.png"/>-->
                                 <i class="fa-solid fa-phone"></i> &nbsp; Call our Holiday Expert</a>
                                </div>
                            </div>


                           </div> 
                           </div>
                           <br>  
                            <div class="call-to-book" id="enquiry">
                                <i class="awe-icon fa fa-phone"></i>
                                <em>Call to book</em>
                                <span>+91-<?php echo $row1['calltobook'] ?></span>
                                    <?php } ?>
                            </div>
                            <div class="booking-info" id="enquiry">
                              
                                <h3 class="text-center">Send Enquiry</h3>
                                <form method="post" action="#">
                                <div class="form-group">
                                    <div class="form-elements">
                                    
                                        <div class="form-item">
                                    <input type="text" style="color:black;" required class=" form-control" value="Destination" name="destination">
                                        </div>
                                       
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-xs-12  pl-0 pr-0" style="margin-bottom:10px;">
                                    <div class="form-elements">
                                   
                                    <div class="form-item">
                                        <input type="text" style="color:black;" required class="form-control awe-calendar" value="Departure Date" name="departuredate">
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-xs-6 pl-0" style="padding-right: 4px;">
                                    <div class="form-elements">
                                    
                                        <div class="form-item">
                                  
                                            <input type="text" style="color:black;" required class=" form-control" value="Adult" name="adult">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-xs-6 pr-0" style="padding-left: 4px;">
                                    <div class="form-elements">
                                    
                                        <div class="form-item">
                                  
                                            <input type="text" style="color:black;" required class=" form-control" value="Child(5-12 Yrs)" name="child">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-xs-12  pl-0" style="padding-right: 4px;">
                                    <div class="form-elements">
                                    
                                        <div class="form-item">
                                  
                                            <input type="text" style="color:black;" required class=" form-control" value="Name" name="name">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-xs-12  pr-0" style="padding-left: 4px;">
                                    <div class="form-elements">
                                    
                                        <div class="form-item">
                                  
                                            <input type="text" style="color:black;" required class=" form-control" value="Phone" name="phone">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-xs-12  pl-0 pr-0">
                                    <div class="form-elements">
                                    
                                        <div class="form-item">
                                  
                                            <input type="text" style="color:black;" required class=" form-control" value="Email" name="email">
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12 col-xs-12  pl-0 pr-0">
                                    <div class="form-elements">
                                    
                                        <div class="form-item">
                                  <textarea name="message" id="" style="color:black;" required cols="30" rows="4" class="form-control">Let us know more about your requirements</textarea>
                                             
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-actions col-md-12 text-center">
                                    <button style="background: #990000;" type="submit" name="sendenquiryform" class="awe-btn awe-btn-style3">Get Custom Quote</button>
                                </div>
                                 
                            </form>
                            </div>
                      
                    </div>
                </div>
               
 <?php } ?>
            </div>
        </section>


  <!-- MASONRY -->
  <section class="masonry-section-demo67">
            <div class="container">

                <div class=" ">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-title ioph">
                                <h2>Related <span class="heading-i">Packages</span></h2>
                                <p>Explore Packages</p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            
                            <div class="swiper mySwiper1">
                                <div class="swiper-wrapper "  style="margin-top:5px; margin-bottom:5px;">
                                                                             
                        <?php
$ret=mysqli_query($con,"select * from destination where  id<>'$id1'");
while ($row=mysqli_fetch_array($ret)) 
{
    $id4=$row['id'];
?> 


                                                                             <div class="swiper-slide">
                                
                                         <div class="boxi">

<?php
$ret1=mysqli_query($con,"select * from destinationimage where destinationid='$id4' limit 1 ");
while ($row1=mysqli_fetch_array($ret1)) 
{
?> 
                                    <img src="image/destinationimage/<?php echo $row1['image'] ?>" alt="<?php echo $row['name'] ?>  <?php echo $row['duration'] ?>" class="boxi-img">
<?php } ?>

                                          <div class="cat__img__band">Related Packages</div>
                                         <div class="row" style="padding:5px 15px">
                                             <div class="col-md-12 col-xs-12">
                                                  <p style="height: 60px; text-align: center; font-size:15px; font-family: 'Rubik', sans-serif; color: #990000; font-weight: 600;  margin-bottom:0; line-height: 22px;"><?php echo $row['name'] ?>  <?php echo $row['duration'] ?></p>
                                             </div>
                                             
                                              <div class="col-md-12 col-xs-12">
                                                 <ul class="boxi-ul1">
                                                    
                                                    <li style="float: left;">
                                         <p class="boxi-time">   <span style="    color: #444;
    font-size: 13px;
    font-weight: 600;"><i class="fa-solid fa-location-dot"></i> &nbsp;Location
                                         </span> </p>
                                                    </li>
                                                     <li style="float: right;">  <p style="margin-bottom:0;"><i class="fa fa-clock"></i>
                                                    <?php echo $row['duration'] ?>                                                    </p>
                                            </li>
                                                 </ul>
                                              </div>
                                            
                                             <div class="col-md-12 col-xs-12">
                                               
                                           
                                             </div>
                                             
                                              <div class="col-md-12 col-xs-12">
                                                 <ul  class="boxi-ul1" style="border-top: 1px solid #00000025;">
                                                     <li style="float: left;">  
                                                     <p style="font-size:15px; font-weight:600; margin-bottom:5px; margin-top: 10px;"> <i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $row['price'] ?>  <span style="font-size:12px; margin-top:0;">/per person</span></p></li>
                                                     <li  style="float: right;"> <p class="lqbmm">
                                          <a href="destination.php?id=<?php echo $row['id']; ?>" class="btnmn">Get Details</a> 
                                                 
                                                 <a href="https://api.whatsapp.com/send?phone=<?php echo $contact; ?>&text=Hello i want to enquire about " class="wkm" target="_blank"><img src="image/icons8-whatsapp.gif" alt="whatsapp" style="width:35px;"></a>
                                                 
                                                 </p></li>
                                             </ul>  
                                                                  
                                            
                                         </div>
                                             
                                         </div>
                                         </div>
                                          </div>

                                      <?php } ?>

                                                                                 
                                                                    </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        

                    </div>
                    <!-- <div class="more-destination">
                        <a href="#">More Destinations</a>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- END / MASONRY -->

    <style>
        .itinerary-content {
  margin-bottom: 30px;
}
.itinerary-content span {
  color: #1a1a1a;
  font-size: 18px;
  font-weight: 300;
  margin-left: 8px;
}

.itinerary-timeline-wrap .day-count {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
}
.itinerary-timeline-wrap .day-count {
  background-color: #990000;
  color: #ffffff;
  border-radius: 100%;
  height: 40px;
  line-height: 1;
  width: 40px;
  font-size: 13px;
  margin-bottom: 20px;
}
.itinerary-timeline-wrap .day-count span {
  display: block;
  font-family: "Raleway", sans-serif;
  font-size: 18px;
  font-weight: 700;
  line-height: 1;
}
.itinerary-timeline-wrap ul {
  margin: 0;
  padding: 0;
}
.itinerary-timeline-wrap ul li {
  list-style: none;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  margin-bottom: 20px;
}
.itinerary-timeline-wrap ul li:last-child {
  margin-bottom: 0;
}
.itinerary-timeline-wrap .timeline-content {
  background-color: #f9f9f9;
  padding: 25px;
  position: relative;
}
.itinerary-timeline-wrap .timeline-content p:last-child {
  margin-bottom: 0;
}
@media screen and (min-width: 576px) {
  .itinerary-timeline-wrap .day-count {
    background-color: #990000;
    color: #ffffff;
    border-radius: 100%;
    height: 60px;
    margin-bottom: 0;
    line-height: 1;
    width: 60px;
    font-size: 13px;
    position: absolute;
    top: 50%;
    left: -24px;
    -webkit-transform: translate(0, -50%);
    -moz-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%);
  }
  .itinerary-timeline-wrap .day-count span {
    font-size: 23px;
  }
  .itinerary-timeline-wrap .timeline-content {
    margin-left: 24px;
    padding: 25px 25px 25px 50px;
  }
}
    </style>
      
              </style>
              </div>
        </section>
 
                 
                    
                 
           <!-- The Modal -->
        
             
    
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
 

 
<?php include('footer.php') ?>