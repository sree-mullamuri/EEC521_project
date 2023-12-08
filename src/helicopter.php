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






<!DOCTYPE html>
<html lang="en">

<head>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Stylesheets -->
<!--<link href="assets/css/font-awesome-all.css" rel="stylesheet">-->
<!--<link href="assets/css/flaticon.css" rel="stylesheet">-->
<link href="css/owl.css" rel="stylesheet">
<!--<link href="assets/css/bootstrap.css" rel="stylesheet">-->
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<!--<link href="assets/css/nice-select.css" rel="stylesheet">-->
<!--<link href="assets/css/jquery-ui.css" rel="stylesheet">-->
<!--<link href="assets/css/color.css" rel="stylesheet">-->
<link href="css/style6.css" rel="stylesheet">
<!--<link href="assets/css/responsive.css" rel="stylesheet">-->
 

<style type="text/css">
    
 .btn-enq{
    background: #ff8a00;
    border: none;
  color: #FFFFFF;
  text-align: center;
    font-size: 18px;
    padding:6px 21px;
    color: #fff;
    font-weight:500;
    text-transform: uppercase;
    transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.btn-enq span{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn-enq span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.btn-enq:hover span {
  padding-right: 25px;
}

.btn-enq:hover span:after {
  opacity: 1;
  right: 0;
}

 
#top-packages{
    padding: 50px 0;background: #f1f1f1;
}

.h1-global{
    font-size: 40px;
    font-family: 'Lato', sans-serif;
    margin: 0 0 20px;font-weight:400;
}
.h1-global span{
     font-weight:600;
    color: #ff8a00;
}
.packages { margin-top: 10px; background: #fff; width: 100%; float: left;    padding: 10px;border-radius: 10px; box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);}
.packages:hover{box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);}
.packages figure{
    position: relative;  
    -webkit-transition: all 0.8s ease; /* Safari and Chrome */
    -moz-transition: all 0.8s ease; /* Firefox */
    -ms-transition: all 1s ease; /* IE 9 */
    -o-transition: all 0.8s ease; /* Opera */
    transition: all 0.8s ease;
    transform:scale(1);
}
.packages figure:hover{
  -webkit-transform:scale(1); /* Safari and Chrome */
    -moz-transform:scale(1); /* Firefox */
    -ms-transform:scale(1); /* IE 9 */
    -o-transform:scale(1); /* Opera */
     transform:scale(1.06);
}

.overlay
{
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+18,000000+100&0+70,0.89+100 */
background: -moz-linear-gradient(top, rgba(0,0,0,0) 18%, rgba(0,0,0,0) 65%, rgba(0,0,0,2.89) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(0,0,0,0) 18%,rgba(0,0,0,0) 65%,rgba(0,0,0,2.89) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(0,0,0,0) 18%,rgba(0,0,0,0) 65%,rgba(0,0,0,0 2.89) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#e3000000',GradientType=0 ); /* IE6-9 */
}
.packages .all-free {
    position: absolute;
    bottom: 83px;
    left: -1px;
    padding: 8px 0 8px 0;
    font-weight: bold;
}
.packages .special-honymoon {
    position: absolute;
    bottom: 0px;
    left: 10px;
    padding: 8px 0 0 0;
    color: #fff;
    right: 10px;
    font-size: 18px;
    text-align: center;
    line-height: normal;
}
.packages .tag {
    position: absolute;
    width: 108px;
    top: 23px;
    color:#fff;
    background: #008aed;
    left: 0;
    padding: 8px 0 8px 18px;
    font-weight: bold;
    font-size: 18px;
    -webkit-border-top-right-radius: 20px;
-webkit-border-bottom-right-radius: 20px;
-moz-border-radius-topright: 20px;
-moz-border-radius-bottomright: 20px;
border-top-right-radius: 20px;
border-bottom-right-radius: 20px;
}

.packages .budget {
    position: absolute;
    top: -8px;
    right: -7px;
}

.packages h2{
    font-size: 17px;
    font-family: 'Lato', sans-serif;
    font-weight: bold;
}
.packages h2 span{
    color: #4caf50;font-weight: bold;font-size: 14px; 
}
.packages h3{
    font-size: 14px; 
    margin-bottom: 10px;
}
.packages h3 span{
    color: #F44336;
}
.itnry{
    padding: 10px 0;
    margin: 0;
    list-style-type: none;
    border-bottom: solid 1px #cfcfcf;
    border-top: solid 1px #cfcfcf;
 }
.itnry li{
    padding: 0px;
    margin: 0px;
    list-style-type: none;
    display: inline-block;
    width: 18.5%;
    text-align: center;
    font-size: 14px;
    color: #000000;
}
.itnry li.active{
    color: #a3a3a3;
}
.itnry li.active figure {
    opacity: 0.3;
}
.itnry li figure{
    padding: 0px;
    margin: 0px;
}
.itnry li p{
    padding: 0px;
    margin: 0px;
    color: #f44336;
}
.inclusions{
    margin-top: 20px;
}
.inclusions h5{
    font-size: 17px;
    font-weight: 600;
     
}
.inclusions a{
    color: #ff8a00;
}
.pkg-incusion{
    padding: 5px 0;
    margin: 0px;
    list-style-type: none;
    line-height: 20px;
}

.pkg-incusion li{
    padding: 2px 0 0 15px;
    margin: 0 0 3px 0;
    list-style-type: none;
    display: block;
    position: relative;
    background-image: url(assets/arrow-orng.png);
    background-repeat: no-repeat;
    background-position: left 6px;font-size: 14px;
}
.pkg-incusion li i{
    position: absolute;
    left: 0;
    top: 3px;
    color: #008aed;
}
.inclusions .read-collpse {
    position: absolute;
    right: 20px;
    margin-top: -10px;
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

.price-tag {
    border-bottom: solid 1px #cfcfcf;
    border-top: solid 1px #cfcfcf;
    padding: 10px 0;
    margin-top: 20px;
    float: left;
    width: 100%;
}
.price-tag .price{
    font-size: 17px;
    font-weight: 600;
    display: inline-block;
    margin-top: 6px; color: #4caf50;
}
.price-tag .price small {
    display: block;
    color: #333; font-weight: bold;
}

.price-tag .price small i {
    text-decoration: line-through;
}

.btn-detail {
    display: inline-block;
    float: right;
    margin-top: -15px;
}

.btn-detail .btn {
    background: #ff8a00;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 15px;
    padding: 9px 20px;
    color: #fff;
    font-weight: 500;
    text-transform: uppercase;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
}

.btn-detail .btn span{
cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s; 
    
}

.btn-detail .btn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -10px;
  transition: 0.5s;
}

.btn-detail:hover span {
  padding-right: 20px;
}

.btn-detail:hover span:after {
  opacity: 1;
  right: 0;
}
 

   .footer1{
            background:#F1F3F4 !important;
            padding-top:20px !important;
            
        }
        .footer1 h4{font-size:130% !important;}
        .footer1 p{font-size:110% !important;padding:5px;}
        #crimg{
            width:70px;
            height:70px;
        }
        #footerbook{
            width:200px;
            height:auto;
            padding:14px 12px;
            background:#e56205;
            color:white;
            border-radius:4px;
            cursor:pointer;
            text-align:center;
            font-weight:bold;
            font-size:120%;
        }
                    #rate{
                background:#f08587;
                padding:5px;
                font-size:105%;
                font-weight:bold;
                text-align:center;
                border-radius:3px;
                color:#ffffff;
                width:110px;
                position:absolute;
                top:35px;
                left:10px;
            }
        
        #offer{
            background:#f08587;
            padding:5px 10px;
            text-align:left;
            font-size:130%;
            font-weight:bold;
            color:white;
            position:absolute;
            top:150px;
            left:12%;
            z-index:99999;
        }
        
                #offer1{
            background:white;
            border-radius:6px;
            opacity:.9;
            padding:5px 10px;
            text-align:left;
            font-size:130%;
            font-weight:bold;
            color:black;
            position:absolute;
            top:390px;
            left:40%;
            z-index:99999;
        }
                        #offer2{
            width:200px;
            height:150px;
            top:100px;
            left:20%;
            position:absolute;
            z-index:99999;
            
        }
                #offer3{
            width:auto;
            height:auto;
            color:white;
            padding:10px;
            top:250px;
            opacity:.7;
            background:blue;
            left:15%;
            font-size:180%;
            font-weight:bold;
            position:absolute;
            z-index:99999;
            
        }
        
        .whatsapp{
            width:65px;
            height:65px;
            position:fixed;
            bottom:10px;
            left:6%;
            z-index:9999999;
            animation: wht 1.5s infinite;
        }
        .phonecall{
            width:75px;
            height:75px;
            position:fixed;
            bottom:10px;
            float:right;
            right:8%;
            z-index:9999999;
            animation: phn 1.5s infinite;
        }  
        
        @keyframes wht {
  from {bottom:10px;}
  to {bottom:80px;}
}
@keyframes phn {
  from {bottom:10;}
  to {bottom:80px;}
}
        
        #closemenow{
    
