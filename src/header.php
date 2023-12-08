<style>
    .preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: opacity 0.5s ease-in-out;
}

.preloader.hidden {
  opacity: 0;
}

</style>
<script>
    setTimeout(function() {
  document.querySelector('.preloader').classList.add('hidden');
}, 2000);

</script>
<div class="preloader">
  <div class="timer"></div>
</div>


<a class="btn btn-lmk left2 hidden-xs hidden-sm" style="border:1px solid black;float: left;margin-right:50px; padding:10px;background-color:#f29b00;" id="myBtn12"><i class="fa-solid fa-envelope"></i> Quick Enquiry</a>
     <div id="page-wrap">
        <!-- HEADER PAGE -->
      <header id="header-page" class="hidden-xs hidden-sm"  >
            <div class="header-page__inner" style="background: #f29b00;">
                <div class="container-fluid ity">
                     
                               <div class="row">
                        <div class="col-md-2 col-xs-5 text-center">
                           
   <?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
?>            
                            <a href="index.php"><img src="image/logo/<?php echo $row['logo1'] ?>"  alt="<?php echo $row['title'] ?>" class="logm" style="width:55%;  margin-bottom:8px; margin-top:18px;">
                            </a>
                               <?php } ?>
                        </div>
                    
                        <div class="col-md-8 col-xs-7 text-center">
                                <!-- NAVIGATION -->
                          <nav class="navigation awe-navigation" data-responsive="1200" >
                        <ul class="menu-list">
                               <?php
$ret=mysqli_query($con,"select * from menu ");
while ($row=mysqli_fetch_array($ret)) 
{
    $ii=$row['id'];
?>            

                                  <li class="menu-item-has-children hidden-xs hidden-sm">
                                <a style="color: #fff;" href="<?php echo $row['link'] ?>"><?php echo $row['name'] ?></a>
<?php
$ret1=mysqli_query($con,"select * from submenuwithheader where menuid='$ii' ");
while ($row1=mysqli_fetch_array($ret1)) 
{
?>            

                                 <ul class="sub-menu1">
                                    <div class="row">

                                            <?php
$ret2=mysqli_query($con,"select * from submenuheader where menuid='$ii' ");
while ($row2=mysqli_fetch_array($ret2)) 

{
    $i1=$row2['id']
?>            
                                        <div class="col-md-4 img-ty">
                                                   <h4><?php echo $row2['name'] ?></h4>
                                                   <ul style="padding-inline-start:0px;">
                                                    <?php
$ret3=mysqli_query($con,"select * from submenuwithheader where submenuheaderid='$i1' ");
while ($row3=mysqli_fetch_array($ret3)) 
{
?>            
                                                                                                               <li>
                                                           <a style="font-size:12px;" href="package.php?id=<?php echo $row3['id'] ?>" class=" menu-link1"><?php echo $row3['name'] ?></a>
                                                       </li>
                                                   <?php } ?>
                                                                                                          </ul>
                                                                                                                                
                                          </div>  
                         <?php } ?>

                                         </div>
                                     </ul>

                                 <?php } ?>

<?php
$ret1=mysqli_query($con,"select * from city where menuid='$ii' ");
while ($row1=mysqli_fetch_array($ret1)) 
{
?>            

                                 <ul class="sub-menu">
<?php
$ret2=mysqli_query($con,"select * from city where menuid='$ii' ");
while ($row2=mysqli_fetch_array($ret2)) 
{
    $i1=$row2['id'];
?>            

                                        <li class="dropdown"><a href="city.php?id=<?php echo $row2['id'] ?>" class="dropdown-toggle" ><?php echo $row2['name'] ?></a>
                                        <ul class="dropdown-menu sub-menu ywc clearfix" role="menu">
                                            <?php
$ret3=mysqli_query($con,"select * from places where menuid='$ii' and cityid='$i1' ");
while ($row3=mysqli_fetch_array($ret3)) 
{
?>            

                                            <li><a href="place.php?id=<?php echo $row3['id'] ?>"><?php echo $row3['name'] ?></a></li>
                                        <?php } ?>
                                        </ul>
                                        </li>
                                    <?php } ?>

                                        
                                                                    </ul>
                                                                <?php } ?>
                            

                                </li> 

                                <?php } ?> 

                                
                                            </ul>
                        
                    </nav>
                    <!-- END / NAVIGATION -->
                  

                        </div>
                   <div class="col-md-2 col-xs-5 text-center">
                       <div style="padding-top: 22px;">
                        <?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
