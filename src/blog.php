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


 <!-- HEADING PAGE -->
        <section class="awe-parallax page-heading-demo" style="background-image: url(image/16.jpg);">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="blog-heading-content text-uppercase">
                    <h2>TRAVEL BLOG</h2>
                </div>
            </div>
        </section>
        <!-- END / HEADING PAGE -->

        
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-page__content">
                                                        <!-- POST -->
<?php
$ret=mysqli_query($con,"select * from blog ");
while ($row=mysqli_fetch_array($ret)) 
{
?>                     

<div class="post">
                                <div class="post-media">
                                    <div class="image-wrap">
                                        <a href="singleblog.php?id=<?php echo $row['id']; ?>">
                                            <img src="image/blog/<?php echo $row['image']; ?>" alt="<?php echo $row['id']; ?>" width="100%">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <div class="date"><?php echo $row['date']; ?></div>
                                    </div>
                                    <div class="post-title">
                                        <h4>
                                            <a style="color:#000; font-size:24px;" href="singleblog.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                                        </h4>
                                    </div>
                                    <div class="post-content">
                                        <?php echo mb_strimwidth($row['shortdescription'],0 , 400,'...'); ?>
                                    </div>
                                    <div class="post-link">
                                        <a href="singleblog.php?id=<?php echo $row['id']; ?>" class="awe-btn awe-btn-style2">Read more</a>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                            <!-- END / POST -->
                                                     
                                                        

                            <!-- PAGINATION -->
                            <!--<div class="page__pagination text-center">-->
                            <!--    <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>-->
                            <!--    <span class="current">1</span>-->
                            <!--    <a href="#">2</a>-->
                            <!--    <a href="#">3</a>-->
                            <!--    <a href="#">4</a>-->
                            <!--    <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>-->
                            <!--</div>-->
                            <!-- END / PAGINATION -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="page-sidebar">
                       

                            <!-- WIDGET -->
                            <div class="widget widget_follow_us">
                                <h3>Follow us</h3>
                                <?php
$ret=mysqli_query($con,"select * from social ");
while ($row=mysqli_fetch_array($ret)) 
{
?>  

                                <div class="awe-social">
                                    <a href="<?php echo $row['facebook'] ?>"><i class=" fa-brands fa-facebook"></i></a>
                                    <a href="<?php echo $row['instagram'] ?>"><i class=" fa-brands fa-instagram"></i></a>
                                    <a href="<?php echo $row['twitter'] ?>"><i class=" fa fa-brands fa-twitter"></i></a>
                                    <a href="<?php echo $row['youtube'] ?>"><i class=" fa-brands fa-youtube"></i></a>
                                     <a href="<?php echo $row['linkedin'] ?>"><i class=" fa-brands fa-linkedin"></i></a>
                                </div>
                            <?php } ?>
                            </div>
                            <!-- END / WIDGET -->
                            
                         

                            <!-- WIDGET -->
                            <div class="widget widget_has_thumbnail">
                                <h3>Recent Posts</h3>
                                <ul>

<?php
$ret=mysqli_query($con,"select * from blog order by id desc limit 6 ");
while ($row=mysqli_fetch_array($ret)) 
{
?>                                                         
                                    <li style="border:1px solid #d4d4d4;">
                                        <div class="image-wrap image-cover">
                                            <a href="singleblog.php?id=<?php echo $row['id']; ?>" style="color:#666;">
                                                <img src="image/blog/<?php echo $row['image']; ?>"  alt="<?php echo $row['name']; ?>">
                                            </a>
                                        </div>
                                        <div class="content" style="padding:5px;">
                                            <a href="singleblog.php?id=<?php echo $row['id']; ?>"  style="color:#666;"><?php echo $row['name']; ?></a>
                                        </div>
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