padding:6px;
cursor:pointer;
float:right;
background:#ffb400;
color:white;
top:5px;
RIGHT:5px;
font-size:75%;
border-radius:3px;
border:1px dotted black;
position:absolute;
}

            
            
            .my-form{
                position:absolute;
                width:310px;
                height:320px;
                background:white;
                opacity:.95;
                top:160px;
                float:right;
                right:50px;
                clear:both;
                display:block;
                padding:10px;
                border-radius:6px;
                border:2px #f08587 solid;
                
            }
            #form-heading{
                width:100%;
                text-align:center;
                display:block;
                color:#fa398a;
                font-weight:bold;
                font-size:110%;
            }
            .my-form input[type='text']{
                margin-left:5%;
                margin-right:5%;
                width:90%;
                padding:0px 5px;
                margin-top:5px !important;
                margin-bottom:5px !important;
            }
            .my-form input[type='submit']{
                margin-left:5%;
                width:120px;
                padding:7px;
                border:none;
                background:#ffb400;
                color:white;
            }
            #mainad{
               width:100%;
               height:330px;
               padding:5px;
               margin-top:25px;
               background:#f5f3f0;
               border-radius:4px;
               
            }
            
            #mainad img{
                
                border-top-left-radius:4px;
                border-top-right-radius:4px;
            }
            
            #myh1{
                
                text-align:center;
            }
            
            h3{
                padding:10px 5px;
                font-size:110%; 
                font-weight:bold;
            }
            h4{
                text-align:left;
                padding:5px;
                font-size:100%;
            }
            #bookfast{
                float:left;
                display:block;
                width:125px;
                padding:8px 6px;
                height:auto;
                background:#ffb400;
                text-align:center;
                cursor:pointer;
                margin-top:15px;
                color:#ffffff;
                border-radius:3px;
            }
            
             #bookfast1{
                float:right;
                display:block;
                width:125px;
                padding:8px 6px;
                height:auto;
                background:#ffb400;
                text-align:center;
                cursor:pointer;
                margin-top:15px;
                color:#ffffff;
                border-radius:3px;
            }
            
             @media screen and (max-width: 1000px){
                 
                             #mainad{
               width:100%;
               height:380px;
               padding:5px;
               margin-top:70px;
               background:#f5f3f0;
               border-radius:4px;
               
            }
             }
            
             @media screen and (max-width: 700px){
                 
                             #mainad{
               width:100%;
               height:350px;
               padding:5px;
               margin-top:30px;
               background:#f5f3f0;
               border-radius:4px;
               
            }
                 
                   #offer{
            background:#f08587;
            padding:4px 6px;
            text-align:left;
            font-size:101%;
            font-weight:normal;
            color:white;
            position:absolute;
            top:245px;
            left:30%;
            z-index:99999;
        }
                 #offer1{
            background: #fff;
            opacity: 0.7;
            padding:4px 25px;
            text-align:left;
            font-size: 18px;
            font-weight: 600;
            color:#000;
            position:absolute;
            top:100px;
            left:30%;
            z-index:99999;
        }        
                 
                 #myh1{
                
                margin-top:-90px;
            }
                 
                  .my-form{
                position:relative;
                width:96%;
                height:350px;
                 
                right:2%;
                top:10px;
                background:;
                opacity:1;
                clear:both;
                display:block;
                padding:10px;
                border-radius:4px;
                bottom:-20px;
                border:none;
            }
            

                 
             }
        </style>
        
        
      <style>
                    #bookpop{
            display: none;
        }
        
            .bookpop{
                background:white;
                width:76%;
                height:auto;
                position:fixed;
                top:30px;
                left:12%;
                right:12%;
                border-radius:3px;
                z-index:100001;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            #cross{
                float:right;
                top:-30px;
                right:20px;
                font-size:120%;
                display:inline;
                position:relative;
                cursor:pointer;
            }
            
            #cross:hover{
                background:#e6ebe7;
                border-radius:50%;
                padding:0px 3px;
            }
            
            .book-header{
                width:98%;
                height:auto;
                font-family:;
                font-size:130%;
                padding:1%;
                background:;
            }
            #callbtn{
                display:inline-block;
                position:relative;
                left:-190px;
                top:-30px;
                color:red;
            }
            #callnum{
                display:inline;
                float:left;
                top:10px;
                font-size:140%;
                left:120px;
                position:relative;
                color:red;
                
            }
            
            
            #certidiv{
                margin-left:10%;
            }
            #certlable{
                margin-top:40px;
                float:left;
                font-size:120%;
                display:block;
            }
            
            #certi{
                width:55px;
                height:55px;
                margin-top:20px;
                margin-left:10px;
                margin-right:3px;
            }
            
            .left-box{
                float:left;
                width:50%;
                height:450px;
                
            }
            .left-box a{
                color:red;
                text-decoration: none;
                
            }
            
            .right-box{
                float:right;
                width:50%;
                height:450px;
                background:;
            }
            .right-box img{
                width:92%;
                margin-left:4%;
                margin-right:4%;
                height:380px;
            }
            
            .book-form{
                padding:0px 20px 20px 20px;
                
                
            }
            .book-form table{
                width:100%;
                
            }
            Lable{
                font-size:100%;
                font-weight:bold;
                color:#5c5b59;
                padding:5px;
                display:block;
                margin-top:10px;
            }
            #td1{
                width:20%;
                padding-top:20px;
                
            }
            #td2{
                width:80%;
            }
            #input1{
                padding:3px;
                border:none;
                width:100%;
                border:1px solid black;
                margin-top:1px;
                
            }
            #input2{
                padding:14px 16px;
                width:190px;
                margin-top:4px;
                background:red;
                color:white;
                border:none;
                border-radius:4px;
                cursor:pointer;
            }
            #input2:hover{
                background:#9c0303;
            }
            .book-footer{
                padding:1px 20px;
            }
            @media only screen and (max-width: 1150px){
                        .bookpop{
                background:white;
                width:96%;
                height:auto;
                position:relative;
                top:50px;
                left:2%;
                right:2%;
            }
                
            }
            @media only screen and (max-width: 1000px){
                
                            .bookpop{
                background:white;
                width:94%;
                height:1100px;
                position:relative;
                top:20px;
                left:3%;
                right:3%;
            }
            .book-header{
                
           margin-top:-200px;
           padding:8px 0px 0px 8px;
          
                
            }
           
                .left-box{
                float:left;
                width:100%;
                height:460px;
                clear:both;
                margin-top:-420px;
                padding:5px 0px;
                
            }
            .right-box{
                float:left;
                width:100%;
                height:450px;
                margin-bottom:10px;
                background:;
            
                
            }
            .right-box img{
                width:90%;
                margin-top:50px;
                margin-left:5%;
                margin-right:5%;
                margin-bottom:10px;
                height:270px;
            }
            #certidiv{
                margin-left:5%;
            }
            #certlable{
                margin-top:30px;
                float:left;
                font-size:90%;
                display:block;
            }
            
            #certi{
                width:45px;
                height:45px;
                margin-top:20px;
                margin-left:5px;
                margin-right:3px;
            }
            .book-footer{
                margin-top:500px;
            }
            #hr1{}
            #hr2{display:none;}
                        #cross{
                float:right;
                top:-440px;
                right:10px;
                font-size:120%;
                display:inline;
                position:relative;
                cursor:pointer;
            }
            
            #offer2{
            
            
            top:70px;
            left:10%;
            z-index:99999;
        }
        #offer3{display:none;}
            
            }
        </style>        
        
        <style>
        .hidn2{
            display: none;
        }
        .button-call{
            display:none;
        }
        .m-0{
            margin:0;
            padding:10px 1px;
        }
        .olp-padi{
         padding:10px 20px;   
        }
        .img099{
            height: 500px;
        }
        .mtp{
            margin-top: -20px;
        }
            @media only screen and (max-width: 768px) {
                .olp-padi{
         padding:10px 0px;   
        }
                .button-call{
            display:block;
            position:fixed;
            bottom:0;
       color:#fff;
     text-align:center;
            z-index:99;
            width:100%;
        }
        .icon-color4{
            background:#197540;
            color:#fff;
            font-size:20px;
            font-weight:600;
        }
         .back-color4{
            background:#061a3a;
            color:#fff;
            font-size:24px;
            font-weight:600;
            text-transform:uppercase;
        }
        
        .mtp{
            margin-top: -100px;
        }
        
        
  .hidenn{
         display: none;   
        }
        .img099{
            height: 250px;
        }
        .hidn2{
            display: block;
        }
}


@media only screen and (max-width: 768px) {
  .h2{
    font-size: 22px;
    color: #061b30;
    padding: 10px;
    font-weight: 600;
    text-shadow: 0 2px 2px rgb(0 0 0 / 40%);
  }
}
</style>
</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">
  <!-- preloader -->
      <!--   <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="v" class="letters-loading">
                                v
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div> -->
        <!-- preloader end -->

