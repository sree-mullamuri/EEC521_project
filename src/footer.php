


        <!--=====================================
                    NEWSLETTER PART START
        =======================================-->

        <section class="news-part" style="background:#990000;margin-bottom:10px; no-repeat center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 col-xl-7">
                        <div class="news-text">

                            <h2>Get best Travel Deals</h2>
                            <p>We keep your email address highly confidential.</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <form class="news-form" method="post">
                            <input type="text" name="email" placeholder="Enter Your Email Address">
                            <button type="submit" name="newsletter"><span><i class="icofont-ui-email"></i>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NEWSLETTER PART END
        =======================================-->




        <!--=====================================
                     FOOTER PART START
        =======================================-->
        <footer id="footer-page">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>
                            <a class="footer-logo" href="#">
                                <img src="image/logo/<?php echo htmlentities($row['logo']) ?>" alt="logo">
                            </a>
                            <p class="footer-desc"><?php echo htmlentities($row['description']) ?></p>
                        <?php } ?>
                            <?php
$ret=mysqli_query($con,"select * from social ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>

                            <ul class="footer-social">
                                <li><a class="icofont-facebook" href="<?php echo htmlentities($row['facebook']) ?>"></a></li>
                                <li><a class="icofont-twitter" href="<?php echo htmlentities($row['twitter']) ?>"></a></li>
                                <li><a class="icofont-linkedin" href="<?php echo htmlentities($row['linkedin']) ?>"></a></li>
                                <li><a class="icofont-instagram" href="<?php echo htmlentities($row['instagram']) ?>"></a></li>
                                <li><a class="fa-brands fa-youtube" href="<?php echo htmlentities($row['youtube']) ?>"></a></li>
                            </ul>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget contact">
                            <h3 class="footer-title">contact us</h3>

                            <?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>
                            <ul class="footer-contact">
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <span>
                                            <a style='color:black;' href="mailto:<?php echo htmlentities($row['adminemail1']) ?>"><?php echo htmlentities($row['adminemail1']) ?></a></span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <span><a style='color:black;' href="mailto:<?php echo htmlentities($row['contact1']) ?>"><?php echo htmlentities($row['contact1']) ?></a></span>
                                        <span><a style='color:black;' href="mailto:<?php echo htmlentities($row['contact2']) ?>"><?php echo htmlentities($row['contact2']) ?></a></span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <p><?php echo htmlentities($row['address']) ?></p>
                                </li>
                            </ul>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title"><?php
$ret=mysqli_query($con,"select * from footer1header ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>
<?php echo $row['name']; } ?>
</h3>
                            <div class="footer-links">
                                <ul>
<?php
$ret=mysqli_query($con,"select * from footer1 ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>

                                    <li><a href="<?php echo htmlentities($row['link']) ?>"><?php echo htmlentities($row['name']) ?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                                        <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">

                                                        <h3 class="footer-title"><?php
$ret=mysqli_query($con,"select * from footer2header ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>
<?php echo $row['name']; } ?></h3>
                            <div class="footer-links">

                                <ul>
                                                                <?php
$ret=mysqli_query($con,"select * from footer2 ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>

                                    <li><a href="<?php echo htmlentities($row['link']) ?>"><?php echo htmlentities($row['name']) ?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                                        <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">

                                                        <h3 class="footer-title"><?php
$ret=mysqli_query($con,"select * from footer3header ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>
<?php echo $row['name']; } ?></h3>
                            <div class="footer-links">

                                <ul>
                                                                <?php
$ret=mysqli_query($con,"select * from footer3 ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>

                                    <li><a href="<?php echo htmlentities($row['link']) ?>"><?php echo htmlentities($row['name']) ?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                                        <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">

                                                        <h3 class="footer-title"><?php
$ret=mysqli_query($con,"select * from footer4header ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>
<?php echo $row['name']; } ?></h3>
                            <div class="footer-links">

                                <ul>
                                                                <?php
$ret=mysqli_query($con,"select * from footer4 ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>

                                    <li><a href="<?php echo htmlentities($row['link']) ?>"><?php echo htmlentities($row['name']) ?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                                        <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget contact">
                            <h3 class="footer-title">Certified By:</h3>

                            <div class="footer-card">
<?php
$ret=mysqli_query($con,"select * from certifiedby ");
while ($row=mysqli_fetch_array($ret)) 
{
?>  

                                <img src="image/certifiedby/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>" style="float: right;width: 70px;height: auto;"  class="certu"> 
                                &nbsp;&nbsp;  
                        <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                                  <?php
$ret=mysqli_query($con,"select * from copyright ");
while ($row=mysqli_fetch_array($ret)) 
{
    # code...


?>

                            <p class="footer-copytext" style="width:100%"><?php echo $row['name'] ?></a></p>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
        =======================================-->
        

        <!--=====================================
                    JS LINK PART START
        =======================================-->

























    <link rel="stylesheet" type="text/css" href="css/awe-booking-font.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    </div>
    <!-- END / PAGE WRAP -->
     <style>
     
 .inclusions{
    margin-top: 10px;
}
.inclusions h5{
    font-size: 17px;
    font-weight: 600;
     
}
.inclusions a{
    color: #c70039;
}
.pkg-incusion{
   
    margin: 0px;
    list-style-type: none;
}

.pkg-incusion li{
    padding: 2px 0 0 0px;
    margin: 0 0 3px 0;
    /*list-style-type: none;*/
    display: block;
    position: relative;
    /*background-image: url(../images/arrow-orng.png);*/
    /*background-repeat: no-repeat;*/
    /*background-position: left 6px;*/
    font-size: 14px;
}
.pkg-incusion li i{
    position: absolute;
    left: 0;
    top: 3px;
    color: #008aed;
}
.inclusions .read-collpse {
    position: absolute;
    right: 25px;
    margin-top: -80px;
}
.inclusions .read-collpse span {
    display: block;
}
.inclusions .read-collpse[aria-expanded="false"] i{
  display: none;
}
.inclusions .read-collpse[aria-expanded="true"] span{
  display: none;
}
.inclusions .read-collpse[aria-expanded="true"] i{
  display: block;
}    
     
     
         .heading h2 {
    display: inline-block;
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 0;
}

    .heading h2 .fs1 {
        color: #c23764;
        position: relative;
        margin-top: 15px;
        margin-bottom: 15px;
    }

strong {
    color: #c23764;
}

.heading h2 .fs1:before {
    background: #fff;
}

.heading h2 .fs1:after {
    content: "";
    position: absolute;
    top: 47%;
    left: 10%;
    right: 10%;
    height: 2px;
    background: #c23764;
    z-index: -1;
}

.banner {
    position: relative;
    overflow: hidden;
}

    .banner .content h1 {
        font-size: 50px;
        text-align: center;
        color: #fff;
    }

    .banner .content h2 {
        color: #fff;
        text-align: center;
    }

._polodnbcbvb {
    overflow: hidden;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: relative;
}

.owl-carousel.banner_slider .item {
    background-size: cover !important;
    background-position: center !important;
}

.banner_content {
    height: 580px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
    z-index: 1;
}

.owl-carousel.banner_slider button {
    position: absolute;
    top: 50%;
    z-index: 11;
    left: 0;
    width: 69px;
    height: 40px;
    background: #c23764 !important;
    color: #fff !important;
}

    .owl-carousel.banner_slider button.owl-next {
        left: auto;
        right: 0;
    }

.banner_content .content {
}

._polodnbcbvb .top_in {
    position: absolute;
    z-index: 11;
    left: auto;
    right: 0;
}

    ._polodnbcbvb .top_in .fs1:before, ._polodnbcbvb .top_in a {
        color: #fff;
    }

    ._polodnbcbvb .top_in .fs1 {
        border-color: #fff;
    }

form.get_quate.ng-pristine.ng-valid > .row {
    margin: 0;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

form.get_quate .form-control {
    border-radius: 0;
    border: 0;
    border-bottom: 2px solid #c23764;
    background: transparent;
}

    form.get_quate .form-control:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: none;
        border-bottom: 2px solid transparent;
        -o-border-image: url(../images/banner2.jpg) 30 round;
        border-image: url(../images/banner2.jpg) 19 round;
    }

.owl-carousel.banner_slider .item:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #3333338c;
    z-index: 1;
}

form.get_quate h3 > div {
    display: inline-block;
    color: #c23764;
    position: relative;
    top: 1px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

form.get_quate .form-group h3 {
    margin-top: -74px;
    margin-bottom: 41px;
}

form.get_quate .form-group button {
    max-width: 420px;
    width: 100%;
    border-radius: 0;
    background: #040404;
    color: #fff;
}

.Enquiry_form {
    width: 400px;
    position: relative;
    background: #ffffff;
    padding: 24px 24px 0;
    margin-right: 15px;
}

.enquery_form h3 {
    background: url(../images/banner3.jpg);
    background-clip: border-box;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 800;
}

section#about_section {
    padding: 4rem 0 20px;
}

.packages_item img {
    width: 100%;
    max-width: 100%;
}

.package_detail .poi {
    padding: 13px 0;
    border-bottom: 0;
    margin-bottom: 15px;
}

.packages_item figure {
    margin: 0;
    position: relative;
    overflow: hidden;
}

    .packages_item figure span.offer {
        position: absolute;
        top: 27px;
        background: #23074d;
        background: -webkit-gradient(linear, left top, right top, from(#6ac237), to(#d6d3da));
        background: -o-linear-gradient(left, #6ac237, #d6d3da);
        background: linear-gradient(to right, #6ac237, #d6d3da);
        color: #fff;
        left: -15px;
        text-transform: uppercase;
        padding: 6px 14px;
        border-top-right-radius: 23px;
        border-bottom-right-radius: 23px;
        -webkit-transform: rotate(91deg);
        -ms-transform: rotate(91deg);
        transform: rotate(91deg);
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        -webkit-animation: blinking 1s infinite;
        animation: blinking 1s infinite;
    }

@-webkit-keyframes blinking {
    0% {
        color: #b1b1b1;
    }

    100% {
        color: #fff;
    }
}

@keyframes blinking {
    0% {
        color: #b1b1b1;
    }

    100% {
        color: #fff;
    }
}

.poi label, .poi h4 {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    color: #2d2d2d;
}

span.primiup {
    position: absolute;
    left: auto;
    right: -78px;
    top: -12px;
    background: #23074d;
    background: -webkit-gradient(linear, left top, right top, from(#d6d3da), to(#d6d3da));
    background: -o-linear-gradient(left, #d6d3da, #d6d3da);
    background: linear-gradient(to right, #6ac237, #d6d3da);
    width: 200px;
    padding: 41px 35px 8px;
    text-align: center;
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.poi label > span {
    color: #c23764;
}

.package_detail {
    background:#fff;
    padding: 10px;
    border-radius: 4px;
    
}

    .package_detail h4 {
    }

    .package_detail h5 {
        font-size: 15px;
    }

        .package_detail h5 > span {
            color: #c23764;
            font-weight: 700;
        }

        .package_detail h5.cost {
            padding-bottom: 15px;
        }

.query_o .btn {
    border-radius: 0;
    width: 49%;
}

.query_o .btn {
    border-radius: 0;
    width: 49%;
    background: #990000;
    color: #fff;
}

    .query_o .btn:last-child {
        background: -webkit-gradient(linear, left top, right top, from(#748098), to(#C33764));
        background: -o-linear-gradient(left, #748098, #990000);
        background: linear-gradient(to right, #990000, #748098);
    }

.packages_item {
    margin-bottom: 30px;
    min-height: 485px;
    position: relative;
}

.social_links ul.social_links {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 0;
    margin: 0;
    list-style: none;
}

    .social_links ul.social_links li a {
        display: block;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        margin: 0 5px;
    }

    .social_links ul.social_links li:first-child a {
        margin-left: 0;
    }

    .social_links ul.social_links li a img {
        max-width: 100%;
    }

.address h5, .phone h5, .email h5, .social_links h5 {
    color: #333;
}

img.img-responsive {
    max-width: 100%;
    width: 100%;
}

.address p {
    color: #333;
    border-bottom: 2px solid #fff;
    margin: 0;
    padding-bottom: 7px;
}


.query_o {
    /*position: absolute;*/
    bottom: 0;
    left: 0;
    right: 0;
}

.phone a, .email a {
    display: inline-block;
    color: #333;
}

    .phone a:last-child {
        margin-left: 8px;
    }

.left_sli {
    width: 386px;
    background-size: contain !important;
    background-repeat: no-repeat !important;
}

div#enqueryModal .modal-dialog .modal-body, div.modal.detailModal .modal-dialog .modal-body {
    padding: 0;
}

div#enqueryModal .row {
    margin: 0;
}

.left_sli {
    width: 386px;
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-position: center bottom !important;
}

.right_sid {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding: 0 15px;
}

div#enqueryModal .modal-dialog, div.modal.detailModal .modal-dialog {
    max-width: 850px;
    position: fixed;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}

.packi_ h5 {
    font-size: 22px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: -0.9px;
    color: #24272c;
    padding-bottom: 0px;
    margin-top: 12px;
}

.form.enquery_model .form-group {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    padding: 0 7px;
}

.form.enquery_model .form-group {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    padding: 0 7px;
}

    .form.enquery_model .form-group .form-control {
        border: 0;
        border-bottom: 1px solid #ced4da;
        border-radius: 0;
    }

.why_ytt ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    padding: 0;
    list-style: none;
}

    .why_ytt ul li {
        width: 33.33%;
        line-height: 18px;
        padding: 4px 0;
        font-weight: 500;
        text-align: center;
    }

    .why_ytt ul .fs1 {
        display: block;
        width: 40px;
        height: 40px;
        background: #f5cd76;
        line-height: 40px;
        text-align: center;
        font-size: 20px;
        border-radius: 100px;
        color: #fff;
        margin: 0 auto;
        margin-bottom: 5px;
    }

.why_ytt label {
    font-size: 18px;
    font-weight: 700;
}

.why_ytt {
    border-top: 1px solid #ccc;
    padding: 12px 0;
    text-align: center;
}

input.btn.btn-form {
    max-width: 767px;
    width: 100%;
    background: #f5cd76;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
}

.toue_pok_ h6 {
    font-size: 32px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: -0.9px;
    color: #24272c;
    padding-bottom: 0px;
    margin-top: 37px;
}

.toue_pok_ ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

    .toue_pok_ ul li {
        padding: 11px 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }

.col_po_ a {
    color: #333;
    font-size: 20px;
    font-weight: 700;
}

    .col_po_ a .fs1 {
        display: inline-block;
        width: 40px;
        text-align: center;
        height: 40px;
        line-height: 33px;
        border: 3px solid #333;
        color: #fff;
    }

.toue_pok_ {
    padding: 0 15px;
}

.col_po_ h6 {
    margin-bottom: 10px;
}

.toue_pok_ ul li span._ppk {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: #333;
    color: #fff;
    text-align: center;
    line-height: 20px;
    border-radius: 100px;
    position: relative;
    left: 0px;
    top: 2px;
}

.toue_pok_ ul li span.lokk_ {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-left: 7px;
}

span.input-group-append button.btn.btn-outline-secondary.border-left-0 {
    border-radius: 0;
    border: 0;
    border-bottom: 1px solid #ced4da;
}

.pack_incluion ul li {
    padding: 6px 0px;
    position: relative;
}

.pack_incluion ul {
    padding: 0;
    margin: 0;
    list-style: none;
    padding-left: 20px;
}

    .pack_incluion ul li:before {
        content: "";
        position: absolute;
        left: -23px;
        top: 8px;
        width: 20px;
        height: 20px;
        background: url(../images/pin.png);
        background-size: 14px;
        background-position: center;
        background-repeat: no-repeat;
    }

section.testimonial_section .content {
    text-align: center;
    padding: 2rem 0;
}

    section.testimonial_section .content .fs1 {
        font-size: 40px;
        color: #c23764;
    }

    section.testimonial_section .content h4 {
        margin: 0px 0 11px;
        display: inline-block;
        padding: 0 0 00;
    }

        section.testimonial_section .content h4 > span {
            display: block;
            height: 4px;
            background: #c23764;
            width: 80%;
            margin: 6px auto 0;
        }

section.testimonial_section {
    padding: 3rem 0;
    background-image: url(../images/banner-flight.png);
    background-color: #fffffff0;
    background-blend-mode: color-dodge;
    background-repeat: no-repeat;
    background-position: right bottom;
}

    section.testimonial_section .content p {
    }

section#why_us {
}

    section#why_us .content {
        text-align: center;
        padding: 1.5rem 0;
    }

        section#why_us .content img {
            display: block;
            margin: 0 auto;
            max-width: 102px;
        }

        section#why_us .content h4 {
            margin: 7px 0 4px;
        }

        section#why_us .content p {
        }


section#why_us {
    padding: 3rem 0;
    background-color: #ade248;
    background-blend-mode: color-dodge;
    background-repeat: no-repeat;
    background-position: left bottom;
}

section#packages_section {
    padding-bottom: 50px;
}

.stil_confuise {
    text-align: center;
    padding: 106px 0;
    background: url(../images/sti.jpg);
    background-repeat: no-repeat;
    background-color: #00000075;
    background-blend-mode: saturation;
}

    .stil_confuise .content {
    }

        .stil_confuise .content h3 {
            font-size: 45px;
            color: #fff;
        }

        .stil_confuise .content p {
            font-size: 20px;
            color: #fff;
            font-weight: 600;
        }

        .stil_confuise .content a {
            display: inline-block;
            color: #fff;
            background: -webkit-gradient(linear, left top, right top, from(#1D2671), to(#C33764));
            background: -o-linear-gradient(left, #1D2671, #C33764);
            background: linear-gradient(to right, #71701d, #030303);
            padding: 11px 17px;
            font-size: 19px;
            border: 3px solid transparent;
            -o-border-image: url(../images/banner2.jpg) 30 round;
            border-image: url(../images/banner2.jpg) 19 round;
            margin-top: 18px;
        }

.modal-body button.close {
    position: absolute;
    top: 2px;
    right: 4px;
    width: 40px;
    height: 40px;
    line-height: 22px;
    display: block;
    opacity: 1;
    color: #060606;
}

.incluseion_pokl {
    background: #000046;
    background: -webkit-gradient(linear, left top, right top, from(#c23764), to(#CDDC39));
    background: -o-linear-gradient(left, #c23764, #CDDC39);
    background: linear-gradient(to right, #121010, #CDDC39);
    padding: 6px 0;
}

.inclu_ioci {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 16px 0 5px;
}

    .inclu_ioci .icon {
    }

    .inclu_ioci label {
        display: block;
        text-align: center;
        color: #fff;
        margin: 6px 0 0;
    }

    .inclu_ioci img {
        max-width: 80px;
        border: 3px solid #fff;
        border-radius: 100px;
    }

    .inclu_ioci .icon h2 {
        color: #fff;
    }

.package_detail .packages_item {
    margin-bottom: 30px;
    min-height: 550px;
    position: relative;
}

.package_detail .inclu_ioci img {
    max-width: 40px;
}

.package_detail .inclu_ioci {
    border: 2px solid #ccc;
    border-left: 0;
    border-right: 0;
    padding: 10px 0;
}

.pack_incluion .inclu_ioci {
    padding: 0;
    border: 1px solid #ccc;
    border-left: 0;
    border-right: 0;
    padding: 8px 0;
}

    .pack_incluion .inclu_ioci img {
        max-width: 35px;
    }

.ddd i.gj-icon {
    margin-left: -7px;
}

.content1 h1 {
}

span.icon_ img {
    display: none;
}

.mobile_call {
    display: none;
}

@media screen and (max-width: 430px) {
    .content1 h1 {
        font-size: 17px;
    }

    .content1 {
        margin-bottom: 44px;
    }

    .mobile_call {
        display: block;
        background: #c23764;
        position: fixed;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        padding: 9px 0px 11px 0px;
        z-index: 111;
    }

        .mobile_call a span {
            color: white;
        }

    .whats_ap._polkk img {
        margin-top: -55px;
    }
}
     </style>                    
                         
    
                         
                               
  <!--<div class=" plm">-->
  <!--                 <div class="uol">-->
  <!--              <img src="3.png" >-->
                
  <!--              </div>-->
  <!--          </div>-->
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

 
        
 
 
 <style>
     .week-plans {
    float: left;
    width: 100%;
    /* text-align: center; */
    padding: 120px 0px 85px 0;
    background: #fff;
    position: relative;
    overflow: hidden;
}

.week-plans h2 {
    text-transform: uppercase;
    letter-spacing: -1px;
    position: relative;

    margin: 0 auto;
    display: table;
}

.week-plans p {
    font-size: 15px;
    color: #777;
    padding: 25px 0 0 0;
    margin: 0;
    z-index: 1;


    width: 100%;
    text-align: center;
}

.wk-plans {
    float: left;
    width: 100%;
    position: relative;
    z-index: 1;
}

.wk-plans ul {
    padding: 0;
    margin: 0;
}

.wk-plans li {
    width: 33.333%;
    float: left;
    padding: 35px;
    position: relative;
    z-index: 1;
    transform: scale(0) rotateY(90deg);
    transition: all 0.5s ease;
    opacity: 0;
}

.wk-plans ul li.ani-strt {
    transform: scale(1) rotateY(0deg);
    transition: all 0.5s ease;
    opacity: 1;
}

.wk-plans ul li:nth-child(1) .wk-plans-img:after,
.wk-plans ul li:nth-child(3) .wk-plans-img:after,
.wk-plans ul li:nth-child(5) .wk-plans-img:after {
    background: #ff5722;
    transform: rotate(8deg);
    transition: all 0.5s ease;
}

.wk-plans ul li:nth-child(1):hover .wk-plans-img:after {
    transform: rotate(0deg);
    transition: all 0.5s ease;
}

.wk-plans ul li:nth-child(3):hover .wk-plans-img:after {
    transform: rotate(0deg);
    transition: all 0.5s ease;
}

.wk-plans ul li:nth-child(5):hover .wk-plans-img:after {
    transform: rotate(0deg);
    transition: all 0.5s ease;
}

.wk-plans-img {
    position: relative;
    border-radius: 8px;
    transform: rotate(0deg);
    left: 0;
    top: 50px;
    box-shadow: 0px 30px 80px 0px rgb(195 193 206 / 14%);
    z-index: 1;
    float: left;
    width: 100%;
}

.wk-plans-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

.wk-plans-img h3 {
    position: absolute;
    bottom: 24px;
    left: 40px;
    color: #fff;
    text-transform: capitalize;
    letter-spacing: -1px;
    font-weight: 700;
}

.wk-plans-img:before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(1deg, #7e17178c, transparent);
    background: -o-linear-gradient(7deg, #00000094, #060608a6);
    background: -ms-linear-gradient(7deg, #00000094, #060608a6);
    background: -webkitlinear-gradient(45deg, #ffef2d, #ff4f4f 80%);
}

.wk-plans-img:after,
.sub1-img:before,
.sub2-img:before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    border-radius: 10px;
    background: linear-gradient(90deg, #6F56F4 17%, #D07FCF 100%);
    background: -o-linear-gradient(7deg, #00000094, #060608a6);
    background: -ms-linear-gradient(7deg, #00000094, #060608a6);
    background: -webkitlinear-gradient(45deg, #ffef2d, #ff4f4f 80%);
    z-index: -1;
    transform: rotate(-6deg);
    opacity: .6;
    transition: all 0.5s ease;
}

.sub1-img:before {
    border-radius: 0 30px 0 30px;
    width: 400px;
    height: 260px;
    transform: rotate(0deg);
    left: -14px;
    top: -15px;
    background: #ffd701;
    opacity: .9;
}

.sub2-img:before {
    width: 330px;
    height: 220px;
    right: -14px;
    left: auto;
    z-index: auto;
    top: 156px;
    opacity: .9;
    transform: rotate(0deg);
    background: linear-gradient(to right, rgb(218, 34, 255), rgb(151, 51, 238));
    border-radius: 30px 0 30px 0;
}

.wk-plans li:hover .wk-plans-img:after {
    transform: rotate(0deg);
    transition: all 0.5s ease;
}

.week-plans:before {
    left: 0;
    top: 8%;
    animation: none;
    width: 400px;
    height: 222px;
    background: url(../images/bg-icons/33.html);
    background-size: contain;
    border-radius: 0;
    animation: week-ani 6s infinite;
}

@keyframes week-ani {
    0% {
        transform: scaleX(1);
    }

    50% {
        transform: scaleX(-1);
    }

    100% {
        transform: scaleX(1);
    }
}

.wk-plans:after {
    right: 0;
    z-index: 0;
    border-width: 250px 0 0 250px;
    bottom: -50px;
}


.wk-plans ul li:nth-child(1).ani-strt {
    transition-delay: .3s;
}

.wk-plans ul li:nth-child(2).ani-strt {
    transition-delay: .6s;
}

.wk-plans ul li:nth-child(3).ani-strt {
    transition-delay: .9s;
}

.wk-plans ul li:nth-child(4).ani-strt {
    transition-delay: 1.3s;
}

.wk-plans ul li:nth-child(5).ani-strt {
    transition-delay: 1.6s;
}

.wk-plans ul li:nth-child(6).ani-strt {
    transition-delay: 1.9s;
}
 </style>
  
  
        
 
 
<script>
    var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #fff }";
  document.body.appendChild(css);
};
</script>
 
        <!-- FOOTER PAGE -->
   
 
 
    
        
           
    
  
  
  <style>
  /* ===== Scrollbar CSS ===== */
  /* Firefox */
    .bs {
    scrollbar-width: auto;
    scrollbar-color: #990000 #ffffff;
  }

  /* Chrome, Edge, and Safari */
  .bs::-webkit-scrollbar {
    width: 5px;
    height: 12px;
  }

    .bs::-webkit-scrollbar-track {
    background: #ffffff;
  }

    .bs::-webkit-scrollbar-thumb {
    background-color: #990000;
    border-radius: 10px;
    border: 3px solid #ffffff;
  }
      .bs {
  background: #ccc;
  /*background: url("https://www.mahalaxmitravels.com/images/banner/fg.gif") no-repeat center center;*/
   background: url("images/fg.gif") no-repeat center center;
  background-size: cover;
  box-shadow: inset 0 0 100vw 100vw rgba(0, 0, 0, 0.3), 0 16px 8px -8px rgba(0, 0, 0, 0.4);
 width: 100%;
  height: 80vh;
  padding: 0 0 32px;
  display: flex;
  overflow-x: scroll;
}

.bs2 {
    scrollbar-width: auto;
    scrollbar-color: #990000 #ffffff;
  }

  /* Chrome, Edge, and Safari */
  .bs2::-webkit-scrollbar {
    width: 5px;
    height: 12px;
  }

    .bs2::-webkit-scrollbar-track {
    background: #ffffff;
  }

    .bs2::-webkit-scrollbar-thumb {
    background-color: #990000;
    border-radius: 10px;
    border: 3px solid #ffffff;
  }
  .bs2 {
  background: #ccc;
  background: url("images/ben-lowe-sqdY_rJg8wg-unsplash-1.png") no-repeat center center;
  background-size: cover;
  box-shadow: inset 0 0 100vw 100vw rgba(0, 0, 0, 0.5), 0 16px 8px -8px rgba(0, 0, 0, 0.4);
 width: 100%;
  height: 80vh;
  padding: 0 0 32px;
  display: flex;
  overflow-x: scroll;
}
/*CARD*/
.card__btn {
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.5);
  border-radius: 24px;
  font-family: sans-serif;
  font-size: 6px;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  width: 188px;
  margin: 8px 0 0;
  
  padding: 8px;
}

.card__text-sm {
  color: #fff;
  font-family: sans-serif;
  font-size: 10px;
  margin: 0;
  padding: 16px 0 8px;
  position: relative;
}

.card__text-sm::before {
  content: "";
  background: #fff;
  height: 1px;
  width: 16px;
  position: absolute;
  top: 0;
}

.card__text-lg {
  color: #fff;
  font-family: "Oswald", sans-serif;
  font-size: 18px;
  font-weight: 600;
 
  line-height: 1.2;
  width: 100%;
  margin: 0;
}

/*...large...*/
.card-lg__container {
  padding: 0 16px 40px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}
.card-lg__container .card__text-lg {
  font-family: "Oswald", sans-serif;
  font-size: 40px;
  font-weight: 400;
  letter-spacing: 1.4px;
}
.card-lg__container .card__text-md {
  color: #fff;
  font-family: sans-serif;
  font-size: 10px;
  font-weight: 100;
  line-height: 1.5;
  padding: 0 32px 0 0;
  opacity: 0.8;
}
.card-lg__container .card__text-sm {
  font-size: 14px;
}
.card-lg__container .card__text-sm::before {
  width: 24px;
  height: 2px;
}

/*...small...*/
.card-sm__container {
  height: 232px;
  margin: 0 -250px 0 0;
  display: flex;
  align-self: flex-end;
}

.card-sm {
  background: #ccc;
  background-size: cover;
  background-position: center center;
  box-shadow: inset 0 0 100vw 100vw rgba(0, 0, 0, 0.3), 0 16px 8px -8px rgba(0, 0, 0, 0.4);
  border-radius: 8px;
  width: 25%;
  height: calc(100% - 0px);
  margin: 0 8px;
  padding: 24px 16px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  cursor: pointer;
  transition: 0.3s ease;
}
.card-sm:hover {
  margin: -8px 8px 0;
}
.card-sm .card__text-sm {
  opacity: 0.8;
}

/*HIDE DEFAULT SCROLL BAR*/
.main::-webkit-scrollbar {
  display: none;
}

.main {
  -ms-overflow-style: none;
}

@media screen and (max-width: 960px) {
  main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0 16px;
    padding: 8px 0 32px;
    height: unset;
    width: calc(100% - 65px);
    transform: scale(1);
  }

  section.card-lg__container {
    margin: 32px 0 0;
    padding: 0 0 32px;
  }

  section.card-sm__container {
    align-self: center;
    margin: 0 -72px 0 0;
  }
}
@media screen and (max-width: 695px) {
  main {
    padding: 8px 32px 0;
  }

  section.card-sm__container {
    height: unset;
    width: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  section.card-sm {
    width: calc(100% - 32px);
    height: 200px;
    margin: 0 0 16px;
  }

  .card-sm:hover {
    margin: 8px 0;
    transform: scale(0.9);
  }
}
  </style>
  
 
            
  <style>
 
.hfd{
    height: 250px; width: 100%; background-size: cover;
}
.bg__blue--lighter {
    background: #edf7fb;
}

.bg-primary {
    background-color: #22577a !important;
}

.container__bg__wrapper {
    position: relative;
    overflow: hidden;
}

.container__bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}

.container__bg .lower__img,
.container__bg .upper__img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.container__bg .lower__img {
    z-index: 1;
}

.container__bg .upper__img {
    z-index: 2;
}

.container__bg .lower__img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.container__bg .upper__img img {
    position: absolute;
    bottom: -4rem;
    left: 0;
    width: 100%;
    object-fit: cover;
}
  </style>
  <style>
    .btn__secondary {
    color: #fff;
    border-radius: 0.45rem;
    padding: 5px 20px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
    box-shadow: inset 0.125rem 0.125rem 0.125rem 0px rgba(255, 255, 255, 0.5), 0.4375rem 0.4375rem 1.125rem 0px rgba(0, 0, 0, 0.1), 0.25rem 0.25rem 0.3125rem 0px rgba(0, 0, 0, 0.1);
    outline: none;
    background: rgb(153, 0, 0);
    border: none;
    white-space: nowrap;
}

.btn__secondary span {
    display: block;
    width: 100%;
    height: 100%;
    text-transform: capitalize;
}

.btn__secondary:before,
.btn__secondary:after {
    position: absolute;
    content: '';
    right: 0;
    top: 0;
    background: rgba(34, 87, 122, 1);
    transition: all 0.3s ease;
}

.btn__secondary:before {
    height: 0%;
    width: 0.125rem;
}

.btn__secondary:after {
    width: 0%;
    height: 0.125rem;
}

.btn__secondary:hover {
    background: transparent;
    box-shadow: none;
}

.btn__secondary:hover:before {
    height: 100%;
}

.btn__secondary:hover:after {
    width: 100%;
}

.btn__secondary:hover span {
    color: rgba(34, 87, 122, 1);
}

.btn__secondary span:before,
.btn__secondary span:after {
    position: absolute;
    content: '';
    left: 0;
    bottom: 0;
    background: rgba(34, 87, 122, 1);
    transition: all 0.3s ease;
}

.btn__secondary span:before {
    width: 0.125rem;
    height: 0%;
}

.btn__secondary span:after {
    width: 0%;
    height: 0.125rem;
}

.btn__secondary:hover span:before {
    height: 100%;
}

.btn__secondary:hover span:after {
    width: 100%;
}

.btn__secondary--sm {
    font-size: 0.875rem;
    padding: 0.25rem 0.75rem;
}

.btn__secondary--light {
    color: #22577a;
    background: rgb(237, 247, 251);
    background: linear-gradient( 0deg, rgba(237, 247, 251, 1) 0%, rgba(255, 255, 255, 1) 100%);
}

.btn__secondary--light:hover span {
    color: rgba(237, 247, 251, 1);
}

.btn__secondary--light:before,
.btn__secondary--light:after {
    background: rgba(237, 247, 251, 1);
}

.btn__secondary--light span:before,
.btn__secondary--light span:after {
    position: absolute;
    background: rgba(237, 247, 251, 1);
}

.btn__secondary--disabled {
    background: rgba(34, 87, 122, 0.8);
    cursor: default;
}

.btn__secondary--disabled:before,
.btn__secondary--disabled:after {
    position: absolute;
    content: '';
    right: 0;
    top: 0;
    background: rgba(34, 87, 122, 0.8);
    transition: all 0.3s ease;
}

.btn__secondary--disabled:hover {
    background: rgba(34, 87, 122, 0.8);
    box-shadow: inset 0.125rem 0.125rem 0.125rem 0px rgba(255, 255, 255, 0.5), 0.4375rem 0.4375rem 1.125rem 0px rgba(0, 0, 0, 0.1), 0.25rem 0.25rem 0.3125rem 0px rgba(0, 0, 0, 0.1);
}

.btn__secondary--disabled:hover:before {
    height: 0;
}

.btn__secondary--disabled:hover:after {
    width: 0;
}

.btn__secondary--disabled:hover span {
    color: #fff;
}

.btn__secondary--disabled:hover span:before {
    height: 0;
}

.btn__secondary--disabled:hover span:after {
    width: 0;
}
 
        </style>
        
        
  
  <!--frst sec end-->
  
  
 <style>
     .boxi{
           border-radius: 0.5rem; padding:0; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; background:#ffffff; margin: 10px 0 0 0;
     }
       .boxi:hover{
        border-radius:7px; padding:0; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px;   background:#fff; 
     }
     
     .boxi-img{
         width:100%; object-fit:cover; height:200px;
         border-radius: 0.5rem  0.5rem 0 0;
     }
     .boxi-ul1{
         padding: 0; list-style: none;
     }
     .boxi-time{
         font-size:16px;  color: #000; margin-bottom:5px;
     }
     .boxi-pr{
         font-size:12px; margin-top:0; 
     }
 </style>

<script>
    var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #fff }";
  document.body.appendChild(css);
};
</script>

 
    <!-- FOOTER PAGE -->
   
      <script>
         $(document).ready(function () {
    "use strict";
    //RESPONSIVE MENU BUTTON
    $(".menu-book i").on("click", function () {
        $(".menu").toggleClass("menuact");
    });

    //HOME HEAD  ANIMATION
    $(".home-banner .ban-content h1").addClass("ban2-ani");

    //HOME INDEX 2 ANIMATION SEARCH BOX
    $(".search-bookin ul li:nth-child(1)").addClass("se-ani1");
    $(".search-bookin ul li:nth-child(2)").addClass("se-ani2");
    $(".search-bookin ul li:nth-child(3)").addClass("se-ani3");
    $(".search-bookin ul li:nth-child(4)").addClass("se-ani4");

    //ON WINDOW SCROOL FUNCTION
    $(window).on("scroll", function () {

        //COMMON VARIABLE FOR WINDOW SCROLL
        var _topval = $(window).scrollTop();

        //MENU FIXED ACTIVE

        if (_topval >= 150) {
            $(".menu-head").addClass("fix-menu");
        } else {
            $(".menu-head").removeClass("fix-menu");
        }

        //GO TO TOP BUTTON
        if (_topval >= 400) {
            $(".go-to-top").addClass("act");
        } else {
            $(".go-to-top").removeClass("act");
        }

        $('#scrolltop').click(function () {
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });



        //ALL SECTION COMM-ANIMATION
        if ($(".ani-eql").length > 0) {
            $(".ani-eql").each(function () {
                var _seccom = $(this).offset().top + $(this).outerHeight() - 350;
                var _window = $(window).scrollTop() + $(window).height();
                if (_window >= _seccom) {
                    $(this).addClass("ani-strt");
                }

            })

            //ABOUT US  NUMBER COUNTER
            $('.count').each(function () {
                $(this).prop('Counter', 1090).animate({
                    Counter: $(this).text()
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });


            //ALL SECTION TITLE COMM-ANIMATION
            $(".comm-tit-ani").each(function () {
                var _tit1 = $(this).offset().top + $(this).outerHeight() - 50;
                var _titcom = $(window).scrollTop() + $(window).height();
                if (_titcom >= _tit1) {
                    $(this).addClass("ani-tit");
                }
            })
        }
    });



    //SIDE BAR
    $(".click-sid-bar i").on("click", function () {
        $(".side-bar").addClass("act");
    })

    //SIDE BAR REMOVE
    $(".side-bar-im i").on("click", function () {
        $(".side-bar").removeClass("act");
    })

    // TOP SEARCH BOX ADD
    $(".cl-func span").on("click", function () {
        $(".top-cl-fun").addClass("act");
    })

    // TOP SEARCH BOX REMOVE
    $(".top-cl-fun span").on("click", function () {
        $(".top-cl-fun").removeClass("act");
    })

    //TOP SEARCH BAR
    $(".top-click-1 h3").on("click", function () {
        $(".all-cate").addClass("act");
    })

    //TOP SEARCH BAR REMOVE
    $(".top-click-1").mouseleave(function () {
        $(".all-cate.act").removeClass("act");
    })


    //ADD SUB MENU & REMOVE
    $(".add-menu .arrow1").on("click", function () {
        $(".sub-menu.typ-menu").toggleClass("menuact");
    })


    // Gallery image hover
    $(".img-wrapper").hover(
        function () {
            $(this).find(".img-overlay").animate({
                opacity: 1
            }, 600);
        },
        function () {
            $(this).find(".img-overlay").animate({
                opacity: 0
            }, 600);
        }
    );

    // Lightbox
    var $overlay = $('<div id="overlay"></div>');
    var $image = $("<img>");
    var $prevButton = $('<div id="prevButton"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></div>');
    var $nextButton = $('<div id="nextButton"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>');
    var $exitButton = $('<div id="exitButton"> <i class="fa fa-times" aria-hidden="true"></i></div>');

    // Add overlay
    $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
    $("#gallery").append($overlay);

    // Hide overlay on default
    $overlay.hide();

    // When an image is clicked
    $(".img-overlay").click(function (event) {
        event.preventDefault();
        var imageLocation = $(this).prev().attr("href");
        $image.attr("src", imageLocation);
        $overlay.fadeIn("slow");
    });

    // When the overlay is clicked
    $overlay.click(function () {
        $(this).fadeOut("slow");
    });

    // When next button is clicked
    $nextButton.click(function (event) {
        $("#overlay img").hide();
        var $currentImgSrc = $("#overlay img").attr("src");
        var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
        var $nextImg = $($currentImg.closest(".plac-gal-imag").next().find("img"));
        var $images = $("#image-gallery img");
        if ($nextImg.length > 0) {
            $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
        } else {
            $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
        }
        event.stopPropagation();
    });

    // When previous button is clicked
    $prevButton.click(function (event) {
        $("#overlay img").hide();
        var $currentImgSrc = $("#overlay img").attr("src");
        var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
        var $nextImg = $($currentImg.closest(".plac-gal-imag").prev().find("img"));
        $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
        event.stopPropagation();
    });

    $exitButton.click(function () {
        $("#overlay").fadeOut("slow");
    });


});
     </script>
 
 
    <!-- LOAD JQUERY -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.owl.carousel.js"></script>
    <script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type='text/javascript' src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/script3.js"></script>
 
    <!-- REVOLUTION DEMO -->
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/swiper.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: true,
            slidesPerView: 1.2,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 1.5,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            },
        });
    </script>
    
    
       <script>
        var swiper = new Swiper(".mySwiper30", {
            autoplay: true,
            slidesPerView: 1.1,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            },
        });
    </script>
    
       <script>
        var swiper = new Swiper(".mySwiper1234", {
            autoplay: true,
            slidesPerView: 1.2,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3.4,
                    spaceBetween: 30,
                },
            },
        });
    </script>
    
    <script>
        var swiper = new Swiper(".mySwiper1", {
            autoplay: true,
               slidesPerView: 1,
                spaceBetween: 10,
             
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
         
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper111", {
            autoplay: true,
               slidesPerView: 1,
                spaceBetween: 10,
             
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
         
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper178", {
            autoplay: true,
               slidesPerView: 1,
                spaceBetween: 10,
             
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
         
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            },
        });
    </script>
        <script>
            var swiper = new Swiper(".mySwiper2", {
                autoplay: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                    },
                },
            });
        </script>
          <script>
            var swiper = new Swiper(".mySwiper3", {
                autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                slidesPerView: 1.2,
                spaceBetween: 10,
                breakpoints: {
                    640: {
                        slidesPerView: 1.2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2.2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
            });
        </script>
            <script>
                var swiper = new Swiper(".mySwiper4", {
                    autoplay: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    slidesPerView: 1.4,
  spaceBetween: 10,
                    breakpoints: {
                        640: {
                            slidesPerView: 1.4,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 1.4,
                            spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 1.4,
                            spaceBetween: 30,
                        },
                    },
                });
            </script>
            <script>
                var swiper = new Swiper(".mySwiper5", {
                    autoplay: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    slidesPerView: 1.4,
  spaceBetween: 10,
                    breakpoints: {
                        640: {
                            slidesPerView: 1.4,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 2.4,
                            spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 30,
                        },
                    },
                });
            </script>
             <script>
                var swiper = new Swiper(".mySwiper6", {
                    autoplay: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    slidesPerView: 1.4,
  spaceBetween: 10,
                    breakpoints: {
                        640: {
                            slidesPerView: 1.4,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 2.4,
                            spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 7,
                            spaceBetween: 15,
                        },
                    },
                });
            </script>
             <script>
                var swiper = new Swiper(".mySwiper7", {
                    autoplay: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    slidesPerView: 2,
  spaceBetween: 15,
                    breakpoints: {
                        640: {
                            slidesPerView: 1.4,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 6,
                            spaceBetween: 30,
                        },
                    },
                });
            </script>

<script>
                var swiper = new Swiper(".mySwiper8", {
                    autoplay: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    slidesPerView: 2.4,
  spaceBetween: 10,
                    breakpoints: {
                        640: {
                            slidesPerView: 1.4,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 2.5,
                            spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 7,
                            spaceBetween: 20,
                        },
                    },
                });
            </script>
            
            
            
            
                    <script>
            var swiper = new Swiper(".mySwiper9", {
                autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                slidesPerView: 1.1,
                spaceBetween: 10,
                breakpoints: {
                    640: {
                        slidesPerView: 1.1,
                  
                    },
                    768: {
                        slidesPerView: 2.2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
            });
            
            
            
             var swiper = new Swiper(".mySwiper56", {
          slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
        },
      });
        </script>
            
            
            
            <script>
      var swiper = new Swiper(".mySwiper-slide", {
          autoplay: true,
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
       
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
            
    <script type="text/javascript">
        if ($('#slider-revolution').length) {
            $('#slider-revolution').show().revolution({
                ottedOverlay: "none",
                delay: 10000,
                startwidth: 1600,
                startheight: 650,
                hideThumbs: 200,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,


                simplifyAll: "off",

                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview4",

                touchenabled: "on",
                onHoverStop: "on",
                nextSlideOnWindowFocus: "off",

                swipe_threshold: 0.7,
                swipe_min_touches: 1,
                drag_block_vertical: false,

                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],


                keyboardNavigation: "off",

                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",

                spinner: "spinner2",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "off",



                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0
            });
        }
    </script>
    
    
    
 <script>
// Get the modal
var modal = document.getElementById("myModal12");

// Get the button that opens the modal
var btn = document.getElementById("myBtn12");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close34")[0];

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
<script>
    // Get the modal
var modal1 = document.getElementById("myModal13");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn13");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close35")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>





	<script>
	    console.clear();
const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'));
const backLink = `<li class="nav-item">
	<a class="nav-link nav-back-link" href="javascript:;">
		Back
	</a>
</li>`;
navExpand.forEach(item => {
  item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink);
  item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'));
  item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'));
}); // ---------------------------------------
// not-so-important stuff starts here

const ham = document.getElementById('ham');
ham.addEventListener('click', function () {
  document.body.classList.toggle('nav-is-toggled');
});
 
 
    
    function toggle1() {
    
   
       $("body").removeClass("nav-is-toggled");
          
       
    }

 </script>
 
<script>
    function yesnoCheck(that) {
    if (that.value == "road") {
           document.getElementById("ifYes").style.display = "block";
            document.getElementById("ifYes1").style.display = "none";
    } else {
        document.getElementById("ifYes").style.display = "none";
         document.getElementById("ifYes1").style.display = "block";
    }
}
 
</script>
<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
 <script>
        /*Interactivity to determine when an animated element in in view. In view elements trigger our animation*/
$(document).ready(function() {

  //window and animation items
  var animation_elements = $.find('.animation-element');
  var web_window = $(window);

  //check to see if any animation containers are currently in view
  function check_if_in_view() {
    //get current window information
    var window_height = web_window.height();
    var window_top_position = web_window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    //iterate through elements to see if its in view
    $.each(animation_elements, function() {

      //get the element sinformation
      var element = $(this);
      var element_height = $(element).outerHeight();
      var element_top_position = $(element).offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
      if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
        element.addClass('in-view');
      } else {
        element.removeClass('in-view');
      }
    });

  }

  //on or scroll, detect elements in view
  $(window).on('scroll resize', function() {
      check_if_in_view()
    })
    //trigger our scroll event on initial load
  $(window).trigger('scroll');

});
    </script>
    
     <script>
        /*Interactivity to determine when an animated element in in view. In view elements trigger our animation*/
$(document).ready(function() {

  //window and animation items
  var animation_elements = $.find('.animation-element');
  var web_window = $(window);

  //check to see if any animation containers are currently in view
  function check_if_in_view() {
    //get current window information
    var window_height = web_window.height();
    var window_top_position = web_window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    //iterate through elements to see if its in view
    $.each(animation_elements, function() {

      //get the element sinformation
      var element = $(this);
      var element_height = $(element).outerHeight();
      var element_top_position = $(element).offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
      if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
        element.addClass('in-view');
      } else {
        element.removeClass('in-view');
      }
    });

  }

  //on or scroll, detect elements in view
  $(window).on('scroll resize', function() {
      check_if_in_view()
    })
    //trigger our scroll event on initial load
  $(window).trigger('scroll');

});
    </script>
    
       <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mail.js"></script>
    <script src="js/custom.js"></script>
            <script  src="vendor/bootstrap/jquery-1.12.4.min.js"></script>
        <script  src="vendor/bootstrap/popper.min.js"></script>
        <script  src="vendor/bootstrap/bootstrap.min.js"></script>
        <script  src="vendor/countdown/countdown.min.js"></script>
        <script  src="vendor/niceselect/nice-select.min.js"></script>
        <script  src="vendor/slickslider/slick.min.js"></script>
        <script  src="vendor/venobox/venobox.min.js"></script>

        <!-- CUSTOM -->
        <script src="js/nice-select.js"></script>
  <script src="js/accordion.js"></script>
        <script src="js/venobox.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/main.js"></script> 

</body>

 
</html>    