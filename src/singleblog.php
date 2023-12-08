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
     

        <section class="blog-page" style="margin-top:100px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-page__content blog-single">
<?php
$ret=mysqli_query($con,"select * from blog where id='$id' ");
while ($row=mysqli_fetch_array($ret)) 
{
?>                     

                            <!-- POST -->
                            <div class="post">
                                <div class="post-meta">
                                    <div class="date"><?php echo $row['date']; ?></div>                              
                                </div>
                                <div class="post-title">
                                    <h1><?php echo $row['name']; ?></h1>
                                </div>
                                <div>
                                    <div class="image-wrap">
                                        <img src="image/blog/<?php echo $row['image']; ?>" alt="">
                                    </div>
                                </div>
                                <div style="margin-top: 20px;">
                                    <div class="post-content">
<?php 
                            echo str_replace('<p','<p style="text-align:justify"><span style="font-size:12pt;font-family:Georgia""',$row['shortdescription']);?>
 


                    <?php 
                            echo str_replace('<h2','<h2 style="text-align: justify;font-size:16pt;font-family:Georgia;"',str_replace('<p','<p style="text-align;justify;font-size:12pt;font-family:Georgia;"dir="LTR"',str_replace('<li','<li style="text-align:justify;font-size:14pt;font-family:Georgia;" dir="LTR"',$row['description'])));?>

                                    </div>
                                </div>
                             
                            </div>

                        <?php } ?>
                            <!-- END / POST -->
  
                     
                            <!-- COMMENTS -->
                            <div id="comments">
                                <!-- LEAVER YOUR COMMENT -->
                                <div id="respond">
                                    <div class="reply-title">
<?php
$ret=mysqli_query($con,"select * from blogcommentsform where blogid='".$_GET['id']."' ");
$row=mysqli_num_rows($ret); 

?> 
                                                                                <h4><?php echo $row; ?> Comments </h4>

                                    </div>
                                    <form method="post" onSubmit="alert('Thank You for Your Comment!');">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-item form-textarea-wrapper">
                                                    <textarea name="message">Comment here</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-item form-name">
                                                    <input type="text" value="Your name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-item form-email">
                                                    <input type="text" value="Your email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="display: none;">
                                                <div class="form-item form-email">
                                                    <input type="text" value="<?php echo $id; ?>" name="blogid">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-actions">
                                                    <input type="submit" value="Post Comment" name="blogcommentform">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END / LEAVER YOUR COMMENT -->
<style>
table,tr, th, td {
  padding-right:90px;
  padding-left: 90px;
  text-align: center;
  width: fit-content;
}

</style>
                                <div class="commentlist-wrapper">
                                    <ul class="commentlist">
                                       <table> 
                                        <thead>
                                            <th>Name</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                        </thead>
                                        <tbody>
<?php
$ret=mysqli_query($con,"select * from blogcommentsform where blogid='$id' ");
while ($row=mysqli_fetch_array($ret)) 
{
?>     
<tr ><td> <?php echo $row['name'] ?></td><td> <?php echo $row['message'] ?></td><td> <?php echo $row['date'] ?></td></tr>
<?php } ?>
</tbody>
</table>
                                    </ul>
                                </div>
                            </div>
                            <!-- END / COMMENTS -->



                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="page-sidebar" style="margin-top:30px;">
                        

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