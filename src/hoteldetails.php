<?php
session_start();
error_reporting(0);
include('config.php');
$id=$_GET['id'];
$ret1=mysqli_query($con,"select * from hotel where id='$id' ");
$row1=mysqli_fetch_array($ret1);

$nam=$row1['name'];
$des=$row1['description'];

?>

<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body style="background: #fff">

<?php include('header.php'); ?>

       

 
     
    <link rel="stylesheet" type="text/css" href="https://abdholidays.com/css/header2.css">
  
    <!-- CSS COLOR -->
    <link id="colorreplace" rel="stylesheet" type="text/css" href="https://abdholidays.com/css/colors/blue6.css">
    <link rel="stylesheet" href="https://abdholidays.com/css/swiper.css" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" integrity="sha512-YTuMx+CIxXa1l+j5aDPm98KFbVcYFNhlr2Auha3pwjHCF1lLbY9/ITQQlsUzdM1scW45kHC5KNib4mNa1IFvJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="https://abdholidays.com/hotel/assets/css/font-awesome-all.css" rel="stylesheet">
<link href="https://abdholidays.com/hotel/assets/css/flaticon.css" rel="stylesheet">
<link href="https://abdholidays.com/hotel/assets/css/owl.css" rel="stylesheet">
<!--<link href="https://abdholidays.com/hotel/assets/css/bootstrap.css" rel="stylesheet">-->
<link href="https://abdholidays.com/hotel/assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="https://abdholidays.com/hotel/assets/css/animate.css" rel="stylesheet">
<link href="https://abdholidays.com/hotel/assets/css/nice-select.css" rel="stylesheet">
<link href="https://abdholidays.com/hotel/assets/css/jquery-ui.css" rel="stylesheet">
<link href="https://abdholidays.com/hotel/assets/css/color.css" rel="stylesheet">
<link href="https://abdholidays.com/hotel/assets/css/style8.css" rel="stylesheet">
<link href="https://abdholidays.com/hotel/assets/css/responsive.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://abdholidays.com/style24.css">
 

<style type="text/css">
      .awe-navigation {
    position: relative;
    text-align: right;
    padding-right: 0;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    line-height: 74px;
}
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
            background:#941D21;
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
    <style>
           .uqmcd{
           
               display: inline-block;
    background: none;
    border: 1px solid #9E7D38;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    white-space: nowrap;
    text-transform: uppercase;
    cursor: pointer;
    line-height: normal;
    padding: 8px 10px;
    text-align: center;
    font-size: 13px;
    color: #666;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
           }
            .uqmcd:hover{
               background: #9E7D38;
               color:#fff;
               cursor:pointer;
           
           }
           
           .uqmcd1{
           
               display: none;
   
    
           }
     
            .uqmcd23{
           
               display: inline-block;
    background: none;
    border: 1px solid #9E7D38;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    white-space: nowrap;
    text-transform: uppercase;
    cursor: pointer;
    line-height: normal;
      padding: 4px 5px;
    text-align: center;
    font-size: 12px;
    color: #666;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    
           }
            .uqmcd23:hover{
               background: #9E7D38;
               color:#fff;
               cursor:pointer;
           
           }
               .iwaz5{
        background:#9E7D38; color:#fff; font-size:14px; padding:5px 8px; border-radius:2px;border:2px solid #9E7D38;
    }
    .iwaz5:hover{
        background:#fff; color:#9E7D38; font-size:14px; padding:5px 8px; border-radius:2px;
        border:2px solid #9E7D38;
    }
    
    @media only screen and (max-width:991px){
           .uqmcd1{
      
               display: inline-block;
    background: none;
    border: 1px solid #9E7D38;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    white-space: nowrap;
    text-transform: uppercase;
    cursor: pointer;
    line-height: normal;
      padding: 4px 5px;
    text-align: center;
    font-size: 12px;
    color: #666;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    
           }
            .uqmcd1:hover{
               background: #9E7D38;
               color:#fff;
               cursor:pointer;
           
           }
          .uqmcd23{
           
               display:none;
  
           }
            
    }
    
       </style>
 
  
  