?>  
                       <a href="tel:+91<?php echo $row['contact1'] ?>" style="font-size: 18px; color: #fff; font-weight: 500;">  <img class="bounce" style="height: 30px;" src="data:image/png;base64,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">&nbsp;  +91 <?php echo $row['contact1'] ?> </a>
                   <?php } ?>
                       </div>
                       
                       </div>
                    </div>
                </div>
               
            </div>
        </header>
        <!-- END / HEADER PAGE -->
 <style>
     .bounce {
  /* -webkit-border-radius:50%;
  -moz-border-radius:50%;
  -ms-border-radius:50%;
  border-radius:50%;*/
  animation: bounce 2s infinite;
  -webkit-animation: bounce 2s infinite;
  -moz-animation: bounce 2s infinite;
  -o-animation: bounce 2s infinite;
}
 
@-webkit-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);} 
  40% {-webkit-transform: translateY(-30px);}
  60% {-webkit-transform: translateY(-15px);}
}
 
@-moz-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {-moz-transform: translateY(0);}
  40% {-moz-transform: translateY(-30px);}
  60% {-moz-transform: translateY(-15px);}
}
 
@-o-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {-o-transform: translateY(0);}
  40% {-o-transform: translateY(-30px);}
  60% {-o-transform: translateY(-15px);}
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
  40% {transform: translateY(-30px);}
  60% {transform: translateY(-15px);}
}
 </style>
 
<!---------------------mobile menu------------------------>
<?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
?>  

        <header id="header-page" class="hidden-md hidden-lg">
                <div class="container">
                    <div class="row " style="background: #921519; padding-bottom: 6px; padding: 6px;">
                        <div class="col-md-12 col-xs-12">
                            <span><a href="tel:+91 <?php echo $row['contact1'] ?>,+91 <?php echo $row['contact2'] ?>"  class="num  bord11"><i class="fa fa-phone"></i> +91 <?php echo $row['contact1'] ?>,+91 <?php echo $row['contact2'] ?></a></span> &nbsp;&nbsp;
                             <span ><a href="mailto:<?php echo $row['adminemail1'] ?>"  class="num  bord22"><i class="fa fa-envelope"></i> <?php echo $row['adminemail1'] ?></a></span> 
                             &nbsp;&nbsp;   <span ><a href="#" id="myBtn13"  class="num bord22"><i class="fa-solid fa-edit"></i> </a></span> &nbsp;&nbsp; <span ><a href="https://api.whatsapp.com/send?phone=<?php echo $row['contact1'] ?>&text=Hello%<?php echo $row['title'] ?>%20I%20Want%20to%20enquire%20about%20_."  class="num bord22"><i class="fa-brands fa-whatsapp"></i> </a></span>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                              <a href="index.php"><img src="image/logo/<?php echo $row['logo'] ?>" alt="<?php echo $row['title'] ?>" class="logmnm" width="100%"></a>
                        </div>
                        <div class="col-md-8 col-8">
                           
                             <p class="nbb m-0" id="ham">&#9776;</p>
                              
                        </div>
                    </div>
                </div>
        </header>
    <?php } ?>
<!---------------------end mobile menu------------------------>
 

<!-----------mobile menu------------------>

  <nav class="nav-drill hidden-md hidden-lg" >
        <ul class="nav-items nav-level-1 kio" style="z_index:999999;">
            <p class="toggler"><i class="fa fa-times-circle" onclick="toggle1()"></i></p>
      		                  
                
                                                   <?php
