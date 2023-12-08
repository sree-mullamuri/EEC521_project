<?php
session_start();
error_reporting(0);
include('config.php');
$id=$_GET['id'];
$ret1=mysqli_query($con,"select * from hotelcity where id='$id' ");
$row1=mysqli_fetch_array($ret1);

$nam=$row1['name'];

?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body style="background: #fff">

<?php include('header.php'); ?>

<?php
$ret=mysqli_query($con,"select * from hotelstitle ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

                 <!-- HEADING PAGE -->
        <section class="awe-parallax page-heading-demo text-center" style="background-image: url(image/hotelstitle/<?php echo $row['image'] ?>);" >
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="blog-heading-content text-uppercase">
                    <h2><?php echo $row['name']; echo '-'; echo $nam; ?></h2>
                </div>
            </div>
        </section>
        <!-- END / HEADING PAGE -->
 <?php } ?>
 
    <section style="margin-top: 30px; margin-bottom:50px;">
            <div class="container">
                     <div class="row">
          
                            <!--<div class="section-title ioph text-center">-->
                            <!--    <h2 style="font-size: 30px;  font-family: 'Roboto', sans-serif;     text-shadow: 0 1px 2px rgb(0 0 0 / 85%), 0 0 6px rgb(239 230 190 / 75%); font-weight: 500; ">Our Hotels</h2>-->
                               
                            <!--</div>-->
                         <div class="col-md-12">
                                                                         
<?php
$ret=mysqli_query($con,"select * from hotel where hotelscityid='$id' ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

                                                                            <div class="col-md-4 " style="margin-top:10px; margin-bottom:10px;">
                                         <a href="hoteldetails.php?id=<?php echo $row['id'] ?>" class="utf_listing_item-container compact">
				
				
				
				
				
					<div class="utf_listing_item">  <img src="image/hotel/<?php echo $row['image'] ?>" alt="Hotel Renest"> <span class="tag"><i class="im im-icon-Chef-Hat"></i> hotel</span> 
					  <span class="utf_open_now"><?php echo $row['status'] ?></span>
					  <div class="utf_listing_item_content">
					    <h3> <?php echo $row['name'] ?></h3>
						<!--<span><i class="fa-solid fa-location-dot"></i> </span>-->
						 										
					  </div>					  
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div >	<span class="utf_meta_listing_price" style="font-size: 15px; color: #000; font-weight: 6000;">
						    <span  style="font-size: 12px; color: #000;">
						        Starting from</span>&nbsp;&nbsp;
						        <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;<?php echo $row['startingprice'] ?>						       
						        
						        </span></div>
						<span class="utf_view_count"></span>
						<span class="like-icon"></span>
					</div>
					</a> 
                                   </div>
<?php } ?>


                                                                                     
                               
                        </div>
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