</head>
<body>
    
    <div id="page-wrap">
        

       <!-- The Modal -->
       <div id="myModal12" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <span class="close34"><i class="fa fa-close"></i></span>
    <div class="container-fluid">
      
      <div class="row">
          <div class="col-md-5 leru">
              <h5 class="yema">How it Works?</h5>
              <ol class="rmqo">
                  <li> Tell us details of your holiday plan.</li>
                  <li> Get multiple quotes from expert agents, compare & customize further.</li>
                  <li> Select & book best deal.</li>
              </ol>
              <div class="col-md-12   pl-0 pr-0 twms">
              <div class="col-md-4 col-xs-6 text-center">
                  <p class="m-0"><i class="fa fa-briefcase fs-30"></i></p>
                
                  <p>8+ Years Experience</p>
              </div>
              <div class="col-md-4 col-xs-6 text-center">
                <p class="m-0"><i class="fa fa-globe fs-30"></i></p>
                 
                <p>100+ Destinations</p>
            </div>
            <div class="col-md-4 col-xs-6 text-center">
                <p class="m-0"><i class="fa fa-check-square fs-30"></i></p>
                
                <p>Best Price Guaranteed</p>
            </div>
        </div>
        <div class="col-md-12 text-center mt-21">
            <p class="m-0"><i class="fa fa-phone fs-20"></i> Call Us for details</p>
            <h4 class="m-0 uqmd" style="font-size:16px;">+91 7535869899,+91 9520971415</h4>
        </div>
        <div class="col-md-4 mt-21">
            <img src="images/uttarakhand-tourism.png" width="100%" alt="Uttarakhand Tourism">
        </div>
        <div class="col-md-4 mt-21">
            <img src="images/iso.png" width="100%" alt="ISO">
        </div>
        
        <div class="col-md-4 mt-21">
            <img src="images/toau.png" width="100%" alt="Tour Operator Association Uttarakhand">
        </div>
        
          </div>
          <div class="col-md-7">
            <div class="tqmfa">
                <p class="text-center"><img src="https://abdholidays.com/admin/uploads/up/admin/uploads/up/logo-1608534208.png" alt="ABD HOLIDAYS LOGO" class="form-is"></p>
                <h5 class="yema">Where do you want to go?</h5>
                <form method="post" action="#">
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                             <div class="col-md-6">
                                <label>Mobile</label>
                                <input type="text" class="form-control" placeholder="Mobile" name="phone">
                            </div>
                            </div>
                            <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                             <div class="col-md-6">
                                <label>From</label>
                                <input type="text" class="form-control" placeholder="From Place" name="from_place">
                            </div>
                            </div>
                            <div class="row mb-2">
                            <div class="col-md-6">
                                    
                                <label>Where?</label>
                                <input type="text" class="form-control" placeholder="Place Name" name="where_place">
                          
                            </div>
                            <div class="col-md-6">
                             <label>Departure Date</label>
                                <input type="text" class="awe-calendar form-control fwm" value="Date" name="d_date">
                            </div>
                            
                        </div>
                        
                        <div class="row mb-2 mt-2">
                          <div class="col-md-1"></div>
                            <div class="col-md-10 text-center">
                               <button class="btn button-j5" type="submit" name="form1">Plan My holidays <i class="fa fa-angle-double-right"></i></button>
                           
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
        <!-- banner-section -->
        <?php
$ret=mysqli_query($con,"select * from hotelgallery where hotelid='$id' limit 1 ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

        <section class="banner-section ojj" style="background-image: url(image/hotelgallery/<?php echo $row['image'] ?>); background-position:center bottom; ">
            <div class="pattern-layer" style="background-image: url(image/shape-1.png);"></div>
<?php } ?>
            <div class="auto-container">
            </div>
        </section>
        <!-- banner-section end -->
        
        
      
       

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


<div class="container oj" style="margin-top:50px;">
            <div class="row">
                <img src="hotel_img/man.jpg" alt="Company Profile">
            </div>
        </div>

   <!-- feature-section -->
        <section class="feature-section bg-color-1 sec-pad ">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-12 left-pkg maine-pkg">
                      <div class="sec-title text-center">
                      <span class="h"> Welcome to <?php echo $nam; ?> </span>
                    </div>
                     <div class="row">
                        <div class="col-md-12 col-xs-12 text-center mt-3">
                            <p style="font-size: 16px; text-align: justify;"><?php echo $des; ?></p>
                        </div>
                    </div> 
                 </div> 
                  </div> 
                   </div> 
                   </section>





        <!-- feature-section -->
        <section class="feature-section bg-color-1 sec-pad  sec-hide">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-12 col-xs-12">
                            <div class="sec-title text-center">
                      <span class="h">Accommodation</span>
                    </div>
                    </div>
                    <div class="col-md-9 col-lg-9 left-pkg ">
                   
                   <?php
