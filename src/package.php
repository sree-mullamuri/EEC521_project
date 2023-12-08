

 
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



                <section class="awe-parallax page-heading-demo text-center" style="background-image: url(image/city/16.jpg);" >
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="blog-heading-content text-uppercase">

                        <?php
$ret=mysqli_query($con,"select * from submenuwithheader where id='$id' ");
$ss=0;
while ($row=mysqli_fetch_array($ret)) 
{
    $ss=$row['submenuheaderid'];
?> 
                    <h2><?php echo $row['name'] ?></h2>

                </div>
            </div>
        </section>
        <!-- END / HEADING PAGE -->
        
        
                            
        <section class=" " style="margin-bottom:40px; margin-top:30px;">
            <div class="container  ">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="dest-heading7" style="text-transform:capitalize;"><?php echo $row['name'] ?></h4>
                    </div>
                    <div class="col-md-12">
                        <p class="olqp"></p>
                    </div>
                </div> 
 
            </div>
        </section>
                <?php } ?>
        <section class="filter-page">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-12">
                        <div class="page-top">
                            <select class="awe-select">
                                <option>Best Match</option>
                                <option>Best Rate</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-9 col-md-push-3">
                        <div class="filter-page__content">
                            <div class="filter-item-wrapper destination-list__content">
                                  <!-- ITEM -->

                        <?php
$ret=mysqli_query($con,"select * from packages where submenuwithheaderid='$id' ");
while ($row=mysqli_fetch_array($ret)) 
{
    $id1=$row['id'];
?> 

                                                          <div class="destinations-item">
                            <div class="col-md-3 p-0">
                            <div class="item-media">
                                <div class="image-cover">
<?php
$ret1=mysqli_query($con,"select * from packagesimage where packageid='$id1' limit 1 ");
while ($row1=mysqli_fetch_array($ret1)) 
{
?> 
                                    <img src="image/packagesimage/<?php echo $row1['image'] ?>" alt="<?php echo $row['name'] ?>  <?php echo $row['duration'] ?>" class="iocmas">
<?php } ?>
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="packages.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?>  <?php echo $row['duration'] ?></a>
                                    </h2>
                                </div>
                                <div class="item-description">
                                    <p class="day-ni"><span class="bord-kl">
                                        
                                         
                                        
                                                                                             <span><?php echo $row['duration'] ?></span>
                                
                                                                </span> &nbsp; <span>
                                                                <?php for($i=0;$i<$row['rating'];$i++){

                                                                 ?>
                                                                    <i class="fa fa-star"></i> 
                                                                <?php } ?>
                                                                </span></p>
                                   <table class="table mt-up">
                                       <tr>
                                           <td style="border: none;"><i class="fa fa-car"></i> Transportation</td>
                                           <td style="border: none;"><i class="fa fa-bacon"></i> Meal</td>
                                        </tr>
                                        <tr>
                                            <td style="border: none;"><i class="fa fa-camera"></i> Sightseeing</td>
                                            <td style="border: none;"><i class="fa fa-hotel"></i> Accommodation</td>
                                         </tr>
                                   </table>
                                </div>
                                                             
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item-price-more">
                          
                                    <div class="col-md-12 col-xs-6 p-0">
                                       <div class="price">
                                            Starting From
                                                                                        <span class="amount"><i class="fa-solid fa-indian-rupee" style="font-size:21px;"></i> <?php echo $row['price'] ?></span>
                                            <span class="ppr">Per Person</span>
                                                                                    </div>
                                    </div>
                                    <div class="col-md-12 col-xs-6 p-0 bnfg">
                                        <a href="packages.php?id=<?php echo $row['id'] ?>" class="awe-btn">View Detail</a>
                                    </div>
                               
                                </div>
                               
                            </div>
                        </div>



                    <?php } ?>
                                                
                                                <!-- END / ITEM -->

                       
                       
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3 col-md-pull-9">
                        <div class="page-sidebar">
                            <div class="sidebar-title">
                                <h2 style="color:#000">Trip</h2>
                                <!--<div class="clear-filter">-->
                                <!--    <a href="#">Clear all</a>-->
                                <!--</div>-->
                            </div>
                            <!-- WIDGET -->
                            <div class="widget widget_has_radio_checkbox">
                                <h3>Trip Type</h3>
                                <ul style="list-style:square; padding-inline-start:30px;">
                                  

                                                          <?php
$ret=mysqli_query($con,"select * from submenuwithheader where submenuheaderid='$ss' ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 
                                      <li>
                                        <a href="package.php?id=<?php echo $row['id'] ?>" style="color:#000;"><?php echo $row['name'] ?></a>
                                       

                                    </li>

<?php } ?>                                                                        
                                </ul>
                            </div>
                            <!-- END / WIDGET -->

 

                        </div>
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