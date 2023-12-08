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






<!--slide-->
   <section style="margin-top:60px;"> 
    <div class="swiper mySwiper-slide">
      <div class="swiper-wrapper">
        
        <?php
$ret1=mysqli_query($con,"select * from homeslider ");
while($row1=mysqli_fetch_array($ret1)){

?> 
                        <div class="swiper-slide ">
            <div class="bg-te animation-element slide-left" >
                         </div>
            <img src="image/homeslider/<?php echo $row1['image'] ?>" class="imgwe" alt="slider-1.jpg">
         </div>
        <?php } ?>
    
    
             </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
    </div>
    </section>
        <!--slide end-->












   <section> 
    <div class="swiper mySwiper-slide">
      <div class="swiper-wrapper">
                 </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
    </div>
    </section>
        <!--slide end-->


        <!--=====================================
                    DEALS PART START
        =======================================-->
        <section class="section deals-part" style="margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="section-title  text-center qlbvn" style="margin-top:60px;">
<?php
$ret=mysqli_query($con,"select * from helicoptertitle ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 
                         <p class="sunm mb-0"><?php echo $row['subtitle1'] ?></p>
                  <h1 class="mt-0" style="margin-bottom:20px; font-family: 'Roboto', sans-serif;  font-size: 30px;  
                   text-shadow: 0 1px 2px rgb(0 0 0 / 85%), 0 0 6px rgb(239 230 190 / 75%); font-weight: 500;"><?php echo $row['title1'] ?></h1>
               <?php } ?>
                </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">



<?php

$ret=mysqli_query($con,"select * from helicopter");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...
        $id1=$row['id'];


?>




                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                </div>
                                <a class="product-image" href="helicopters.php?id=<?php echo $row['id'] ?>">
                                      <?php
$ret1=mysqli_query($con,"select * from helicopterimages where helicopterid='$id1' ");
$row1=mysqli_fetch_array($ret1);

?> 

                                    <img loading="lazy" src="image/helicopter/<?php echo $row1['image'] ?>" style="width: 400px;height: 200px;" alt="<?php echo $row1['image']  ?>">
                                </a>
                                <div class="product-widget">
                                    <a title="whatsapp" href="https://api.whatsapp.com/send?phone=                            
                                    <?php
$ret1=mysqli_query($con,"select * from admin ");
$row1=mysqli_fetch_array($ret1) 

    # code...


?>
<?php echo htmlentities($row1['contact1']) ?>

&text=Hello i want to enquire about <?php echo $row['name']; ?>  <?php echo $row['duration']; ?>" class="wkm" target="_blank"> <img src="image/icons8-whatsapp.gif" alt="whatsapp" style="width:35px;"></a>

                                    <a title="<?php echo $row['name']; ?>" href="helicopters.php?id=<?php echo $row['id'] ?>" class="fas fa-eye" ></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
<?php echo $row['duration'] ?>
                                <a href="helicopters.php?id=<?php echo $row['id'] ?>"></a>
                                </div>
                                <h6 class="product-name">
                                        <a href="helicopters.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a>
                                </h6>
                                <h6 class="product-price">
                                        <span>₹<?php echo $row['price']; ?></span>
                                </h6>
                                    
                            </div>
                        </div>
                    </div>










<?php } ?>




                </div>
            </div>
        </section>
        <!--=====================================
                    DEALS PART END
        =======================================-->





  
  
                          

  
 


        <!--=====================================
                    DEALS PART START
        =======================================-->
        <section class="section deals-part" style="margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="section-title  text-center qlbvn" style="margin-top:60px;">
                         <p class="sunm mb-0">Luxury Tour Packages</p>
                  <h1 class="mt-0" style="margin-bottom:20px; font-family: 'Roboto', sans-serif;  font-size: 30px;  
                   text-shadow: 0 1px 2px rgb(0 0 0 / 85%), 0 0 6px rgb(239 230 190 / 75%); font-weight: 500;">Chardham Yatra By Road <?php 
// PHP program to get the
// current year
  