$ret=mysqli_query($con,"select * from hotelroom where hotelid='$id' ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

                    <div class="row">
                         <div class="tp-head-box">
    <div class="tp-top-box">
        <div class="tp-img"> <img src="image/hotelroom/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>" > </div>
        <div class="tp-info">
            <div class="tp-info-first">
                <div class="tp-info-left mt-5">
                    <h3><?php echo $row['name'] ?></h3><br>
                    <?php 
                            echo str_replace('<p','<p style="text-align: justify;"',$row['description']);?>
  <div class="tp-price-box mt-2"><span class="tp-discount" ><i style="color:#990000;" class="fa-solid fa-indian-rupee-sign" ></i> <?php echo $row['price'] ?> + Tax </span></div>
 </div>
                <div class="tp-info-right bg-bss" style="margin-top: 50px;"> 
                    <a class="enquiryBtn"   href="#popup2">Book Now <i class="fa-solid fa-angle-double-right" aria-hidden="true"></i></a>
                    <a class="enquiryBtn"   href="#popup2">View Detail <i class="fa-solid fa-angle-double-right" aria-hidden="true"></i></a>
                 </div>
                <div class="tp-bot-box" style="margin-top: 40px;">
                    <div class="tp-list">
                        <ul>
                            <li><i  style="color:#990000;"class="fa-solid fa-fan"></i> AC</li>
                            <li><i  style="color:#990000;"class="fa-solid fa-wifi"></i> Wifi</li>
                            <li><i  style="color:#990000;"class="fa-solid fa-cutlery" aria-hidden="true"></i>Meals</li>
                            <li><i  style="color:#990000;"class="fa-solid fa-street-view" aria-hidden="true"></i>Sightseeing</li>
                            <li><i  style="color:#990000;"class="fa-solid fa-tv"></i> TV</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br/>
<?php } ?>

                    
                                  
                    
                                  

          
                    </div>
                    <div class="col-md-3 col-lg-3">
                <div class="tourpackbg1 dest-overview">
            <div class="tourpack-filterbx form-querys">
               <h3>Enquiry Now</h3>
              <form role="form"  method="post"  class="bv-form" enctype='multipart/form-data'>
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa-solid fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                    <div class="form-inn">
                     <div class="form-group has-feedback">
                                  <label>Checkin</label>
                        <div class="input-group">
                   
                           <div class="input-group-addon"><span class="fa-solid fa-calender-days"></span></div>
                           <input type="date" class="effect-9" name="checkindate" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                    <div class="form-inn">
                     <div class="form-group has-feedback">
                                <label>Checkout</label>
                        <div class="input-group">
                       
                           <div class="input-group-addon"><span class="fa-soild fa-calendar-days"></span></div>
                           <input type="date" class="effect-9" name="checkoutdate" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="NO. OF ADULTS" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                           <input name="kid" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >
                        </div>
                     </div>
                  </div>
<div class="form-inn">
                     <div class="form-group has-feedback">
                                               <label>Room Category</label>
                        <div class="input-group">
      
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                                                      <select name="hotelroomcategoryid" class="effect-9" required style="width: 100%;">
<option value="">Select Room</option> 
<?php $query=mysqli_query($con,"select * from hotelroomcategory");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['category'];?></option>
<?php } ?>
</select>

                        
                        
                        </div>
                     </div>
                  </div>
                 <div class="form-inn">
                     <div class="form-group has-feedback">
                                               <label>Hotel</label>
                        <div class="input-group">
      
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                                                      <select name="hotelid" class="effect-9" required style="width: 100%;">
<option value="">Select Hotel</option> 
<?php $query=mysqli_query($con,"select * from hotel");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
<?php } ?>
</select>

                        
                        
                        </div>
                     </div>
                  </div>
                 
                  <div class="text-center"> 
                  <button type="submit" name="hotelform" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->


  






  <section class="sec-hide2" style="margin-top:  100px;">

                    <div class="auto-container-fluid olp-padi">
                        <div class="row">
                       <div class="col-md-12" style="margin-top: -80px;">
                            <div class="  text-center" >
                      <span class="h2" style=" color: #061b30;">Accommodation</span>
                    </div>
                        <br>
 
                           <?php