$ret=mysqli_query($con,"select * from menu ");
while ($row=mysqli_fetch_array($ret)) 
{
    $ii=$row['id'];
?>            
    
					<li class="nav-item nav-expand">
                    <a class="nav-link nav-expand-link ink0">
					<?php echo $row['name'] ?>
					</a> 
				 
					<ul class="nav-items nav-expand-content kio">
					   <p class="heading-bar"><?php echo $row['name'] ?></p>
			 
                      
<?php
$ret1=mysqli_query($con,"select * from submenuwithheader where menuid='$ii' ");
while ($row1=mysqli_fetch_array($ret1)) 
{
?>            

<a class="nav-link ink0" href="package.php?id=<?php echo $row1['id'] ?>
">
                     <?php echo $row1['name'] ?>

                    </a>
                    
   <?php } ?>             
<?php
$ret1=mysqli_query($con,"select * from city where menuid='$ii' ");
while ($row1=mysqli_fetch_array($ret1)) 
{
    $i1=$row1['id'];
?>            

                    <li class="nav-item nav-expand">
                        <a class="nav-link nav-expand-link ink0" style="font-size: 16px;"><?php echo $row1['name'] ?></a>
                    
                    <ul class="nav-items nav-expand-content kio">
                      <p class="heading-bar"><?php echo $row1['name'] ?></p>
             <?php
$ret3=mysqli_query($con,"select * from places where menuid='$ii' and cityid='$i1' ");
while ($row3=mysqli_fetch_array($ret3)) 
{
?>            
                                  <li class="nav-item"><a href="place.php?id=<?php echo $row3['id'] ?>" class="nav-link" style="font-size: 16px;"><?php echo $row3['name'] ?></a>
                    
                    
                    </li>
                          
                          <?php } ?>            
                </ul>
                    
                    </li>
                    <?php } ?>
                    
                                        
              
                
			</ul>
				</li>
				<?php } ?>
		        
				 
			
  </ul>

</nav>

<!----------------end mobile menu------------------>




       <!-- The Modal -->
       <div id="myModal12" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <span class="close34"><i class="fa fa-close"></i></span>
    <div class="container-fluid">
      
      <div class="row">
          <div class="col-md-5 leru">
              <h5 class="yema">How it Works?</h5>

              <?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
?>  

            <?php echo $row['description']; ?>
              <?php } ?>
              
              <div class="col-md-12   pl-0 pr-0 twms">
<?php
$ret=mysqli_query($con,"select * from iconbox limit 3 ");
while ($row=mysqli_fetch_array($ret)) 
{
?>  
              <div class="col-md-4 col-xs-6 text-center">
                  <p class="m-0"><img src="image/iconbox/<?php echo $row['image']; ?>" width="60" height="60" /></p>
                
                  <p><?php echo $row['name']; ?></p>
              </div>
<?php } ?>
        </div>
<?php
$ret=mysqli_query($con,"select * from admin ");
$logo='';
while ($row=mysqli_fetch_array($ret)) 
{
    $logo=$row['logo'];
?>  

        <div class="col-md-12 text-center mt-1">
            <p class="m-0"><i class="fa fa-phone fs-20"></i> Call Us for details</p>
            <h4 class="m-0 uqmd" style="font-size:16px;">+91 <?php echo $row['contact1'] ?>,+91 <?php echo $row['contact2'] ?></h4>
        </div>
<?php } ?>