<style>
    .opkl{
        text-align:left;  
    }
    
    .oj{
        display: none;
    }
    
    @media only screen and (max-width:768px){
         .opkl{
        text-align:center; margin:auto;
       
    }
     .oj{
        display: block;
    }
    .ojj{
        display: none;
    }
    }
</style>
        <!-- banner-section -->
        <section class="banner-section ojj" style="background-image: url(image/char-dham-yatra-by-helicopter.jpg); ">
            <div class="pattern-layer" style="background-image: url(image/shape-1.png);"></div>
            <div class="auto-container">
            </div>
        </section>
        <!-- banner-section end -->
        
        
        <div class="container oj">
            <div class="row">
                <img src="assets/chardham-yatra-by-helicopter.jpg">
            </div>
        </div>
       

<style type="text/css">
.sec-hide2{
    display: none;
}

    @media only screen and (max-width: 768px) {
  .sec-hide {
   display: none;
  }

  .sec-hide2{
    display: block;
}
}




</style>


        <!-- feature-section -->
<section class="feature-section bg-color-1 sec-pad sec-hide">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-9 col-lg-9 left-pkg maine-pkg">
                <?php
$ret=mysqli_query($con,"select * from helicoptertitle ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

                <div class="sec-title text-center">
                    <span class="h"><?php echo $row['title2']; ?></span>
                </div>
            <?php } ?>

        <?php
$ret=mysqli_query($con,"select * from helicopter ");
while ($row=mysqli_fetch_array($ret)) 
{
        $id1=$row['id'];

?> 
                     <div class="row">
                          <div class="tp-head-box">
               <div class="tp-top-box">
                  <div class="tp-img">
                    <?php
$ret1=mysqli_query($con,"select * from helicopterimages where helicopterid='$id1' ");
$row1=mysqli_fetch_array($ret1);

?> 
                                    <img src="image/helicopter/<?php echo $row1['image'] ?>" alt="<?php echo $row['name'] ?>  <?php echo $row['duration'] ?>" width="100%">
<?php  ?>

                  </div>
                  <div class="tp-info">
                     <div class="tp-info-first">
                        <div class="tp-info-left">
                           <h3><?php echo $row['name'] ?></h3>
                           <div class="tp-day-box"><span class="tp-day"><i class="fa fa-moon-o" aria-hidden="true"></i><?php echo $row['duration'] ?>   </span><span class="tp-cust">Customizable</span></div>
                           <!--<div class="tp-price-box"><span class="tp-discount"><i class="fa-solid fa-indian-rupee-sign" style="font-size:22px;"></i> 95,000/- Per Person</span></div>-->
                           <div class="tp-sub-box">Per Person on twin sharing</div>

                           <div class="tp-address-box">
                            <span class="tp-day"><i class="fa fa-map-marker" aria-hidden="true"></i> Place Covered : </span> 
                        <?php
$ret1=mysqli_query($con,"select * from helicopterplacescovered where helicopterid='$id1' ");
while ($row1=mysqli_fetch_array($ret1)) 
{

    ?>    

                            <i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $row1['name'] ?> | 
                        <?php } ?>
                        </div>
                        </div>
                            <div class="tp-info-right bg-bss"> 
                     <a class="enquiryBtn  "   href="#popupp3">Enquire Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    <!--<a class="enquiryBtn  "   href="#popup4">Download <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>-->
                  
                    <!--<a class="wp" href="https://api.whatsapp.com/send?phone=7535869999&amp;text=Chardham%20Yatra%20by%20Helicopter"> <i style="font-size: 18px; font-weight: 800;" class="fa-brands fa-whatsapp"></i>&nbsp;<span>Whatsapp</span> </a>-->
                      <!--<a class="enquiryBtn  " >Buy Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>-->
                </div>
                        <div class="tp-bot-box">
                           <div class="tp-list">
                              <ul>
                                 <li><i class="fa fa-h-square" aria-hidden="true"></i>Hotel</li>
                                 <li><i class="fa fa-plane" aria-hidden="true"></i>Flight</li>
                                 <li><i class="fa fa-cutlery" aria-hidden="true"></i>Meals</li>
                                 <li><i class="fa fa-street-view" aria-hidden="true"></i>Sightseeing</li>
                                 <li><i class="fa fa-bus" aria-hidden="true"></i>Bus</li>
                                 <li><i class="fa fa-taxi" aria-hidden="true"></i>Cab</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
                    </div>
                    <br>
                <?php } ?>
                    
    </div>
    <div class="col-md-3 col-lg-3">
        <div class="tourpackbg1 dest-overview">
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
               <form role="form" action="#" method="post" class="bv-form">
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>

                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>

                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <select name="helicopterid" class="effect-9" required style="width: 100%;">