$ret=mysqli_query($con,"select * from hotelroom where hotelid='$id' ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 
          
          <div class="col-md-4 ptt">.
            <div class="packages">
              <img width="100%" src="image/hotelroom/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>" class="img-fluid">  
              
                    <div style="margin-top: 5%;">            
              <h2   style="color:#000;"><?php echo $row['name'] ?></h2>
             <?php 
                            echo str_replace('<p','<p style="text-align: justify;"',$row['description']);?>

               <div class="price" style="color: red;"><small><b style="color: #000;">Price</b></small> <i style="color:#990000;" class="fa-solid fa-indian-rupee-sign" ></i> <?php echo $row['price'] ?> + TAX </div>
              
              </div>
              <ul class="itnry">
                <li>
                  <i class="fa-solid fa-fan" style="font-size:24px;"></i>  
                  <p>AC</p>
                </li>
                <li>
                  <i class="fa-solid fa-wifi" style="font-size:24px;"></i>  
                  <p>Wifi</p>
                </li>
                <li>
               <i class="fa fa-cutlery" style="font-size:24px;"></i>    
                  <p>Meals</p>
                </li>
                <li>
                   <i class="fa fa-street-view" style="font-size:24px;"></i>  
                  <p>Seeings</p>
                </li>
                <li class="border-none">
                 <i class="fa-solid fa-tv" style="font-size:24px;"></i>  
                  <p>TV</p>
                </li>
              </ul> 
              

              </div>
            </div>

        <?php } ?>
          </div>
          
         
          
          
                </div>
               </div> 
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
$ret=mysqli_query($con,"select * from hotelgallery where hotelid='$id' ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 
        <div class="col-lg-3 col-md-6 col-sm-6 col-6 image">
          <div class="img-wrapper">
            <a href="image/hotelgallery/<?php echo $row['image'] ?>"><img src="image/hotelgallery/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus" aria-hidden="true"></i>
            </div>
          </div>
        </div>
       <?php } ?>
        
      </div><!-- End row -->
    </div><!-- End image gallery -->
  </div><!-- End container --> 
</section>




 

 
  <!-- deals-section -->
          <?php
$ret=mysqli_query($con,"select * from hotelgallery where hotelid='$id' limit 1 ");
while ($row=mysqli_fetch_array($ret)) 
{
?> 

        <section class="deals-section" style="background-image: url(image/hotelgallery/<?php echo $row['image'] ?>); margin-top:70px;">
        <?php } ?>
            <div class="auto-container">
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
                        <a href="#popup2" class="theme-btn">Enquiry Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- deals-section end -->
        


       
 
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
	 height:200px;
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
@media only screen and (max-width:991px){
     .img-wrapper img {
	 width: 100%;
	 height:150px;
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


<!--------------popup 2--------------------------->
  <div id="popup2" class="popup-container" style="width: 100%;">
  <div class="popup-content">
    <a href="#" class="close">&times;</a>
    <div class="tourpackbg1 dest-overview" >
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
 <form role="form"  method="post"  class="bv-form" enctype='multipart/form-data'>
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                         <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                         <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                    </div>
                </div>
                 
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa-solid fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                 
                 <div class="row">
                    <div class="col-md-6 col-xs-6">
                           <div class="form-inn">
                     <div class="form-group has-feedback">
                                  <label>Checkin</label>
                        <div class="input-group">
                   
                           <div class="input-group-addon"><span class="fa-solid fa-calendar-days"></span></div>
                           <input type="date" class="effect-9" name="checkindate" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                            <div class="form-inn">
                     <div class="form-group has-feedback">
                                <label>Checkout</label>
                        <div class="input-group">
                       
                           <div class="input-group-addon"><span class="fa-solid fa-calendar-days"></span></div>
                           <input type="date" class="effect-9" name="checkoutdate" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                    </div>
                </div>
                 
                 
                      <div class="row">
                    <div class="col-md-6 col-xs-6">
                            
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="NO. OF ADULTS" required >
                        </div>
                     </div>
                  </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                              <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                           <input name="kid" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >
                        </div>
                     </div>
                  </div>
                    </div>
                </div>
                 
                
                
                     <div class="form-inn">
                     <div class="form-group has-feedback">
                                               <label>Room Category</label>
                        <div class="input-group">
      
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                                                      <select name="hotelroomcategoryid" class="effect-9" required style="width: 100%;">
<option value="">Select Room</option> 
<?php $query=mysqli_query($con,"select * from hotelroomcategory");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['category'];?></option>
<?php } ?>
</select>

                        
                        
                        </div>
                     </div>
                  </div>
                 <div class="form-inn">
                     <div class="form-group has-feedback">
                                               <label>Hotel</label>
                        <div class="input-group">
      
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                                                      <select name="hotelid" class="effect-9" required style="width: 100%;">
<option value="">Select Hotel</option> 
<?php $query=mysqli_query($con,"select * from hotel");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
<?php } ?>
</select>

                        
                        
                        </div>
                     </div>
                  </div>
                 
                  <div class="text-center"> 
                  <button type="submit" name="hotelform" class="btn btn-primary submitBtn bt" style="width: 100%; padding:5px; font-size:16px;">Submit</button>
              </div>
               </form>
            </div>
         </div>
  </div>