echo "Current Year is :"; 
  
// Store the year to
// the variable
$year = date("Y"); 
  
// Display the year
echo $year; 
  
?> </h1>

                </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">



<?php

$ret=mysqli_query($con,"select * from packages  group by name");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...
        $id11=$row['id'];


?>




                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                </div>
                                <a class="product-image" href="packages.php?id=<?php echo $row['id'] ?>">
                                      <?php
$ret1=mysqli_query($con,"select * from packagesimage where packageid='$id11' ");
$row1=mysqli_fetch_array($ret1);

?> 

                                    <img loading="lazy" src="image/packagesimage/<?php echo $row1['image'] ?>" style="width: 400px;height: 200px;" alt="<?php echo $row1['image']  ?>">
                                </a>
                                <div class="product-widget">
                                    <a title="whatsapp" href="https://api.whatsapp.com/send?phone=                            
                                    <?php
$ret1=mysqli_query($con,"select * from admin ");
$row1=mysqli_fetch_array($ret1) 

    # code...


?>
<?php echo htmlentities($row1['contact1']) ?>

&text=Hello i want to enquire about <?php echo $row['name']; ?>  <?php echo $row['duration']; ?>" class="wkm" target="_blank"> <img src="image/icons8-whatsapp.gif" alt="whatsapp" style="width:35px;"></a>

                                    <a title="<?php echo $row['name']; ?>" href="packages.php?id=<?php echo $row['id'] ?>" class="fas fa-eye" ></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
<?php echo $row['duration'] ?>
                                <a href="packages.php?id=<?php echo $row['id'] ?>"></a>
                                </div>
                                <h6 class="product-name">
                                        <a href="helicopters.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a>
                                </h6>
                                <h6 class="product-price">
                                        <span>₹<?php echo $row['price']; ?></span>
                                </h6>
                                    
                            </div>
                        </div>
                    </div>










<?php } ?>






<?php

$ret=mysqli_query($con,"select * from destination ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...
        $id11=$row['id'];


?>




                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                </div>
                                <a class="product-image" href="helicopters.php?id=<?php echo $row['id'] ?>">
                                      <?php
$ret1=mysqli_query($con,"select * from destinationimage where destinationid='$id11' ");
$row1=mysqli_fetch_array($ret1);

?> 

                                    <img loading="lazy" src="image/destinationimage/<?php echo $row1['image'] ?>" style="width: 400px;height: 200px;" alt="<?php echo $row1['image']  ?>">
                                </a>
                                <div class="product-widget">
                                    <a title="whatsapp" href="https://api.whatsapp.com/send?phone=                            
                                    <?php
$ret1=mysqli_query($con,"select * from admin ");
$row1=mysqli_fetch_array($ret1) 

    # code...


?>
<?php echo htmlentities($row1['contact1']) ?>

&text=Hello i want to enquire about <?php echo $row['name']; ?>  <?php echo $row['duration']; ?>" class="wkm" target="_blank"> <img src="image/icons8-whatsapp.gif" alt="whatsapp" style="width:35px;"></a>

                                    <a title="<?php echo $row['name']; ?>" href="helicopters.php?id=<?php echo $row['id'] ?>" class="fas fa-eye" ></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
<?php echo $row['duration'] ?>
                                <a href="destination.php?id=<?php echo $row['id'] ?>"></a>
                                </div>
                                <h6 class="product-name">
                                        <a href="helicopters.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a>
                                </h6>
                                <h6 class="product-price">
                                        <span>₹<?php echo $row['price']; ?></span>
                                </h6>
                                    
                            </div>
                        </div>
                    </div>










<?php } ?>




                </div>
            </div>
        </section>
        <!--=====================================
                    DEALS PART END
        =======================================-->


  
  
  
  
        
        <!--frst sec-->
             <section class="backlm">
              <div class="container-fluid ">
                     <div class="row padmnb">
                        <div class="col-md-3 animate fadeInDown four">
                            <div class="section-title">