<option value="">Select Tour</option> 
<?php $query=mysqli_query($con,"select * from helicopter");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
<?php } ?>
</select>

                        </div>
                     </div>
                  </div>

                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input name="numberofperson" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >
                        </div>
                     </div>
                  </div>
                  <!--<div class="form-inn">-->
                  <!--   <div class="form-group has-feedback">-->
                  <!--      <div class="input-group">-->
                  <!--         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
                  <!--         <input name="child" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                 
                  <div class="text-center"> 
                  <button type="submit" name="helicoptorform" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
         
         
         <!--<h3 class="text-center" style="font-size:22px;">Chardham By Road</h3>-->
         <!--<p style="margin-bottom:10px;"><a href="assets/WhatsApp Image 2022-08-19 at 6.33.59 PM (1).jpeg"><img src="assets/WhatsApp Image 2022-08-19 at 6.33.59 PM (1).jpeg" width="100%"></a></p>-->
         <!--<p style="margin-bottom:10px;"><a href="assets/WhatsApp Image 2022-08-19 at 6.33.59 PM.jpeg"><img src="assets/WhatsApp Image 2022-08-19 at 6.33.59 PM.jpeg" width="100%"></a></p>-->
         <!--<p style="margin-bottom:10px;"><a href="assets/WhatsApp Image 2022-08-19 at 6.33.58 PM (1).jpeg"><img src="assets/WhatsApp Image 2022-08-19 at 6.33.58 PM (1).jpeg" width="100%"></a></p>-->
         <!--<p style="margin-bottom:10px;"><a href="assets/WhatsApp Image 2022-08-19 at 6.33.58 PM.jpeg"><img src="assets/WhatsApp Image 2022-08-19 at 6.33.58 PM.jpeg" width="100%"></a></p>-->
         
         
         
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->

  <section class="sec-hide2" style="margin-top:  100px;">

                    <div class="container-fluid olp-padi">
                        <div class="row">
                       <div class="col-md-12" style="margin-top: -80px;">
                            <div class="  text-center" >
                      <span class="h2" style=" color: #061b30;">Chardham Yatra By Helicopter Packages</span>
                    </div>
                        <br>
 
                       <div class="col-md-4 ptt ">
                           
           <div class=" " style="margin-top: 10px;
    background: #fff;
    width: 100%;
  
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                
              <img width="100%" src="assets/th (1).jpg" alt="" class="img-fluid">  
              
                    <div style="margin-top: 5%;">            
              <h2 class=" " style="font-size: 16px;
   ">KEDARNATH BY HELICOPTER</h2>
              
              <p style="font-size: 14px; line-height: 22px; font-weight: 500; padding-bottom: 5px;">Kedarnath one of the most dedicated 12th Jyotirling Loard Shiva. Which is situated in uttarakhand Himalayan range District Chamoli..</p>
              <!--<div class="price" style="color: red;"><small><b style="color: #000;">Price</b></small> Rs. 65,000/- Per Person </div>-->
              </div>
              
              <ul class="itnry">
                <li class="active">
                    <img src="assets/flight-icon.png" alt="" class="img-fluid">  
                  <p>Flight</p>
                </li>
                <li>
                  <img src="assets/hotel-icon.png" alt="" class="img-fluid">
                  <p>Hotels</p>
                </li>
                <li>
                <img src="assets/Sightseeing-icon.png" alt="" class="img-fluid">  
                  <p>Seeings</p>
                </li>
                <li>
                   <img src="assets/meals-icon.png" alt="" class="img-fluid">
                  <p>Meals</p>
                </li>
                <li class="border-none">
                  <img src="assets/transfer-icon.png" alt="" class="img-fluid">
                  <p>Transfers</p>
                </li>
              </ul> 
              
              <div class="inclusions" >
                   <div style="margin-top: 5%;">
                <h5 >Package Inclusions:</h5>
                </div>
                <ul class="pkg-incusion">
                  <li> VIP Darshans. </li>
                  <li>  Local Services & Logistics related to your desired Shrine.</li>
                 <li>Welcome Drink (Non Alcoholic) On Arrival Time</li>
                <li>  One meal – Breakfast or lunch.</li>
                  <li>  Helicopter handling charges.</li></ul>
               <!--  <div class="collapse" id="collapseExample6">
                  <ul class="pkg-incusion">
                    
                    
                    <li>One Half Day Local Manali Sightseeing by car </li>
                    <li>One Full Day Snow Point / Solang Valley by Car </li>
                    <li>Pick Up and Drop From Volvo Bus Stand</li>
                    <li>Delhi – Manali – Delhi Transfer by AC Luxury Volvo Bus</li>
                   
                  </ul>
                </div> -->
                <!-- <a class="read-collpse" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6"> <span>Read More</span> <i>Close </i> </a> --> </div>
              <div style="border-bottom: solid 1px #cfcfcf;
    border-top: solid 1px #cfcfcf;
    padding: 10px 0;
    margin-top: 20px;
 
    width: 100%;">
                 <a href="https://api.whatsapp.com/send?phone=7535869999&amp;text=Kedarnath%20Yatra%20by%20Helicopter"> <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/></a>&nbsp;
                <a href="#popupp1" style="background-color: #061b30; font-size: 12px; padding: 12px 12px; color: #fff; border-radius: 4px;">Send Enquiry&nbsp;<i class="fa-solid fa-envelope"></i></a>
               
                <!--<div class="btn-detail"> <a href="#popup3"  id="bookfast"><span>Download&nbsp;<i class="fa-solid fa-circle-arrow-right"></i></span></a>-->
                
                <!--</div>-->
              </div>
            </div>
          </div>
          
           <div class="col-md-4 ptt">
            <div class=" " style="margin-top: 10px;
    background: #fff;
    width: 100%;
  
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
              <img width="100%" src="assets/3.jpg" alt="" class="img-fluid">  
              
                    <div style="margin-top: 5%;">            
              <h2 style="font-size: 16px;
     ">BADRINATH BY HELICOPTER</h2>
              <p style="font-size: 14px; line-height: 22px; font-weight: 500; padding-bottom: 5px;">Badrinath is concern to loard Vishnu which is situated in the town of Joshimath District Chamoli in Uttarakhand, India..</p>
              <!--<div class="price" style="color: red;"><small><b style="color: #000;">Price</b></small> Rs. 70,000/- Per Person </div>-->
              </div>
              <ul class="itnry">
                <li class="active">
                    <img src="assets/flight-icon.png" alt="" class="img-fluid ">  
                  <p>Flight</p>
                </li>
                <li>
                  <img src="assets/hotel-icon.png" alt="" class="img-fluid">  
                  <p>Hotels</p>
                </li>
                <li>
                <img src="assets/Sightseeing-icon.png" alt="" class="img-fluid">  
                  <p>Seeings</p>
                </li>
                <li>
                   <img src="assets/meals-icon.png" alt="" class="img-fluid"> 
                  <p>Meals</p>
                </li>
                <li class="border-none">
                  <img src="assets/transfer-icon.png" alt="" class="img-fluid"> 
                  <p>Transfers</p>
                </li>
              </ul> 
              
              <div class="inclusions" >
                   <div style="margin-top: 5%;">
                <h5 >Package Inclusions:</h5>
                </div>
                <ul class="pkg-incusion">
                  <li> VIP Darshans. </li>
                  <li>  Local Services & Logistics related to your desired Shrine.</li>
                 <li>Welcome Drink (Non Alcoholic) On Arrival Time</li>
                <li>  One meal – Breakfast or lunch.</li>
                  <li>  Helicopter handling charges.</li></ul>
               <!--  <div class="collapse" id="collapseExample6">
                  <ul class="pkg-incusion">
                    
                    
                    <li>One Half Day Local Manali Sightseeing by car </li>
                    <li>One Full Day Snow Point / Solang Valley by Car </li>
                    <li>Pick Up and Drop From Volvo Bus Stand</li>
                    <li>Delhi – Manali – Delhi Transfer by AC Luxury Volvo Bus</li>
                   
                  </ul>
                </div> -->
                <!-- <a class="read-collpse" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6"> <span>Read More</span> <i>Close </i> </a> --> </div>
                <div  style="border-bottom: solid 1px #cfcfcf;
    border-top: solid 1px #cfcfcf;
    padding: 10px 0;
    margin-top: 20px;
 
    width: 100%;">
                 <a href="https://api.whatsapp.com/send?phone=7535869999&amp;text=Badrinath%20Yatra%20by%20Helicopter"> <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/></a>&nbsp;
                <a href="#popupp2" style="background-color: #061b30; font-size: 12px; padding: 12px 12px; color: #fff; border-radius: 4px;">Send Enquiry&nbsp;<i class="fa-solid fa-envelope"></i></a>
               
                <!--<div class="btn-detail"> <a href="#popup3"  id="bookfast"><span>Download&nbsp;<i class="fa-solid fa-circle-arrow-right"></i></span></a>-->
                
                <!--</div>-->
              </div>
            </div>
          </div>
          
          
           <div class="col-md-4 ptt">
            <div class=" " style="margin-top: 10px;
    background: #fff;
    width: 100%;
  
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
              <img width="100%" src="assets/3.jpg" alt="" class="img-fluid">  
              
                    <div style="margin-top: 5%;">            
              <h2 style="font-size: 16px;
   
    ">DODHAM YATRA BY HELICOPTER</h2>
                <h3 style="padding-top: 0; padding-bottom: 0; padding-left:0;">Duration : <span>Same Day </span> </h3>
              <p style="font-size: 14px; line-height: 22px; font-weight: 500; padding-bottom: 5px;">The Ekdham Tour – can be booked for any one of your desired Chardham shrines – Kedarnath ji, Badrinath ji, Gangotri or Yamunotri</p>
              <!--<div class="price" style="color: red;"><small><b style="color: #000;">Price</b></small> Rs. 95,000/- Per Person </div>-->
              </div>
              <ul class="itnry">
                <li class="active">
                    <img src="assets/flight-icon.png" alt="" class="img-fluid ">  
                  <p>Flight</p>
                </li>
                <li>
                  <img src="assets/hotel-icon.png" alt="" class="img-fluid">  
                  <p>Hotels</p>
                </li>
                <li>
                <img src="assets/Sightseeing-icon.png" alt="" class="img-fluid">  
                  <p>Seeings</p>
                </li>
                <li>
                   <img src="assets/meals-icon.png" alt="" class="img-fluid"> 
                  <p>Meals</p>
                </li>
                <li class="border-none">
                  <img src="assets/transfer-icon.png" alt="" class="img-fluid"> 
                  <p>Transfers</p>
                </li>
              </ul> 
              
              <div class="inclusions" >
                   <div style="margin-top: 5%;">
                <h5 >Package Inclusions:</h5>
                </div>
                <ul class="pkg-incusion">
                  <li> VIP Darshans. </li>
                  <li>  Local Services & Logistics related to your desired Shrine.</li>
                 <li>Welcome Drink (Non Alcoholic) On Arrival Time</li>
                <li>  One meal – Breakfast or lunch.</li>
                  <li>  Helicopter handling charges.</li></ul>
               <!--  <div class="collapse" id="collapseExample6">
                  <ul class="pkg-incusion">
                    
                    
                    <li>One Half Day Local Manali Sightseeing by car </li>
                    <li>One Full Day Snow Point / Solang Valley by Car </li>
                    <li>Pick Up and Drop From Volvo Bus Stand</li>
                    <li>Delhi – Manali – Delhi Transfer by AC Luxury Volvo Bus</li>
                   
                  </ul>
                </div> -->
                <!-- <a class="read-collpse" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6"> <span>Read More</span> <i>Close </i> </a> --> </div>
                <div  style="border-bottom: solid 1px #cfcfcf;
    border-top: solid 1px #cfcfcf;
    padding: 10px 0;
    margin-top: 20px;
 
    width: 100%;">
                 <a href="https://api.whatsapp.com/send?phone=7535869999&amp;text=Do-Dham%20Yatra%20by%20Helicopter%20same%20day"> <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/></a>&nbsp;
                <a href="#popupp3" style="background-color: #061b30; font-size: 12px; padding: 12px 12px; color: #fff; border-radius: 4px;">Send Enquiry&nbsp;<i class="fa-solid fa-envelope"></i></a>
               
                <!--<div class="btn-detail"> <a href="#popup3"  id="bookfast"><span>Download&nbsp;<i class="fa-solid fa-circle-arrow-right"></i></span></a>-->
                
                <!--</div>-->
              </div>
            </div>
          </div>
          
                
           <div class="col-md-4 ptt">
            <div class=" " style="margin-top: 10px;
    background: #fff;
    width: 100%;
  
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
              <img width="100%" src="assets/3.jpg" alt="" class="img-fluid">  
              
                    <div style="margin-top: 5%;">            
              <h2 style="font-size: 16px;
   ">DODHAM YATRA BY HELICOPTER</h2>
                <h3 style="padding-top: 0; padding-bottom: 0;  padding-left:0;">Duration : <span>02 Nights / 03 Days </span> </h3>
              <p style="font-size: 14px; line-height: 22px; font-weight: 500; padding-bottom: 5px;">The Ekdham Tour – can be booked for any one of your desired Chardham shrines – Kedarnath ji, Badrinath ji, Gangotri or Yamunotri</p>
              <!--<div class="price" style="color: red;"><small><b style="color: #000;">Price</b></small> Rs. 1,20,000/- Per Person </div>-->
              </div>
              <ul class="itnry">
                <li class="active">
                    <img src="assets/flight-icon.png" alt="" class="img-fluid ">  
                  <p>Flight</p>
                </li>
                <li>
                  <img src="assets/hotel-icon.png" alt="" class="img-fluid">  
                  <p>Hotels</p>
                </li>
                <li>
                <img src="assets/Sightseeing-icon.png" alt="" class="img-fluid">  
                  <p>Seeings</p>
                </li>
                <li>
                   <img src="assets/meals-icon.png" alt="" class="img-fluid"> 
                  <p>Meals</p>
                </li>
                <li class="border-none">
                  <img src="assets/transfer-icon.png" alt="" class="img-fluid"> 
                  <p>Transfers</p>
                </li>
              </ul> 
              
              <div class="inclusions" >
                   <div style="margin-top: 5%;">
                <h5 >Package Inclusions:</h5>
                </div>
                <ul class="pkg-incusion">
                  <li> VIP Darshans. </li>
                  <li>  Local Services & Logistics related to your desired Shrine.</li>
                 <li>Welcome Drink (Non Alcoholic) On Arrival Time</li>
                <li>  One meal – Breakfast or lunch.</li>
                  <li>  Helicopter handling charges.</li></ul>
               <!--  <div class="collapse" id="collapseExample6">
                  <ul class="pkg-incusion">
                    
                    
                    <li>One Half Day Local Manali Sightseeing by car </li>
                    <li>One Full Day Snow Point / Solang Valley by Car </li>
                    <li>Pick Up and Drop From Volvo Bus Stand</li>
                    <li>Delhi – Manali – Delhi Transfer by AC Luxury Volvo Bus</li>
                   
                  </ul>
                </div> -->
                <!-- <a class="read-collpse" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6"> <span>Read More</span> <i>Close </i> </a> --> </div>
                <div  style="border-bottom: solid 1px #cfcfcf;
    border-top: solid 1px #cfcfcf;
    padding: 10px 0;
    margin-top: 20px;
 
    width: 100%;">
                 <a href="https://api.whatsapp.com/send?phone=7535869999&amp;text=Do-Dham%20Yatra%20by%20Helicopter%202N%203D"> <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/></a>&nbsp;
                <a href="#popupp4" style="background-color: #061b30; font-size: 12px; padding: 12px 12px; color: #fff; border-radius: 4px;">Send Enquiry&nbsp;<i class="fa-solid fa-envelope"></i></a>
               
                <!--<div class="btn-detail"> <a href="#popup3"  id="bookfast"><span>Download&nbsp;<i class="fa-solid fa-circle-arrow-right"></i></span></a>-->
                
                <!--</div>-->
              </div>
            </div>
          </div>
          
          
              <div class="col-md-4 ptt">
            <div class=" " style="margin-top: 10px;
    background: #fff;
    width: 100%;
  
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
              <img width="100%" src="assets/3.jpg" alt="" class="img-fluid">  
              
                    <div style="margin-top: 5%;">            
              <h2 style="font-size: 16px;
    ">DODHAM YATRA BY HELICOPTER</h2>
                <h3 style="padding-top: 0; padding-bottom: 0;  padding-left:0;">Duration : <span>03 Nights / 04 Days </span> </h3>
              <p style="font-size: 14px; line-height: 22px; font-weight: 500; padding-bottom: 5px;">The Ekdham Tour – can be booked for any one of your desired Chardham shrines – Kedarnath ji, Badrinath ji, Gangotri or Yamunotri</p>
              <!--<div class="price" style="color: red;"><small><b style="color: #000;">Price</b></small> Rs. 1,30,000/- Per Person </div>-->
              </div>
              <ul class="itnry">
                <li class="active">
                    <img src="assets/flight-icon.png" alt="" class="img-fluid ">  
                  <p>Flight</p>
                </li>
                <li>
                  <img src="assets/hotel-icon.png" alt="" class="img-fluid">  
                  <p>Hotels</p>
                </li>
                <li>
                <img src="assets/Sightseeing-icon.png" alt="" class="img-fluid">  
                  <p>Seeings</p>
                </li>
                <li>
                   <img src="assets/meals-icon.png" alt="" class="img-fluid"> 
                  <p>Meals</p>
                </li>
                <li class="border-none">
                  <img src="assets/transfer-icon.png" alt="" class="img-fluid"> 
                  <p>Transfers</p>
                </li>
              </ul> 
              
              <div class="inclusions" >
                   <div style="margin-top: 5%;">
                <h5 >Package Inclusions:</h5>
                </div>
                <ul class="pkg-incusion">
                  <li> VIP Darshans. </li>
                  <li>  Local Services & Logistics related to your desired Shrine.</li>
                 <li>Welcome Drink (Non Alcoholic) On Arrival Time</li>
                <li>  One meal – Breakfast or lunch.</li>
                  <li>  Helicopter handling charges.</li></ul>
               <!--  <div class="collapse" id="collapseExample6">
                  <ul class="pkg-incusion">
                    
                    
                    <li>One Half Day Local Manali Sightseeing by car </li>
                    <li>One Full Day Snow Point / Solang Valley by Car </li>
                    <li>Pick Up and Drop From Volvo Bus Stand</li>
                    <li>Delhi – Manali – Delhi Transfer by AC Luxury Volvo Bus</li>
                   
                  </ul>
                </div> -->
                <!-- <a class="read-collpse" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6"> <span>Read More</span> <i>Close </i> </a> --> </div>
                <div  style="border-bottom: solid 1px #cfcfcf;
    border-top: solid 1px #cfcfcf;
    padding: 10px 0;
    margin-top: 20px;
 
    width: 100%;">
                 <a href="https://api.whatsapp.com/send?phone=7535869999&amp;text=Do-Dham%20Yatra%20by%20Helicopter%203N%204D"> <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/></a>&nbsp;
          
                
                  <a href="#popupp5" style="background-color: #061b30; font-size: 12px; padding: 12px 12px; color: #fff; border-radius: 4px;">Send Enquiry&nbsp;<i class="fa-solid fa-envelope"></i></a>
               
               
                <!--<div class="btn-detail"> <a href="#popup3"  id="bookfast"><span>Download&nbsp;<i class="fa-solid fa-circle-arrow-right"></i></span></a>-->
                
                <!--</div>-->
              </div>
            </div>
          </div>
          
          
          
          
         <div class="col-md-4 ptt">
            <div class=" " style="margin-top: 10px;
    background: #fff;
    width: 100%;
  
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
              <img width="100%" src="assets/2.jpg" alt="" class="img-fluid">  
              
                    <div style="margin-top: 5%;">            
              <h2 style="font-size: 16px;
  ">Chardham Yatra by Helicopter</h2>
              <h3 style="padding-top: 0; padding-bottom: 0;  padding-left:0;">Duration : <span>05 Nights / 06 Days </span> </h3>
               <!--<div class="price" style="color: red;"><small><b style="color: #000;">Price</b></small> Rs. 1,75,000/- Per Person </div>-->
              
              </div>
              <ul class="itnry">
                <li class="active">
                    <img src="assets/flight-icon.png" alt="" class="img-fluid ">  
                  <p>Flight</p>
                </li>
                <li>
                  <img src="assets/hotel-icon.png" alt="" class="img-fluid">  
                  <p>Hotels</p>
                </li>
                <li>
                <img src="assets/Sightseeing-icon.png" alt="" class="img-fluid">  
                  <p>Seeings</p>
                </li>
                <li>
                   <img src="assets/meals-icon.png" alt="" class="img-fluid"> 
                  <p>Meals</p>
                </li>
                <li class="border-none">
                  <img src="assets/transfer-icon.png" alt="" class="img-fluid"> 
                  <p>Transfers</p>
                </li>
              </ul> 
              
              <div class="inclusions" >
                   <div style="margin-top: 5%;">
                <h5 >Package Inclusions:</h5>
                </div>
                <ul class="pkg-incusion">
                  <li> Hemkund Sahib aerial darshan. </li>
                  <li>Local Sight Seeing with Heli guides at all four destinations.</li>
                 <li>VIP Darshans</li>
                <li>Airport & hotel transfers at Dehradun.</li>
                  <li>Palki or Pony at Yamunotri - subject to availability. </li></ul>
               <!--  <div class="collapse" id="collapseExample6">
                  <ul class="pkg-incusion">
                    
                    
                    <li>One Half Day Local Manali Sightseeing by car </li>
                    <li>One Full Day Snow Point / Solang Valley by Car </li>
                    <li>Pick Up and Drop From Volvo Bus Stand</li>
                    <li>Delhi – Manali – Delhi Transfer by AC Luxury Volvo Bus</li>
                   
                  </ul>
                </div> -->
                <!-- <a class="read-collpse" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6"> <span>Read More</span> <i>Close </i> </a> --> </div>
              <div  style="border-bottom: solid 1px #cfcfcf;
    border-top: solid 1px #cfcfcf;
    padding: 10px 0;
    margin-top: 20px;
 
    width: 100%;">
                 <a href="https://api.whatsapp.com/send?phone=7535869999&amp;text=Chardham%20Yatra%20by%20Helicopter%205N%206D"> <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/></a>&nbsp;
                <a href="#popupp6" style="background-color: #061b30; font-size: 12px; padding: 12px 12px; color: #fff; border-radius: 4px;">Send Enquiry&nbsp;<i class="fa-solid fa-envelope"></i></a>
               
                <!--<div class="btn-detail"> <a href="#popup3"  id="bookfast"><span>Download&nbsp;<i class="fa-solid fa-circle-arrow-right"></i></span></a> </div>-->
              </div>
            </div>
          </div>
          
          
  <!--<div class="col-md-4 ptt">-->
  <!--          <div class="packages">-->
  <!--            <img width="100%" src="assets/1.jpg" alt="" class="img-fluid">  -->
              
  <!--                  <div style="margin-top: 5%;">            -->
  <!--            <h2 class="h2">DO DHAM BY HELICOPTER</h2>-->
  <!--            <p style="font-size: 14px; line-height: 22px; font-weight: 500; padding-bottom: 5px;">The Dodham Tour - Comprising of the two most popular & sacred shrines in India – Kedarnath ji & Badrinath ji, is one of our most-demanded packages.</p>-->
  <!--             <div class="price" style="color: red;"><small style="color: #000;"><b>Price</b></small> Rs. 95,000/- Per Person </div>-->
  <!--            </div>-->
  <!--            <ul class="itnry">-->
  <!--              <li class="active">-->
  <!--                  <img src="assets/flight-icon.png" alt="" class="img-fluid ">  -->
  <!--                <p>Flight</p>-->
  <!--              </li>-->
  <!--              <li>-->
  <!--                <img src="assets/hotel-icon.png" alt="" class="img-fluid">  -->
  <!--                <p>Hotels</p>-->
  <!--              </li>-->
  <!--              <li>-->
  <!--              <img src="assets/Sightseeing-icon.png" alt="" class="img-fluid">  -->
  <!--                <p>Seeings</p>-->
  <!--              </li>-->
  <!--              <li>-->
  <!--                 <img src="assets/meals-icon.png" alt="" class="img-fluid"> -->
  <!--                <p>Meals</p>-->
  <!--              </li>-->
  <!--              <li class="border-none">-->
  <!--                <img src="assets/transfer-icon.png" alt="" class="img-fluid"> -->
  <!--                <p>Transfers</p>-->
  <!--              </li>-->
  <!--            </ul> -->
              
  <!--            <div class="inclusions" >-->
  <!--                 <div style="margin-top: 5%;">-->
  <!--              <h5 >Package Inclusions:</h5>-->
  <!--              </div>-->
  <!--              <ul class="pkg-incusion">-->
  <!--                <li>Helicopter flying from Dehradun to Kedarnath ji & Badrinath ji, & back </li>-->
  <!--                <li> Shri Kedarnath ji helicopter shuttle services: Sersi – Kedar - Sersi.</li>-->
  <!--               <li>Breakfast or Lunch at Sersi/Dehradun.</li>-->
  <!--              <li>VIP Darshans</li>-->
  <!--                <li>Helicopter handling charges</li></ul>-->
  <!--             </div>-->
  <!--            <div class="price-tag">-->
  <!--               <a href="https://api.whatsapp.com/send?phone=7535869999&amp;text=EK-Dham%20Yatra%20by%20Helicopter"> <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"/></a> -->
  <!--              <a href="#popupp3" style="background-color: #061b30; font-size: 12px; padding: 12px 12px; color: #fff; border-radius: 4px;">Send Enquiry&nbsp;<i class="fa-solid fa-envelope"></i></a>-->
               
                
  <!--            </div>-->
  <!--          </div>-->
  <!--        </div>-->
            
                    
          
          
                </div>
               </div> 
                </div>
                
                </section>
  

  <section class="place-section sec-pad">
            <div class="anim-icon">
                <div class="icon anim-icon-1" style="background-image: url(assets/images/icons/anim-icon-1.png);"></div>
                <div class="icon anim-icon-2" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                <!-- <div class="icon anim-icon-3" style="background-image: url(assets/images/shape/shape-6.png);"></div> -->
            </div>
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 title-column" style="width:100%;">
                        <div class="sec-title">