<?php
$ret=mysqli_query($con,"select * from certifiedby ");
while ($row=mysqli_fetch_array($ret)) 
{
?>  
        <div class="col-md-4 mt-21">
            <img src="image/certifiedby/<?php echo $row['image'] ?>"  alt="<?php echo $row['image'] ?>" width="100%">
        </div>
<?php } ?>        
          </div>
          <div class="col-md-7">
            <div class="tqmfa">
                <p class="text-center"><img src="image/logo/<?php echo $logo; ?>" alt="ABD HOLIDAYS" class="form-is"></p>
                <h5 class="yema">Where do you want to go?</h5>
                <form method="post" action="#">
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" style="color: black;"  required class="form-control"  placeholder="Name" name="name">
                            </div>
                             <div class="col-md-6">
                                <label>Mobile</label>
                                <input type="number" style="color: black;" required class="form-control" placeholder="Mobile" name="phone">
                            </div>
                            </div>
                            <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" style="color: black;" required class="form-control" placeholder="Email" name="email">
                            </div>
                             <div class="col-md-6">
                                <label>Message</label>
                                <input type="text" style="color: black;" required class="form-control" placeholder="From " name="message">
                            </div>
                            </div>
                            <div class="row mb-2">
                            <div class="col-md-6">
                                    
                                <label>Where?</label>
                                <input type="text" style="color: black;" required class="form-control" placeholder="Place Name" name="destination">
                          
                            </div>
                            <div class="col-md-6">
                             <label>Departure Date</label>
                                <input type="date" style="color: black;" required class="awe-calendar form-control fwm" value="Date" name="departuredate">
                            </div>
                            
                        </div>
                         <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Adult</label>
                                <input type="text" style="color: black;" required class="form-control" placeholder="Place Name" name="adult">
                          
                            </div>
                            <div class="col-md-6">
                             <label>Child</label>
                                <input type="text" style="color: black;" required class=" form-control fwm"  name="child">
                            </div>
                            
                        </div>
                        
                        <div class="row mb-2 mt-2">
                          <div class="col-md-1"></div>
                            <div class="col-md-10 text-center">
                               <button class="btn button-j5" type="submit" name="sendenquiryform">Submit <i class="fa fa-angle-double-right"></i></button>
                            </div>
                            <div class="col-md-1"></div>
                         </div>
                    </div>
                </form>
            </div>
            </div>
      </div>
 
    </div>

    <!-- END / SEARCH TABS -->
</div>

</div>




       <!-- The Modal -->
       <div id="myModal13" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <span class="close35"><i class="fa fa-close"></i></span>
    <div class="container-fluid">
      
      <div class="row">
          
          <div class="col-md-12">
            <div class="tqmfa">
<form method="post" action="#">
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" style="color: black;"  required class="form-control"  placeholder="Name" name="name">
                            </div>
                             <div class="col-md-6">
                                <label>Mobile</label>
                                <input type="number" style="color: black;" required class="form-control" placeholder="Mobile" name="phone">
                            </div>
                            </div>
                            <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" style="color: black;" required class="form-control" placeholder="Email" name="email">
                            </div>
                             <div class="col-md-6">
                                <label>Message</label>
                                <input type="text" style="color: black;" required class="form-control" placeholder="From " name="message">
                            </div>
                            </div>
                            <div class="row mb-2">
                            <div class="col-md-6">
                                    
                                <label>Where?</label>
                                <input type="text" style="color: black;" required class="form-control" placeholder="Place Name" name="destination">
                          
                            </div>
                            <div class="col-md-6">
                             <label>Departure Date</label>
                                <input type="date" style="color: black;" required class="awe-calendar form-control fwm" value="Date" name="departuredate">
                            </div>
                            
                        </div>
                         <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Adult</label>
                                <input type="text" style="color: black;" required class="form-control" placeholder="Place Name" name="adult">
                          
                            </div>
                            <div class="col-md-6">
                             <label>Child</label>
                                <input type="text" style="color: black;" required class=" form-control fwm"  name="child">
                            </div>
                            
                        </div>
                        
                        <div class="row mb-2 mt-2">
                          <div class="col-md-1"></div>
                            <div class="col-md-10 text-center">
                               <button class="btn button-j5" type="submit" name="sendenquiryform">Submit <i class="fa fa-angle-double-right"></i></button>
                            </div>
                            <div class="col-md-1"></div>
                         </div>
                    </div>
                </form>            </div>
            </div>
      </div>
 
    </div>

    <!-- END / SEARCH TABS -->
</div>
</div>
   <!--slide-->