<?php
$ret1=mysqli_query($con,"select * from section1");
while($row=mysqli_fetch_array($ret1))
{
?> 

                                <h2 style="font-size: 30px; margin-top:70px;  font-family: 'Rubik', sans-serif; font-weight: 800; " class="lwbn"><?php echo $row['title']; ?></h2>
                                <p style="font-size: 14px;"><?php echo $row['subtitle']; ?></p>
                                <div class="section-title">
                               <h2 style="margin-top:10px; margin-bottom:0;"><a style="margin: 0;" href="<?php echo $row['link']; ?>" class="gradient-button gradient-button-1"><?php echo $row['text']; ?>

                               <i class="fa-solid fa-circle-chevron-right"></i><i class="fa fa-arrow-circle-o-right" style="font-size:16px;"></i></a></h2>
                           <?php } ?>
                            </div>
                            </div>
                        </div>
                         
                        <div class="col-md-9 animate fadeInUp four">
                            <div class="swiper mySwiper111">
                                <div class="swiper-wrapper mt-2 mb-2">

                                    
                              
 <?php
$ret=mysqli_query($con,"select * from packages group by name ");
while ($row=mysqli_fetch_array($ret)) 
{
        $id11=$row['id'];

?> 


                                                                    <div class="swiper-slide"> 
                                    <div class="boxi">
                                                            <?php
$ret1=mysqli_query($con,"select * from packagesimage where packageid='$id11' ");
$row1=mysqli_fetch_array($ret1);

?> 
                                    <img src="image/packagesimage/<?php echo $row1['image'] ?>" alt="<?php echo $row['name'] ?>  <?php echo $row['duration'] ?>" class="boxi-img" >
<?php  ?>

                                         <div class="cat__img__band">Popular Packages</div>
                                         <div class="row" style="padding:5px 15px;">
                                             <div class="col-md-12 col-xs-12">
                                                  <p style="height: 60px; text-align: center; font-size:15px; font-family: 'Rubik', sans-serif; color: #f29b00;
                                                  font-weight: 600;  margin-bottom:0; line-height: 22px;"><?php echo $row['name'] ?></p></div>
                                            
                                             <div class="col-md-12 col-xs-12">
                                                 <ul class="boxi-ul1">
                                                    
                                                    <li style="float: left;">
                                         <p class="boxi-time">   <span style="color: #444;
    font-size: 13px;
    font-weight: 600;"><i class="fa-solid fa-location-dot"></i> &nbsp;Location
                                         </span> </p>
                                                    </li>
                                                     <li style="float: right;"> <p style="margin-bottom:0; color: #444;
    font-size: 12px;
    font-weight: 600;"><i class="fa fa-clock"></i>
                                                    <?php echo $row['duration'] ?>                                                    </p>
                                            </li>
                                                 </ul>
                                              </div>
                                             <div class="col-md-12 col-xs-12">
                                                 <ul  class="boxi-ul1" style="border-top: 1px solid #00000025;">

                                                     <li style="float: left;">  
                                                        <h5 style="font-size: 13px;" class="cost">
                                                            <i class="fa fa-indian-rupee"></i><span> <?php echo $row['price'] ?> / Person</span>
                                                        </h5>
                                                     </li>
                                                     <li  style="float: right;"> <p class="lqbmm">
                                          <a href="packages.php?id=<?php echo $row['id'] ?>" class="btnmn">Get Details</a> 
                                                 
                                                 <a href="https://api.whatsapp.com/send?phone=<?php echo $contact; ?>&text=Hello i want to enquire about <?php echo $row['name'] ?>" class="wkm" target="_blank"><img src="image/icons8-whatsapp.gif" alt="whatsapp" style="width:35px;"></a>
                                                 
                                                 </p>
                                             </li>

                                             </ul>  
                                                                  
                                                 
           <script>
// Get the modal
var modal = document.getElementById("modal");

// Get the button that opens the modal
var btn = document.getElementById("btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>                                       
                                                 
                                         </div>
                                             
                                             
                                         </div>
                                         </div>
                                          </div>
                                    <?php } ?>
                              
 <?php
$ret=mysqli_query($con,"select * from destination ");
while ($row=mysqli_fetch_array($ret)) 
{
        $id11=$row['id'];

?> 


                                                                    <div class="swiper-slide"> 
                                    <div class="boxi">
                                                            <?php
$ret1=mysqli_query($con,"select * from destinationimage where destinationid='$id11' ");
$row1=mysqli_fetch_array($ret1);

?> 
                                    <img src="image/destinationimage/<?php echo $row1['image'] ?>" alt="<?php echo $row['name'] ?>  <?php echo $row['duration'] ?>" class="boxi-img" >
<?php  ?>

                                         <div class="cat__img__band">Popular Packages</div>
                                         <div class="row" style="padding:5px 15px;">
                                             <div class="col-md-12 col-xs-12">
                                                  <p style="height: 60px; text-align: center; font-size:15px; font-family: 'Rubik', sans-serif; color: #f29b00;
                                                  font-weight: 600;  margin-bottom:0; line-height: 22px;"><?php echo $row['name'] ?></p></div>
                                            
                                             <div class="col-md-12 col-xs-12">
                                                 <ul class="boxi-ul1">
                                                    
                                                    <li style="float: left;">
                                         <p class="boxi-time">   <span style="color: #444;
    font-size: 13px;
    font-weight: 600;"><i class="fa-solid fa-location-dot"></i> &nbsp;Location
                                         </span> </p>
                                                    </li>
                                                     <li style="float: right;"> <p style="margin-bottom:0; color: #444;
    font-size: 12px;
    font-weight: 600;"><i class="fa fa-clock"></i>
                                                    <?php echo $row['duration'] ?>                                                    </p>
                                            </li>
                                                 </ul>
                                              </div>
                                             <div class="col-md-12 col-xs-12">
                                                 <ul  class="boxi-ul1" style="border-top: 1px solid #00000025;">

                                                     <li style="float: left;">  
                                                        <h5 style="font-size: 13px;" class="cost">
                                                            <i class="fa fa-indian-rupee"></i><span> <?php echo $row['price'] ?> / Person</span>
                                                        </h5>
                                                     </li>
                                                     <li  style="float: right;"> <p class="lqbmm">
                                          <a href="destination.php?id=<?php echo $row['id'] ?>" class="btnmn">Get Details</a> 
                                                 
                                                 <a href="https://api.whatsapp.com/send?phone=<?php echo $contact; ?>&text=Hello i want to enquire about <?php echo $row['name'] ?>" class="wkm" target="_blank"><img src="image/icons8-whatsapp.gif" alt="whatsapp" style="width:35px;"></a>
                                                 
                                                 </p>
                                             </li>

                                             </ul>  
           <script>
// Get the modal
var modal = document.getElementById("modal");

// Get the button that opens the modal
var btn = document.getElementById("btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>                                       
                                                 
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
                   
<!--                        <div class="col-md-12 text-center" style="margin-top:15px;">-->
<!--                         <div class="dropdown__cta text-center mt-4 mb-5 mb-lg-0">-->
<!--<a href="backpacking-trips.html" class="btn__secondary"><span>View All</span></a>-->
<!--</div>-->
<!--                   </div>-->
                            </div>
                    <!-- <div class="more-destination">
                        <a href="#">More Destinations</a>
                    </div> -->
             </div>
             <!--<div class="explorebg2"><img src="new/tribg2.png" alt="Image of background " title="background" /></div>-->
        </section>
        <!-- MASONRY -->
      

   <!--second sec-->
  <div class="container-fluid category__wrapper container__bg__wrapper">
<div class="container__bg">
<!--<div class="lower__img">-->
<!--<img src="https://www.justwravel.com/assets/img/homepage/paper-bg.webp" loading="lazy" alt="paper-bg">-->
<!--</div>-->
<div class="upper__img cat__upper__bg">
<img src="https://www.justwravel.com/assets/img/homepage/mountain-bg.webp" loading="lazy" alt="mountain-bg">
</div>
</div>
<div class="container-fluid">
<div class="category__content__wrapper max-1400">
   <div class="section-title  text-center qlbvn">
    <?php
$ret=mysqli_query($con,"select * from section2 ");
while ($row=mysqli_fetch_array($ret)) 
{

?> 

            <p class="sunm mb-0"><?php echo $row['subtitle']; ?></p>
                  <h1 class="mt-0" style="margin-bottom:20px;    font-family: 'Roboto', sans-serif;  font-size: 30px;  
                   text-shadow: 0 1px 2px rgb(0 0 0 / 85%), 0 0 6px rgb(239 230 190 / 75%); font-weight: 500; "><?php echo $row['title']; ?></h1>
<?php } ?>
</div>

<div class="cat__card__wrapper">
<div class="d-flex flex-wrap px-lg-5">
    
    <?php
$ret=mysqli_query($con,"select * from places ");
while ($row=mysqli_fetch_array($ret)) 
{

?> 



                                <div class="col-6 col-lg-3 p-1 pr-lg-3 my-1 my-lg-3" style="margin-top: 15px;">
<div class="cat__card">
<div class="cat__img__wrapper">
    
   <img src="image/places/<?php echo $row['image'] ?>"  alt="<?php echo $row['image'] ?>" loading="lazy" class="hfd">
<div class="cat__img__band">Best Sellers </div>
</div>
<div class="cat__content__wrapper">
   
<div class="cat__content">
 
<div class="d-flex align-items-end justify-content-between mb-2">
     <ul style="list-style: none; padding: 0;">
        <li >   <h6 class="cat__heading"><?php echo $row['name'] ?></h6></li>
        <li >
<a target="_blank" href="place.php?id=<?php echo $row['id'] ?>" class="cat__cta__btn">View More <i class="fa fa-caret-right"></i></a></li>
    </ul>

</div>
</div>
</div>
</div>
 
</div>

<?php } ?>



   </div>
</div>
</div>
</div>
</div>  

   <br>  
   



        <!--=====================================
                    DEALS PART START
        =======================================-->
        <section class="section deals-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Custom Vacations to your Favourite Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
<center><h1 class="mt-0" style="margin-bottom:20px; font-family: 'Roboto', sans-serif;  font-size: 30px;   text-shadow: 0 1px 2px rgb(0 0 0 / 85%), 0 0 6px rgb(239 230 190 / 75%); font-weight: 500; ">Packages !!!</h1>
       </center>             </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">



<?php

$ret=mysqli_query($con,"select * from packages group by name");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...
        $id11=$row['id'];


?>




                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
<label class="label-text new">Trending Packages</label>
                                </div>
                                <a class="product-image" href="packages.php?id=<?php echo $row['id'] ?>">
                                      <?php
$ret1=mysqli_query($con,"select * from packagesimage where packageid='$id11' ");
$row1=mysqli_fetch_array($ret1);

?> 

                                    <img loading="lazy" src="image/packagesimage/<?php echo $row1['image'] ?>" style="width: 400px;height: 200px;" alt="<?php echo $row1['image']  ?>">
                                </a>
                                <div class="product-widget">
                                    <a title="whatsapp" href="https://api.whatsapp.com/send?phone=                            
                                    <?php
$ret1=mysqli_query($con,"select * from admin ");
$row1=mysqli_fetch_array($ret1) 

    # code...


?>
<?php echo htmlentities($row1['contact1']) ?>

&text=Hello i want to enquire about <?php echo $row['name']; ?>  <?php echo $row['duration']; ?>" class="wkm" target="_blank"> <img src="image/icons8-whatsapp.gif" alt="whatsapp" style="width:35px;"></a>

                                    <a title="<?php echo $row['name']; ?>" href="packages.php?id=<?php echo $row['id'] ?>" class="fas fa-eye" ></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
<?php echo $row['duration'] ?>
                                <a href="packages.php?id=<?php echo $row['id'] ?>"></a>
                                </div>
                                <h6 class="product-name">
                                        <a href="packages.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a>
                                </h6>
                                <h6 class="product-price">
                                        <span>₹<?php echo $row['price']; ?></span>
                                </h6>
                                    
                            </div>
                        </div>
                    </div>










<?php } ?>




                </div>
            </div>
        </section>
        <!--=====================================
                    DEALS PART END
        =======================================-->


  
        
                               
                         
      
                         

        
         <section style="margin: 20px 0xp 0px 0px;"> 
  <div class="bs2" style="background-image: url(image/im.png);">
      
      <div class="container">
          <div class="row" style="margin-top: 150px;">
              <div class="col-md-3">
                   <section class="card-lg__container">
                    <?php
$ret=mysqli_query($con,"select * from section5 ");
while ($row=mysqli_fetch_array($ret)) 
{

?> 

    <p class="card__text-sm" style="font-size: 28px;"><?php echo $row['title']; ?>
</p>
    <h1 class="card__text-lg"> </h1>
    <p class="card__text-md" style="font-size: 14px; color: #fff;"><?php echo $row['subtitle']; ?> 

</p>
    <a href="<?php echo $row['link']; ?>" class="card__btn" target="_blank" style="color: #fff; font-size: 14px;"><?php echo $row['text']; ?></a>
  </section>
  <?php } ?>

              </div>
                <div class="col-md-9">
                     <section class="card-sm__container" >
    <!--- START: CARD --->
    	 
            <?php
$ret=mysqli_query($con,"select * from helicopter ");
while ($row=mysqli_fetch_array($ret)) 
{
        $id1=$row['id'];

?> 

                      <?php
$ret1=mysqli_query($con,"select * from helicopterimages where helicopterid='$id1' ");
$row1=mysqli_fetch_array($ret1);

?> 
          
    <section class="card-sm" style="background-image:url('image/helicopter/<?php echo $row1['image']; ?>')">
      <p class="card__text-sm"> </p>
      <a href="helicopters.php?id=<?php echo $row['id'] ?>" target="_blank"><h1 class="card__text-lg"><?php echo $row['name'] ?></h1></a>
    </section>
                  
                  <?php } ?>                        
                    </div>
          </div>
      </div>
  
</div>
  </section>
    
       
       
       
               <!--=====================================
                    DEALS PART START
        =======================================-->
        <section class="section deals-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="countdown deals-clock" data-countdown="2021/12/31">
                            <h2>best deals on hotels</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">



<?php

$ret=mysqli_query($con,"select *,hotel.id as hid,hotel.name as hname,hotel.image as himg,city.name as cname from hotel join city on city.id=hotel.hotelscityid");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>




                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off"><?php echo $row['status']; ?></label>
                                    
                                </div>
                                <a class="product-image" href="hoteldetails.php?id=<?php echo $row['hid'] ?>">
                                    <img loading="lazy" src="image/hotel/<?php echo $row['himg'] ?>" alt="<?php echo $row['himg'] ?>">
                                </a>
                                <div class="product-widget">
                                    <a title="<?php echo $row['hname'] ?>" href="hoteldetails.php?id=<?php echo $row['hid'] ?>" class="fas fa-eye" ></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h6 class="product-name">
                                        <a href="hoteldetails.php?id=<?php echo $row['hid'] ?>"><?php echo $row['hname'] ?></a>
                                </h6>
                                <h6 class="product-price">
                                        <span>₹<?php echo $row['startingprice'] ?></span>
                                </h6>
                                    
                            </div>
                        </div>
                    </div>










<?php } ?>




                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="allhotels.php" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                            <span>view all hotels</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    DEALS PART END
        =======================================-->

    
  
  
 
        
 <style>
    .zoom {
 
  transition: transform .1s;
  
}

.zoom:hover {
 
  transform: scale(1.05); 
}
          .container-glass,
.container-glass::before,
.container-glass::after {
  /*border-radius: 7px;*/
  background-color: rgba(254, 251, 234, .8);
  backdrop-filter: blur(5px);
  box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
}
.container-glass {
  position: relative;
  padding: 2rem 1.5rem 1.5rem 1.5rem;
  width: 100%;
  
}
.container-glass::before,
.container-glass::after {
  content: '';
  position: absolute;
}

.container-glass .img {
  width: 100%;
  height: 272px;
  border-radius: 7px;
}

.container-glass .text {
  font-size: 1.01rem;
  color: #DDD;
  margin: 2rem 0;
  text-align: justify;
}

.container-glass .btn {
    display: block;
    margin: auto;
    font-family: 'PT Sans', sans-serif;
    font-size: 14px;
    width: 100%;
    font-weight: 600;
    max-width: 200px;
    padding: 0.6rem 1rem;
    margin-top: 10px;
    background-color: transparent;
    border: 1px solid #f29b00;
    border-radius: 5px;
    color: #f29b00;
    cursor: pointer;
    transition: all .2s linear;
}
.container-glass .btn:hover {
  background-color: #f29b00;
  color: #fff;
}
      </style>  
 

         <!--=====================================
                      BLOG PART START
        =======================================-->
        <section class="section blog-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>Read our articles</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-slider slider-arrow">
                            <?php
$ret=mysqli_query($con,"select * from blog order by id asc limit 4 ");
while ($row=mysqli_fetch_array($ret)) 
{


?>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img loading="lazy" src="image/blog/<?php echo $row['image'] ?>" style="width:250; height:250px;" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span><?php echo $row['date'] ?></span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="singleblog.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
                                    </h4>
                                </div>
                            </div>
                            
                       <?php } ?>     
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="blog.php" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>view all blog</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                      BLOG PART END
        =======================================-->



 <section style="margin: 20px 0;">
    <div class="container">
         <div class="row">
               
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 style="font-size: 30px;  font-family: 'Roboto', sans-serif; 
                        text-shadow: 0 1px 2px rgb(0 0 0 / 85%), 0 0 6px rgb(239 230 190 / 75%); font-weight: 500; ">Why Choose Exploryatra Holidays</h2>
              </div>
              </div>
              <?php
$ret=mysqli_query($con,"select * from iconbox ");
$cnt=0;
while ($row=mysqli_fetch_array($ret)) 
{
?>     



                        <div class="col-md-3 col-xs-12">
                                    <div class="boxpm">
                                     <p class="text-center"><img src="image/iconbox/<?php echo $row['image']; ?>" id="im<?php echo $cnt; ?>" style="width: 100%; height:100%;"  onmouseover="openbox<?php echo $cnt; ?>();" alt="<?php echo $row['image']; ?>" style="float: left;width: fit-content;"></p>

                                     <h6 class="vsff" id="icon<?php echo $cnt; ?>" style="display: none;"><?php echo $row['name']; ?></h6>

<div style="display: none;" id="icon1<?php echo $cnt; ?>">
<?php 
                            echo str_replace('<ul',"<ul class='lxc'",$row['description']);?>
 </div>

                                    </div>
                                </div>

                                <script type="text/javascript">
    function openbox<?php echo $cnt; ?>(){
        document.getElementById("im<?php echo $cnt; ?>").style.width="fit-content";
        document.getElementById("icon<?php echo $cnt; ?>").style.display="block";
        document.getElementById("icon1<?php echo $cnt; ?>").style.display="block";
        setTimeout(setAlert<?php echo $cnt; ?>, 100);
    }
    function setAlert<?php echo $cnt; ?>(){
        document.getElementById("im<?php echo $cnt; ?>").style.width="100%";
        document.getElementById("icon<?php echo $cnt; ?>").style.display="none";
        document.getElementById("icon1<?php echo $cnt; ?>").style.display="none";

    }
</script>

                                <?php $cnt++;} ?>
                                
                            </div>
                        </div>
                </section>
 
 
      
       <style>
           .css-6kluu6{
               display:none;
           }
           .brnd_rgt_tp{
               display:none;
           }
       </style>





















 
<!-- END / MASONRY -->
 
 
 

 

    <!--    <section style="margin-top:20px;">-->
    <!--        <div class="container">-->
    <!--        <div class=" row">-->
    <!--             <div class="section-title  text-center">-->
    <!--                            <h2 style="font-size: 40px;  font-family: 'Kaushan Script', cursive;     text-shadow: 0 1px 2px rgb(0 0 0 / 85%), 0 0 6px rgb(239 230 190 / 75%); font-weight: 500; ">Client Reviews</h2>-->
                               
    <!--                        </div>-->
    <!--                <div class="col-md-12 ulb">-->
    <!--             <div class="swiper mySwiper56">-->
    <!--  <div class="swiper-wrapper" style="margin-top:1%;-->
    <!--    margin-bottom:1%;">-->
    <!--    <div class="swiper-slide">-->
    <!--        <div class="opt">-->
    <!--                    <div class="col-lg-12 col-xs-12 yomi1">-->
    <!--                    <div class="col-md-3 col-xs-4">-->
    <!--                        <p class="oem"><img src="images/beach.jpg" class="ioec"></p>-->
    <!--                           <p class="owe mob-show">Naman Singh</p>-->
    <!--                        <p class="pwm mob-show">Chandigarh</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-9 col-xs-8 ior">-->
    <!--                        <div class="upe">-->
    <!--                        <p class="owe sys-show">Naman Singh</p>-->
    <!--                        <p class="pwm sys-show">Chandigarh</p>-->
    <!--                        <p class="owmc">“ABD Holidays also has a simple and user friendly interference and a quick customer connect team.  It is always important to be comfortable with your travel partner for pleasant and stress free trip.”</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--          </div>-->
    <!--    </div>-->
    <!--    <div class="swiper-slide">-->
             
    <!--                <div class="opt">-->
    <!--                      <div class="col-lg-12 col-xs-12 yomi1">-->
    <!--                    <div class="col-md-3 col-xs-4">-->
    <!--                        <p class="oem"><img src="images/beach.jpg" class="ioec"></p>-->
    <!--                           <p class="owe mob-show">Minal Arora</p>-->
    <!--                        <p class="pwm mob-show">Delhi</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-9 col-xs-8 ior">-->
    <!--                        <div class="upe">-->
    <!--                        <p class="owe sys-show">Minal Arora</p>-->
    <!--                        <p class="pwm sys-show">Delhi</p>-->
    <!--                        <p class="owmc">“Provide best of the facilities and services to the customer. We are accountable for every single penny you spend with us. We are responsible for every arrangement we make for you and will always be there to shoulder our responsibilities.”</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                </div>-->
                
    <!--    </div>-->
    <!--    <div class="swiper-slide">-->
            
    <!--               <div class="opt">-->
    <!--                    <div class="col-lg-12 col-xs-12 yomi1">-->
    <!--                    <div class="col-md-3 col-xs-4">-->
    <!--                        <p class="oem"><img src="images/beach.jpg" class="ioec"></p>-->
    <!--                           <p class="owe mob-show">Naman Singh</p>-->
    <!--                        <p class="pwm mob-show">Chandigarh</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-9 col-xs-8 ior">-->
    <!--                        <div class="upe">-->
    <!--                        <p class="owe sys-show">Naman Singh</p>-->
    <!--                        <p class="pwm sys-show">Chandigarh</p>-->
    <!--                        <p class="owmc">“ABD Holidays also has a simple and user friendly interference and a quick customer connect team. It is always important to be comfortable with your travel partner for pleasant and stress free trip.”</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--          </div>-->
               
    <!--    </div>-->
       
    <!--  </div>-->
    <!--  <div class="swiper-button-next"></div>-->
    <!--  <div class="swiper-button-prev"></div>-->
    <!--</div>-->
    <!--</div>-->
             
    <!--        </div>-->
    <!--        </div>-->
    <!--    </section>-->
    
       

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
 <!--              <h5 style="font-size: 25px; color: #f29b00;">Call Now : <br><span style="">+91 7535869999,+91 8755558615</span></h5>-->
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
 <!--              <h5 style="font-size: 14px; color: #f29b00;">Call Now : <br><span style="">+91 7535869999,+91 8755558615</span></h5>-->
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