<?php
$ret=mysqli_query($con,"select * from helicoptertitle ");
while ($row=mysqli_fetch_array($ret)) 
{
?>                             <p>  </p>
                            <h2><?php echo $row['title2'] ?></h2>
                        </div>
                        <div class="text">
                            <?php echo $row['description'] ?>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 place-block" style="width:25%;">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="image/helicoptertitle/<?php echo $row['image1'] ?>" alt=""></figure>
                                <div class="text">
                                    <h3><a href="#"><?php echo $row['place1'] ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block" style="width:25%;">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="image/helicoptertitle/<?php echo $row['image2'] ?>" alt=""></figure>
                                <div class="text">
                                    <h3><a href="#"><?php echo $row['place2'] ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block"style="width:25%;">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="image/helicoptertitle/<?php echo $row['image2'] ?>" alt=""></figure>
                                <div class="text">
                                    <h3><a href="#"><?php echo $row['place2'] ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-block" style="width:25%;">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="image/helicoptertitle/<?php echo $row['image2'] ?>" alt=""></figure>
                                <div class="text">
                                    <h3><a href="#"><?php echo $row['place2'] ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 link-column" style="width:100%;">
                        <div class="link-box centred">
                            <h3><?php echo $row['title2'] ?></h3>
                            <a href="#popupp3" class="theme-btn" style="background:#95825E;">Book Your Package Now</a>
                        </div>
                    </div>
                </div>
                                        <?php } ?>

            </div>
        </section>
        <!-- place-section end -->
        
        
         
        
        <br><Br>
        
        
        
        
        
        
        
        
        

 <section id="gallery">
  <div class="container">
        <div class="sec-title centred">
                    
                    <h2>Our Gallery</h2>
                </div>
    <div id="image-gallery">
        
      <div class="row">
        <?php
