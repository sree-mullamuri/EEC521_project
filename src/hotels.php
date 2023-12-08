<?php
session_start();
error_reporting(0);
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body style="background: #fff">

<?php include('header.php'); ?>



 <br><br><br>

<?php
$ret=mysqli_query($con,"select * from hotelstitle ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

<section>
    <div style="position: absolute; z-index: 999999999; left: 0px; right: 0px; margin: auto; text-align: center; top: 50px;">
        <h1 style="color: #fff;">
            <?php echo $row['name'] ?>
        </h1>
    </div>
    <img width="100%" src="image/hotelstitle/<?php echo $row['image'] ?>">
</section>
 <?php } ?>
 
 <section>
     <div class="container">
     <div class="row">
         <div class="col-md-4">
              
         </div>
     </div>
     </div>
 </section>
 
 
 
 <section>
<div class="container" style="margin-top: 50px; margin-bottom: 150px;">
<div class="row"> 
 <?php
$ret=mysqli_query($con,"select * from hotelcity ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

 <div class="col-md-3 mt-2 mb-2">
 <a href="hotel.php?id=<?php echo $row['id'] ?>"><div class="bg-black card mx-auto mt-5">
  <img class="card-img category-img" src="image/hotelscity/<?php echo $row['image'] ?>" alt="">
  <div class="card-img-overlay">
    <p class="category-card-title h5"><?php echo $row['name'] ?></p>
 </div>
</div></a>
</div>
<?php } ?> 
   </div>
 </div>
 </section>
 
 
 
 
 
 <style>
     
 .card {
	  border-radius: 10px;
	 height: 275px;
	 overflow: hidden;
	 width: 100%;
}
 .card .category-img {
	 min-width: 100%;
	 min-height: 100%;
	
	 transition: all, 0.3s;
}
.card .card-img-overlay .category-card-title {
    bottom: 2%;
    color: white;
    left: 40px;
    /* text-align: center; */
    position: absolute;
    font-size: 22px;
    /* margin: auto; */
    text-shadow: 2px 2px 10px #000;
}
 .card .card-img-overlay .btn-category-card {
	 position: absolute;
	 bottom: 20px;
	 right: 20px;
}
 .card:hover .category-img {
	 transform: scale(1.2);
}
 
 </style>
 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  	 <style>
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