</div>





<!--------------popup 3--------------------------->
  <div id="popup3" class="popup-container" style="width: 100%;">
  <div class="popup-content">
    <a href="#" class="close">&times;</a>
    <div class="tourpackbg1 dest-overview" >
            <div class="tourpack-filterbx form-querys">
               <h3 style=" margin-top: 10px;">Enquiry Now</h3>
               <form role="form"  method="post"  class="bv-form" enctype='multipart/form-data'>
                  <input type="hidden"  name="secondForm" value="secondForm"><br>
                
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-solid fa-user"></span></div>
                           <input type="text" class="effect-9" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class=" fa fa-solid fa-envelope"></span></div>
                           <input type="email" class="effect-9" name="email" id="email" placeholder="Enter your email" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa fa-solid fa-phone"></span></div>
                           <input name="phone" id="phone" type="phone" class="effect-9" placeholder="Enter your phone" required >
                        </div>
                     </div>
                  </div>
                    <div class="form-inn">
                     <div class="form-group has-feedback">
                                  <label>Checkin</label>
                        <div class="input-group">
                   
                           <div class="input-group-addon"><span class="fa-solid fa-calender-days"></span></div>
                           <input type="date" class="effect-9" name="checkindate" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                    <div class="form-inn">
                     <div class="form-group has-feedback">
                                <label>Checkout</label>
                        <div class="input-group">
                       
                           <div class="input-group-addon"><span class="fa-solid fa-calender-days"></span></div>
                           <input type="date" class="effect-9" name="checkoutdate" id="name" placeholder="Enter your name" required>
                        </div>
                     </div>
                  </div>
                   <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                           <input name="adult" id="phone" type="phone" class="effect-9" placeholder="NO. OF ADULTS" required >
                        </div>
                     </div>
                  </div>
                  <div class="form-inn">
                     <div class="form-group has-feedback">
                        <div class="input-group">
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                           <input name="kid" id="phone" type="phone" class="effect-9" placeholder="NO. OF KIDS" required >
                        </div>
                     </div>
                  </div>
                     <div class="form-inn">
                     <div class="form-group has-feedback">
                                               <label>Room Category</label>
                        <div class="input-group">
      
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                                                      <select name="hotelroomcategoryid" class="effect-9" required style="width: 100%;">
<option value="">Select Room</option> 
<?php $query=mysqli_query($con,"select * from hotelroomcategory");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['category'];?></option>
<?php } ?>
</select>   
                        
                        </div>
                     </div>
                  </div>
                                  <div class="form-inn">
                     <div class="form-group has-feedback">
                                               <label>Hotel</label>
                        <div class="input-group">
      
                           <div class="input-group-addon"><span class="fa-solid fa-user"></span></div>
                                                      <select name="hotelid" class="effect-9" required style="width: 100%;">
<option value="">Select Hotel</option> 
<?php $query=mysqli_query($con,"select * from hotel");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
<?php } ?>
</select>

                        
                        
                        </div>
                     </div>
                  </div>
                 

                  <div class="text-center"> 
                  <button type="submit" name="hotelform" class="btn btn-primary submitBtn bt" style="width: 100%;">Submit</button>
              </div>
               </form>
            </div>
         </div>
  </div>
</div>

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