$ret=mysqli_query($con,"select * from photogallery ");
while ($row=mysqli_fetch_array($ret)) 
{
?>      
<div class="col-lg-2 col-md-6 col-sm-6 col-6 image">
          <div class="img-wrapper">
            <a href="image/photogallery/<?php echo $row['image']; ?>"><img src="image/photogallery/<?php echo $row['image']; ?>" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <?php } ?>
      </div><!-- End row -->
    </div><!-- End image gallery -->
  </div><!-- End container --> 
</section>





   <section class="testimonial-section sec-pad centred">
            <div class="container">
                <div class="sec-title centred">
                            <?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
?>      

                    <p><?php echo $row['title']; ?></p>
<?php } ?>
                    <h2>Yatra Post</h2>
                </div>
                <div class="four-item-carousel owl-carousel owl-theme owl-nav-none">
                   
                   <?php
$ret=mysqli_query($con,"select * from yatrapost ");
while ($row=mysqli_fetch_array($ret)) 
{
?>      
         
                    <div class="testimonial-block-one">
                        <img src="image/yatrapost/<?php echo $row['image']; ?>">
                    </div>
<?php } ?>
                     
                </div>
            </div>
        </section>



 
  <!-- deals-section -->
        <section class="deals-section" style="background-image: url(image/deals-1.jpg);">
            <div class="container">
                <div class="content_block_2">
                    <div class="content-box">

 <?php
$ret=mysqli_query($con,"select * from admin ");
while ($row=mysqli_fetch_array($ret)) 
{
?>      
                        <h3><?php echo $row['title']; ?></h3>
                        
                        <p><?php echo $row['description']; ?></p>
                    <?php } ?>
                        <a href="#popupp3" class="theme-btn" style="background:#95825E;">Enquiry Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- deals-section end -->
        


        <!-- testimonial-section -->
        <section class="testimonial-section sec-pad centred">
            <div class="container">
                <div class="sec-title centred">
                    <p>Review & Testimonials</p>
                    <h2>Client Support and Feedback</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
     <?php
$ret=mysqli_query($con,"select * from helicoptertestinomials ");
while ($row=mysqli_fetch_array($ret)) 
{
?>      
               
                    
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <ul class="rating-box clearfix">
                                <li><i class="icon-Star"></i></li>
                                <li><i class="icon-Star"></i></li>
                                <li><i class="icon-Star"></i></li>
                                <li><i class="icon-Star"></i></li>
                                <li><i class="icon-Star"></i></li>
                            </ul>
                            <div class="text">
                                <!--<div class="icon" style="background-image: url(assets/images/icons/quote-1.png);"></div>-->
                                <p>"<?php echo $row['message']; ?>”</p>
                            </div>
                            <div class="author-box">
                                <h4><?php echo $row['name']; ?></h4>
                                <span class="designation"><?php echo $row['place']; ?></span>
                                <figure class="thumb-box"><img src="image/helicoptertestinomials/<?php echo $row['image']; ?>" alt=""></figure>
                            </div>
                        </div>
                    </div>

<?php } ?>
                    
                    
                    
                    
                      
                    
                     
                     
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <style>
              #gallery {
     padding-top: 0px;
}
 @media screen and (min-width: 991px) {
     #gallery {
         padding: 0px 30px 0 30px;
    }
}
 .img-wrapper {
     position: relative;
     margin-top: 15px;
}
 .img-wrapper img {
     width: 100%;
}
 .img-overlay {
     background: rgba(0, 0, 0, 0.7);
     width: 100%;
     height: 100%;
     position: absolute;
     top: 0;
     left: 0;
     display: flex;
     justify-content: center;
     align-items: center;
     opacity: 0;
}
 .img-overlay i {
     color: #fff;
     /*font-size: 3em;*/
}
 #overlay {
     background: rgba(0, 0, 0, 0.7);
     width: 100%;
     height: 100%;
     position: fixed;
     top: 0;
     left: 0;
     display: flex;
     justify-content: center;
     align-items: center;
     z-index: 999;
     -webkit-user-select: none;
     -moz-user-select: none;
     -ms-user-select: none;
     user-select: none;
}
 #overlay img {
     margin: 0;
     width: 80%;
     height: auto;
     object-fit: contain;
     padding: 5%;
}
 @media screen and (min-width: 768px) {
     #overlay img {
         width: 60%;
    }
}
 @media screen and (min-width: 1200px) {
     #overlay img {
         width: 50%;
    }
}
 #nextButton {
     color: #fff;
     font-size: 2em;
     transition: opacity 0.8s;
}
 #nextButton:hover {
     opacity: 0.7;
}
 @media screen and (min-width: 768px) {
     #nextButton {
         font-size: 3em;
    }
}
 #prevButton {
     color: #fff;
     font-size: 2em;
     transition: opacity 0.8s;
}
 #prevButton:hover {
     opacity: 0.7;
}
 @media screen and (min-width: 768px) {
     #prevButton {
         font-size: 3em;
    }
}
 #exitButton {
     color: #fff;
     font-size: 2em;
     transition: opacity 0.8s;
     position: absolute;
     top: 15px;
     right: 15px;
}
 #exitButton:hover {
     opacity: 0.7;
}
 @media screen and (min-width: 768px) {
     #exitButton {
         font-size: 3em;
    }
}
        </style>
 
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
 

 
<?php include ('footer.php'); ?>        
        
        
        
        
        
        
        <!--------------kedarnath enquiry--------------------------->
  <div id="popupp1" class="popup-container" style="width: 100%;">
  <div class="popup-content">
    <a href="#" class="close">&times;</a>
    <div class="tourpackbg1 dest-overview" >
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
               <form role="form" action="#" method="post" class="bv-form" >
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  
                 
                           <input type="hidden" class="effect-9" name="package_name" id="name" value="Kedarnath Yatra by Helicopter" readonly required>
                        
                  
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >
                        </div>
                     </div>
                  </div>
                  <!--<div class="form-inn">-->
                  <!--   <div class="form-group has-feedback">-->
                  <!--      <div class="input-group">-->
                  <!--         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
                  <!--         <input name="child" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="text-center"> 
                  <button type="submit" name="form1" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
  </div>
</div>

        
        
        
             <!--------------Badrinath enquiry--------------------------->
  <div id="popupp2" class="popup-container" style="width: 100%;">
  <div class="popup-content">
    <a href="#" class="close">&times;</a>
    <div class="tourpackbg1 dest-overview" >
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
               <form role="form" action="#" method="post" class="bv-form" >
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  
                 
                           <input type="hidden" class="effect-9" name="package_name" id="name" value="Badrinath Yatra by Helicopter" readonly required>
                        
                  
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >
                        </div>
                     </div>
                  </div>
                  <!--<div class="form-inn">-->
                  <!--   <div class="form-group has-feedback">-->
                  <!--      <div class="input-group">-->
                  <!--         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
                  <!--         <input name="child" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="text-center"> 
                  <button type="submit" name="form1" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
  </div>
</div>




 
             <!--------------Badrinath enquiry--------------------------->
  <div id="popupp3" class="popup-container" style="width: 100%;">
  <div class="popup-content">
    <a href="#" class="close">&times;</a>
    <div class="tourpackbg1 dest-overview" >
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
               <form role="form" action="#" method="post" class="bv-form" >
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  
                  
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <select name="helicopterid" class="effect-9" required style="width: 100%;">
<option value="">Select Tour</option> 
<?php $query=mysqli_query($con,"select * from helicopter");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
<?php } ?>
</select>

                        </div>
                     </div>
                  </div>

                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input name="numberofperson" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >
                        </div>
                     </div>
                  </div>
                  <!--<div class="form-inn">-->
                  <!--   <div class="form-group has-feedback">-->
                  <!--      <div class="input-group">-->
                  <!--         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
                  <!--         <input name="child" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="text-center"> 
                  <button type="submit" name="helicoptorform" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
  </div>
</div>

        
        
         
             <!--------------dodham 2n/3d enquiry--------------------------->
  <div id="popupp4" class="popup-container" style="width: 100%;">
  <div class="popup-content">
    <a href="#" class="close">&times;</a>
    <div class="tourpackbg1 dest-overview" >
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
               <form role="form" action="#" method="post" class="bv-form" >
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  
                 
                           <input type="hidden" class="effect-9" name="package_name" id="name" value="Dodham Yatra by Helicopter (2N/3D)" readonly required>
                        
                  
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >
                        </div>
                     </div>
                  </div>
                  <!--<div class="form-inn">-->
                  <!--   <div class="form-group has-feedback">-->
                  <!--      <div class="input-group">-->
                  <!--         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
                  <!--         <input name="child" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="text-center"> 
                  <button type="submit" name="form1" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
  </div>
</div>




 
             <!--------------dodham 3n/4d enquiry--------------------------->
  <div id="popupp5" class="popup-container" style="width: 100%;">
  <div class="popup-content">
    <a href="#" class="close">&times;</a>
    <div class="tourpackbg1 dest-overview" >
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
               <form role="form" action="#" method="post" class="bv-form" >
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  
                 
                           <input type="hidden" class="effect-9" name="package_name" id="name" value="Dodham Yatra by Helicopter (3N/4D)" readonly required>
                        
                  
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >
                        </div>
                     </div>
                  </div>
                  <!--<div class="form-inn">-->
                  <!--   <div class="form-group has-feedback">-->
                  <!--      <div class="input-group">-->
                  <!--         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
                  <!--         <input name="child" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="text-center"> 
                  <button type="submit" name="form1" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
  </div>
</div>





  


        
        
        
             <!--------------chardham enquiry--------------------------->
  <div id="popupp6" class="popup-container" style="width: 100%;">
  <div class="popup-content">
    <a href="#" class="close">&times;</a>
    <div class="tourpackbg1 dest-overview" >
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
               <form role="form" action="#" method="post" class="bv-form" >
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  
                 
                           <input type="hidden" class="effect-9" name="package_name" id="name" value="Chardham Yatra by Helicopter" readonly required>
                        
                  
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >
                        </div>
                     </div>
                  </div>
                  <!--<div class="form-inn">-->
                  <!--   <div class="form-group has-feedback">-->
                  <!--      <div class="input-group">-->
                  <!--         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
                  <!--         <input name="child" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="text-center"> 
                  <button type="submit" name="form1" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
  </div>
</div>

        

  <div id="popup1" class="popup-container" style="width: 100%;">
  <div class="popup-content">
    <a href="#" class="close">&times;</a>
    <div class="tourpackbg1 dest-overview" >
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
               <form role="form" action="#" method="post" class="bv-form" >
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-user"></span></div>
                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >
                        </div>
                     </div>
                  </div>
                   
                  <div class="text-center"> 
                  <button type="submit" name="form1" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
  </div>
</div>















<!--------------popup 2--------------------------->
<!--  <div id="popup2" class="popup-container" style="width: 100%;">-->
<!--  <div class="popup-content">-->
<!--    <a href="#" class="close">&times;</a>-->
<!--    <div class="tourpackbg1 dest-overview" >-->
<!--            <div class="tourpack-filterbx form-querys">-->
<!--               <h3 style=" margin-top: 10px;">Enquiry Now</h3>-->
<!--               <form role="form" action="#" method="post" class="bv-form" >-->
<!--                  <input type="hidden"  name="secondForm" value="secondForm"><br>-->
<!--                   <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
<!--                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
<!--                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
                  
                 
<!--                           <input type="hidden" class="effect-9" name="package_name" id="name" value="Ekdham Yatra by Helicopter" readonly required>-->
                        
                  
<!--                  <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>-->
<!--                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>-->
<!--                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                   <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
<!--                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
                   
<!--                  <div class="text-center"> -->
<!--                  <button type="submit" name="form1" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>-->
<!--              </div>-->
<!--               </form>-->
<!--            </div>-->
<!--         </div>-->
<!--  </div>-->
<!--</div>-->








<!--------------popup 3--------------------------->
<!--  <div id="popup3" class="popup-container" style="width: 100%;">-->
<!--  <div class="popup-content">-->
<!--    <a href="#" class="close">&times;</a>-->
<!--    <div class="tourpackbg1 dest-overview" >-->
<!--            <div class="tourpack-filterbx form-querys">-->
<!--               <h3 style=" margin-top: 10px;">Enquiry Now</h3>-->
<!--               <form role="form" action="#" method="post" class="bv-form" >-->
<!--                  <input type="hidden"  name="secondForm" value="secondForm"><br>-->
<!--                   <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
<!--                           <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
<!--                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
                  
                 
<!--                           <input type="hidden" class="effect-9" name="package_name" id="name" value="Chardham Yatra by Helicopter" readonly required>-->
                        
                  
<!--                  <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>-->
<!--                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class="fa fa-phone"></span></div>-->
<!--                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                   <div class="form-inn">-->
<!--                     <div class="form-group has-feedback">-->
<!--                        <div class="input-group">-->
<!--                           <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
<!--                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
                 
<!--                  <div class="text-center"> -->
<!--                  <button type="submit" name="form1" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>-->
<!--              </div>-->
<!--               </form>-->
<!--            </div>-->
<!--         </div>-->
<!--  </div>-->
<!--</div>-->



<!--------------popup 4--------------------------->
  <!--<div id="popup4" class="popup-container" style="width: 100%;">-->
  <!--<div class="popup-content">-->
  <!--  <a href="#" class="close">&times;</a>-->
  <!--  <div class="tourpackbg1 dest-overview" >-->
  <!--          <div class="tourpack-filterbx form-querys">-->
  <!--             <h3 style=" margin-top: 10px;">Enquiry Now</h3>-->
  <!--             <form role="form" action="#" method="post" class="bv-form" >-->
  <!--                <input type="hidden"  name="secondForm" value="secondForm"><br>-->
  <!--                 <div class="form-inn">-->
  <!--                   <div class="form-group has-feedback">-->
  <!--                      <div class="input-group">-->
  <!--                         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
  <!--                         <input type="date" class="effect-9" name="date" id="name" placeholder="Enter your name" required>-->
  <!--                      </div>-->
  <!--                   </div>-->
  <!--                </div>-->
  <!--                <div class="form-inn">-->
  <!--                   <div class="form-group has-feedback">-->
  <!--                      <div class="input-group">-->
  <!--                         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
  <!--                         <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>-->
  <!--                      </div>-->
  <!--                   </div>-->
  <!--                </div>-->
                  
                 
  <!--                         <input type="hidden" class="effect-9" name="package_name" id="name" value="Dodham Yatra by Helicopter" readonly required>-->
                        
                  
  <!--                <div class="form-inn">-->
  <!--                   <div class="form-group has-feedback">-->
  <!--                      <div class="input-group">-->
  <!--                         <div class="input-group-addon"><span class=" fa fa-envelope"></span></div>-->
  <!--                         <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >-->
  <!--                      </div>-->
  <!--                   </div>-->
  <!--                </div>-->
  <!--                <div class="form-inn">-->
  <!--                   <div class="form-group has-feedback">-->
  <!--                      <div class="input-group">-->
  <!--                         <div class="input-group-addon"><span class="fa fa-phone"></span></div>-->
  <!--                         <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >-->
  <!--                      </div>-->
  <!--                   </div>-->
  <!--                </div>-->
  <!--                 <div class="form-inn">-->
  <!--                   <div class="form-group has-feedback">-->
  <!--                      <div class="input-group">-->
  <!--                         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
  <!--                         <input name="adult" id="phone" type="phone" class="effect-9" placeholder="No. of Person" required >-->
  <!--                      </div>-->
  <!--                   </div>-->
  <!--                </div>-->
                  <!--<div class="form-inn">-->
                  <!--   <div class="form-group has-feedback">-->
                  <!--      <div class="input-group">-->
                  <!--         <div class="input-group-addon"><span class="fa fa-user"></span></div>-->
                  <!--         <input name="child" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
<!--                  <div class="text-center"> -->
<!--                  <button type="submit" name="form1" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>-->
<!--              </div>-->
<!--               </form>-->
<!--            </div>-->
<!--         </div>-->
<!--  </div>-->
<!--</div>-->



<style type="text/css">
    .popup-link{
  display:flex;
  flex-wrap:wrap;
}

.popup-link a{
    background: #333;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    font-size:17px;
    cursor:pointer;
    margin:20px;
    text-decoration:none;
}

.popup-container {
    visibility: hidden;
    opacity: 0;
    transition: all 0.3s ease-in-out;
    transform: scale(1.3);
    position: fixed;
    z-index: 1;
    left: 0;
    top:  25px;
    width: 100%;
    height: 100%;
   
    display: flex;
    align-items: center;
}
.popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 10px;
    border: 1px solid #888;
    width: 40%;
}

@media only screen and (max-width: 768px) {
  .popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 10px;
    border: 1px solid #888;
    width: 90%;
}
}
.popup-content p{
    font-size: 17px;
    padding: 10px;
    line-height: 20px;
}
.popup-content a.close{
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    background: none;
    padding: 0;
    margin: 0;
    text-decoration:none;
}

.popup-content a.close:hover{
  color:#333;
}

.popup-content span:hover,
.popup-content span:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.popup-container:target{
  visibility: visible;
  opacity: 1;
  transform: scale(1);
}

.popup-container h3{
  margin:10px;
}
</style>

        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>
<style>
      .button-call{
            display:block;
            position:fixed;
            bottom:0;
       color:#fff;
     text-align:center;
            z-index:99;
            width:100%;
        }
</style>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.fancybox.js"></script>

    <script src="js/script.js"></script>
<script>
    // Gallery image hover
$( ".img-wrapper" ).hover(
  function() {
    $(this).find(".img-overlay").animate({opacity: 1}, 600);
  }, function() {
    $(this).find(".img-overlay").animate({opacity: 0}, 600);
  }
);

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function(event) {
  // Prevents default behavior
  event.preventDefault();
  // Adds href attribute to variable
  var imageLocation = $(this).prev().attr("href");
  // Add the image src to $image
  $image.attr("src", imageLocation);
  // Fade in the overlay
  $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function() {
  // Fade out the overlay
  $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  // All of the images in the gallery
  var $images = $("#image-gallery img");
  // If there is a next image
  if ($nextImg.length > 0) { 
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    // Otherwise fade in the first image
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  // Fade in the next image
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function() {
  // Fade out the overlay
  $("#overlay").fadeOut("slow");
});
</script>


<script>
   class readMore {
    constructor() {
        this.content = '.readmore__content';
        this.buttonToggle = '.readmore__toggle';
    }

    bootstrap() {
        this.setNodes();
        this.init();
        this.addEventListeners();
    }

    setNodes() {
        this.nodes = {
            contentToggle: document.querySelector(this.content)
        };

        this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(this.buttonToggle);
    }

    init() {
        const { contentToggle } = this.nodes;

        this.stateContent = contentToggle.innerHTML;

        contentToggle.innerHTML = `${this.stateContent.substring(0, 500)}...`;
    }

    addEventListeners() {
        this.buttonToggle.addEventListener('click', this.onClick.bind(this))
    }

    onClick(event) {
        const targetEvent = event.currentTarget;
        const { contentToggle } = this.nodes

        if (targetEvent.getAttribute('aria-checked') === 'true') {
            targetEvent.setAttribute('aria-checked', 'false')
            contentToggle.innerHTML = this.stateContent;
            this.buttonToggle.innerHTML = 'Show less'

        } else {
            targetEvent.setAttribute('aria-checked', 'true')
            contentToggle.innerHTML = `${this.stateContent.substring(0, 500)}...`
            this.buttonToggle.innerHTML = 'Show more'
        }
    }
}


const initReadMore = new readMore();
initReadMore.bootstrap() 
</script>





</body><!-- End of .page_wrapper -->

 
</html>
