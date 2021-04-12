<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    if($count){
         foreach ($count as $key => $value) {
            echo "<!-- \n".print_r($value, TRUE)."\n-->\n\n";
        }
    }

?>
<!--<!DOCTYPE html>-->
<html lang="en">
<head>

<!--important meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

 <!--Title -->
<title>Maungaji I Pesan Guru Ngaji Privat</title>

 <!--Basic SEO -->
<meta name="description" content="Privat ngaji di tempat yang kamu tentukan, murah, mudah dan sesuai syariah.">
<meta name="keywords" content="guru ngaji, guru ngaji online, belajar ngaji, belajar iqro, belajar al-quran, belajar tahsin, hafidz qur'an, aplikasi ngaji online, belajar iqro online, belajar al-quran online, ngaji online, privat ngaji, guru ngaji, guru ngaji profesional, privat ngaji online, ngaji, guru ngaji berkualitas">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

 <!--Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('/img/favicon/apple-icon-57x57.png') ?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('/img/favicon/apple-icon-60x60.png') ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('/img/favicon/apple-icon-72x72.png') ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('/img/favicon/apple-icon-114x114.png') ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('/img/favicon/apple-icon-120x120.png') ?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('/img/favicon/apple-icon-144x144.png') ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('/img/favicon/apple-icon-152x152.png') ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('/img/favicon/apple-icon-180x180.png') ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('/img/favicon/android-icon-192x192.png') ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('/img/favicon/favicon-32x32.png') ?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('/img/favicon/favicon-96x96.png') ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('/img/favicon/favicon-16x16.png') ?>">
<link rel="manifest" href="img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

 <!--Bootstrap CSS -->
<link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">

 <!--Owl Carousel CSS -->
<link rel="stylesheet" href="../css/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl-carousel/owl.theme.default.min.css">

 <!--Responsive Tabs CSS -->
<link rel="stylesheet" href="../css/responsive-tabs/responsive-tabs.min.css">

 <!--Magnific Popup -->
<link rel="stylesheet" href="../css/magnific-popup/magnific-popup.min.css">

 <!--Animate CSS -->
<link rel="stylesheet" href="../css/animate/animate.min.css">

 <!--Custom CSS -->
<link rel="stylesheet" href="../css/style.css">

<!--Slick  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">

 <!--Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!--Fontawesome -->
<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">

<!--Fontpoppins -->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<!--Rakkas -->
<link href='https://fonts.googleapis.com/css?family=Rakkas' rel='stylesheet'>

<!--Montserrat -->
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <!--Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '523156341768942');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=523156341768942&ev=PageView&noscript=1"
/></noscript>
 <!--End Facebook Pixel Code -->
<style type="text/css">
    h3 {
        color: #FFF;
        font-family: "Rakkas";
        font-size: 40px;
        position: relative;
        letter-spacing: 0.05em;
        line-height:100%;
    }
    h4 {
        font-family: "Poppins";
        font-size: 24px;
        position: relative;
        line-height:100%;
    }
    li {
        list-style-type: none;
    }
    .col-center {
        margin: 0 auto;
        float: none !important;
    }
    .carousel {
        margin: 50px auto;
        padding: 0 70px;
    }
    .carousel .item {
        color: #999;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        min-height: 290px;
    }
    .carousel .item .img-box {
        width: 135px;
        height: 135px;
        margin: 0 auto;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 50%;
    }
    .carousel .img-box img {
        width: 100%;
        height: 100%;
        display: block;
        border-radius: 50%;
    }
    .carousel .testimoni {
        padding: 30px 0 10px;
    }
    .carousel .overview {   
        font-style: italic;
    }
    .carousel .overview b {
        text-transform: uppercase;
        color: #089ED1;;
    }
    .carousel .carousel-control {
        width: 40px;
        height: 40px;
        margin-top: -20px;
        top: 50%;
        background: none;
    }
    .carousel-control i {
        font-size: 68px;
        line-height: 42px;
        position: absolute;
        display: inline-block;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
    }
    .carousel .carousel-indicators {
        bottom: -40px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 1px 3px;
        border-radius: 50%;
    }
    .carousel-indicators li {   
        background: #999;
        border-color: transparent;
        box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
    }
    .carousel-indicators li.active {    
        background: #555;       
        box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
    }
    .teacher {
        text-decoration: none;
        padding: 15px 30px;
        background-color: #3597D4;
        color: #fff;
        box-shadow: 2px 2px 10px 0 rgba(0, 0, 0, 0.8);
        letter-spacing: 2px;
        border-radius: 5px;
        margin: -15px;
        text-transform: uppercase;
        font-size: 12px;
    }
    .new-text {
        font-family: "Poppins";
        color: #585858;
    }
    .square-left {
        height: 395px;
        width: 300px;
        background-color: #FFF;
        border: 2px solid #3597D4;
        box-sizing: border-box;
        border-radius: 16px;
        margin-left: 3rem
    }
    .square-center {
        height: 395px;
        width: 300px;
        background-color: #FFF;
        border: 2px solid #3597D4;
        box-sizing: border-box;
        border-radius: 16px;
        margin-left: 3rem
    }
    .square-right {
        height: 395px;
        width: 300px;
        background-color: #FFF;
        border: 2px solid #3597D4;
        box-sizing: border-box;
        border-radius: 16px;
        margin-left: 3rem
    }
    .square-jdid {
        height: 64px;
        background-color: #FFE604;
        box-sizing: border-box;
        position: absolute;
        left: 0;
        right: 0;
    }
    .square-prons {
        height: 14px;
        background-color: #FFF;
        box-sizing: border-box;
        position: absolute;
        left: 0;
        right: 0;
    }
    .content-mau {
        margin-bottom:-100px;
    }
    .text-block-iqro {
        position: absolute;
        bottom: -2px;
        right: 20px;
        left: 0;
        background-color: #3597D4;
        color: #FFF;
        padding: 25px;
        width: 298px;
        height: 120px;
        border: 2px solid #3597D4;
        box-sizing: border-box;
        border-radius: 16px;
        font-size: 50px;
    }
    .text-block-tahsin {
        position: absolute;
        bottom: -2px;
        right: 20px;
        left: -1px;
        background-color: #3597D4;
        color: #FFF;
        padding-top: 25px;
        padding-left: 55px;
        width: 298px;
        height: 120px;
        border: 2px solid #3597D4;
        box-sizing: border-box;
        border-radius: 16px;
        font-size: 50px;
    }
    .text-block-tahfidz {
        position: absolute;
        bottom: -2px;
        right: 20px;
        left: 0;
        background-color: #3597D4;
        color: #FFF;
        padding-top: 25px;
        padding-left: 40px;
        width: 298px;
        height: 120px;
        border: 2px solid #3597D4;
        box-sizing: border-box;
        border-radius: 16px;
        font-size: 50px;
    }
    .text-count-student {
        position: absolute;
        left: 0;
        background-color: #FFD93B;
        color: #263238;
        padding-top: 20px; 
        height: 100px; 
        box-sizing: border-box;
        border-radius: 16px;
        font-family:Poppins;
    }
    .text-count-teacher {
        position: absolute;
        background-color: #FFD93B;
        color: #263238;
        padding-top: 20px; 
        height: 100px; 
        box-sizing: border-box;
        border-radius: 16px;
        font-family:Poppins;
    }
    .text-student {
        position: absolute;
        right: 20px;
        background-color: #3597D4;
        color: #FFF;
        padding-top: 20px; 
        height: 100px; 
        box-sizing: border-box;
        border-radius: 16px;
        font-family:Poppins;
    }
    .text-register-student {
        position: absolute;
        color: #FFF;
        padding-top: 10px;
        height: 50px;
        width: 550px;
        border: 2px solid #3597D4;
        box-sizing: border-box;
        border-radius: 16px;
        font-family:Poppins; 
        font-size:16px; 
        margin-top: 85px;
    }
    .text-register-teacher {
        position: absolute;
        color: #FFF;
        padding-top: 10px;
        height: 50px;
        width: 550px;
        border: 2px solid #3597D4;
        box-sizing: border-box;
        border-radius: 16px;
        font-family:Poppins; 
        font-size:16px; 
        margin-top: 118px;
    }
    .text-teacher {
        position: absolute;
        left: 120px;
        background-color: #3597D4;
        color: #FFF;
        padding-top: 20px; 
        height: 100px; 
        box-sizing: border-box;
        border-radius: 16px;
        font-family:Poppins;
    }
    .square-kelebihan-maungaji {
        padding-top: 10px;
        height: 250px;
        width: 550px;
        border: 2px solid #FFF;
        box-sizing: border-box;
        border-radius: 16px;
        font-family:Poppins; 
        margin-left: 3rem;
    }
    .gtco-testimonials {
      position: relative;
      margin-top: -100px;
    }
    @media (max-width: 767px) {
      .gtco-testimonials {
        margin-top: 20px;
      }
    }
    .gtco-testimonials h2 {
      font-size: 30px;
      text-align: center;
      color: #333333;
      margin-bottom: 50px;
    }
    .gtco-testimonials .owl-stage-outer {
      padding: 30px 0;
    }
    .gtco-testimonials .owl-nav {
      display: none;
    }
    .gtco-testimonials .card {
      /*background: #3597D4;*/
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
      margin: 0 20px;
      padding: 0 10px;
      border-radius: 20px;
      border: 0;
      height: 600px;
    }
    .gtco-testimonials .card .card-img-top {
      max-width: 100px;
      border-radius: 50%;
      margin: 15px auto 0;
      /*box-shadow: 0 8px 20px -4px #95abbb;*/
      width: 100px;
      height: 100px;
    }
    .gtco-testimonials .card h5 {
      color: #01b0f8;
      font-size: 21px;
      line-height: 1.3;
    }
    .gtco-testimonials .card h5 span {
      font-size: 18px;
      color: #666666;
    }
    .gtco-testimonials .card p {
      font-size: 18px;
      color: #555;
      padding-bottom: 15px;
    }
    .gtco-testimonials .active {
      opacity: 0.5;
      transition: all 0.3s;
    }
    .gtco-testimonials .center {
      opacity: 1;
    }
    .gtco-testimonials .center h5 {
      font-size: 24px;
    }
    .gtco-testimonials .center h5 span {
      font-size: 20px;
    }
    .gtco-testimonials .center .card-img-top {
      max-width: 100%;
      height: 120px;
      width: 120px;
    }
    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
      outline: 0;
    }

    .gtco-article {
      position: relative;
      margin-top: 20px;
    }
    @media (max-width: 767px) {
      .gtco-article {
        margin-top: 20px;
      }
    }
    .gtco-article h2 {
      font-size: 30px;
      text-align: center;
      color: #333333;
      margin-bottom: 50px;
    }
    .gtco-article .owl-stage-outer {
      padding: 30px 0;
    }
    .gtco-article .owl-nav {
      display: none;
    }
    .gtco-article .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
      margin: 0 20px;
      padding: 0 10px;
      /*border-radius: 20px;*/
      border: 0;
    }
    .gtco-article .card .card-img-top {
      max-width: 100px;
      border-radius: 50%;
      margin: 15px auto 0;
      box-shadow: 0 8px 20px -4px #95abbb;
      width: 100px;
      height: 100px;
    }
    .gtco-article .card h5 {
      color: #01b0f8;
      font-size: 21px;
      line-height: 1.3;
    }
    .gtco-article .card h5 span {
      font-size: 18px;
      color: #666666;
    }
    .gtco-article .card p {
      font-size: 20px;
      color: #555;
      padding-bottom: 15px;
    }
    .gtco-article .active {
      opacity: 0.5;
      transition: all 0.3s;
    }
    .gtco-article .center {
      opacity: 1;
    }
    .gtco-article .center h5 {
      font-size: 24px;
    }
    .gtco-article .center h5 span {
      font-size: 20px;
    }
    .gtco-article .center .card-img-top {
      max-width: 100%;
      height: 120px;
      width: 120px;
    }
    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
      outline: 0;
    }
    .img-article {
      border-radius: 40px;
      box-shadow: 0 4px 8px 0 rgb(0 0 0 / 7%);
      padding: 5px;
      width: 150px;
      height: 450px;
    }
    .text-santri{
        font-family: Poppins;
        font-size: 24px;
        margin-left: 15px;
        margin-top: 150px;
        text-align: left;
        line-height: normal;
    }
    .text-guru{
        font-family: Poppins;
        font-size: 24px;
        margin-left: 15px;
        margin-top: 150px;
        line-height: normal;
        text-align: left;
      }
    .text-choose-package{
        font-size: 50px; 
        font-family: 'Poppins'; 
        font-weight: 1000;
        margin-top: 120px;
        color: #3597D4;
    }
    .media{
        color: #FFFFFF;
        font-family: Poppins;
        margin-top: 10px;
        background-color: #3597D4;
        border: 1px solid #FFFFFF;
        box-sizing: border-box;
        border-radius: 16px;
        font-weight: 600;
        font-size: 50px;
        line-height: 80px;
    }
    .text-header{
        font-family: 'Rakkas'; 
        font-weight: 1000;
        font-size: 50px;
    }
    .btn-download-header{
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
    }
    .img-media-tempo {
        display: inline-block; 
        margin-right: 15px;
    }
    .img-media-gomuslim {
        display: inline-block; 
        margin-right: 15px;
    }
    .img-media-republika {
        display: inline-block; 
        margin-right: 15px;
    }
    .img-media-republika-ramadhan {
        display: inline-block; 
        margin-right: 15px;
    }
    .title-testimoni {
        font-size: 50px;
        font-family: 'Poppins';
        font-weight: 1000;
        color: #3597D4;
    }
    .owl-carousel .owl-item img {
        display: initial;
        width: 100%;
    }
    .section-size {
        height:500px;
    }
    * {
        box-sizing: border-box;
    }

    @media screen and (max-width: 1100px) {
      #socmed { display: none; }   
      #jdid { display: none; }
      #chosing-class .about-item {
        font-size: 40px;
      }
      #prons-mau .square-kelebihan-maungaji { 
        height: 300px;
        width: 300px;
        margin-top: 25px;
      }
      .square-center{
        margin-top: 5rem;
      }
      .square-right{
        margin-top: 5rem;
      }
      .text-register-student{
        width: 300px;
        margin-left: 10px;
        margin-top: 10px;
      }
      .text-register-teacher{
        width: 330px;
        margin-top: 510px;
      }
      .text-count-student{
        margin-left: 18px;
        margin-top: -450px;
      }
      .text-count-teacher{
        margin-left: 5px;
        margin-top: 20px;
      }
      .text-student{
        margin-left: 30px;
        margin-top: -451px;
      }
      .text-teacher{
        margin-top: 20px;
        margin-left: -9px;
        margin-right: 25px;
      }
      .img-santri{
        margin-top: 50px;
      }
      .text-santri {
        font-family: Poppins;
        font-size: 24px;
        margin-left: 15px;
        margin-top: 20px;
        text-align: left;
        line-height: normal;
      }
      .text-guru{
        font-family: Poppins;
        font-size: 24px;
        margin-left: 15px;
        margin-top: 150px;
        line-height: normal;
        text-align: left;
        display: none;
      }
      .text-choose-package{
        font-size: 27px;
        font-family: 'Poppins'; 
        font-weight: 1000;
        margin-top: -30px;
        color: #3597D4;
      }
      .media{
        color: #FFFFFF;
        font-family: Poppins;
        margin-top: 10px;
        background-color: #3597D4;
        border: 1px solid #FFFFFF;
        box-sizing: border-box;
        border-radius: 16px;
        font-weight: 600;
        font-size: 25px;
        line-height: 80px;
      }
      .text-header{
        font-family: 'Rakkas'; 
        font-weight: 1000;
        text-align: center;
        font-size: 45px;
      }
      .btn-download-header{
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
      }
      .img-media-tempo {
        display: inline-block;
        margin-right: 15px;
        margin-top: 25px;
       }
      .img-media-gomuslim {
          display: inline-block;
          margin-right: 15px;
          margin-top: -50px;
       }
      .img-media-republika {
          display: inline-block; 
          margin-right: 15px;
          margin-top: -70px;
       }
      .img-media-republika-ramadhan {
          display: inline-block; 
          margin-right: 15px;
      }
      .img-teacher-mobile-version{
        margin: 15px;
        margin-top: 150px;
      }
      .title-testimoni {
        font-size: 50px;
        font-family: 'Poppins';
        font-weight: 1000;
        color: #3597D4;
        margin-top: -30px;
      }
      .section-size {
        height:900px;
      }
    }

/* =========================================
    Mobile Menu
============================================ */

.navbar-header {
    position: relative;
}

#mobile-nav-open-btn {
    font-size: 30px;
    color: #fff;
    cursor: pointer;
    z-index: 2;
    position: absolute;
    right: 0;
    top: 0px;
    /* hide mobile nav open btn */
    display: none;
}

.navbar-brand-mobile img{
    margin-top: -10px !important;
    height: 50px;
    width: 65%;
}

#home-content-inner {
    text-align: center;
    padding: 0 85px;
}

#mobile-nav {
    /* by default, mobile nav will be hidden with height 0% */
    height: 0%;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 3;
    background-color: #263238;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear;
    overflow-y: hidden;
}

#mobile-nav-close-btn {
    font-family: "Poppins";
    font-size: 70px;
    color: #ffff;
    font-weight: 400;
    cursor: pointer;
    position: absolute;
    top: -9px;
    right: 13px;
    -webkit-transition: .3s;
    transition: .3s;
}

#mobile-nav-content {
    text-align: center;
    width: 100%;
    margin-top: 30px;
    position: relative;
    top: 10%;
}

#mobile-nav ul li {
    margin-bottom: 20px;
}

#mobile-nav a {
    font-family: "Poppins";
    font-size: 18px;
    color: #ffff;
    font-weight: 400;
    text-transform: uppercase;
    display: inline;
    -webkit-transition: .3s;
    transition: .3s;
}

#mobile-nav a:hover,
#mobile-nav a:focus,
#mobile-nav-close-btn:hover,
#mobile-nav-close-btn:focus {
    color: #089ED1;
    background: none;
}


/* Mobile nav scroll spy active state */

.white-nav-top #mobile-nav ul.nav>li.active>a {
    color: #089ED1;
    font-weight: 500;
}

.navbar-brand-mobile {
    display: none;
}

.white-nav-top #mobile-nav-open-btn {
    color: #089ED1;
}

/*==================================================
            Bootstrap 3 Media Queries
==================================================*/


/* Large Devices (Desktops & Laptops) */

@media (min-width: 1200px) and (max-width: 1299px) {
    /* Navigation */
    .site-nav-wrapper {
        padding: 0 20px;
    }

}


/* Medium Devices (Landscape Tablets & Medium Desktops) */

@media (min-width: 992px) and (max-width: 1199px) {
    /* Navigation */
    .site-nav-wrapper {
        padding: 0;
    }
    /* Generic */
    .vertical-heading h2 {
        font-size: 29px;
    }
    /* Services 02 */
    #services-tabs .tab-bg {
        padding: 16px 30px;
        min-height: 300px;
    }
    .service-tab p {
        line-height: 20px;
    }

}


/* Small Devices (Portrait Tablets & Small Desktops) */

@media (min-width: 768px) and (max-width: 991px) {
    /* Navigation */
    .site-nav-wrapper {
        padding: 0;
    }
    /* Home */
    #home-heading {
        text-align: center;
    }
    #home-heading h1 {
        font-size: 49px;
        font-weight: bold;
    }
    #home-text p {
        font-size: 17px;
    }
    /* Generic */
    .btn-general {
        padding: 8px 35px 8px 35px;
        font-size: 10px;
    }
    /* Generic */
    .vertical-heading h2 {
        font-size: 29px;
    }
    /* Tech Statement */
    #tech-statement h3 {
        font-size: 20px;
        line-height: 30px;
    }
    /* Services 02 */
    .r-tabs-accordion-title {
        text-align: center;
        margin-bottom: 10px;
    }
    .r-tabs-accordion-title a {
        font-family: "Muli", sans-serif;
        font-size: 13px;
        color: #212226;
        text-transform: uppercase;
        font-weight: 400;
        padding: 0;
        text-decoration: none;
    }
    /* Tab active state */
    .r-tabs-accordion-title.r-tabs-state-active a {
        color: #089ED1;
        font-weight: 700;
        border-bottom: 3px solid #089ED1;
        padding-bottom: 5px;
        -webkit-transition: border-color 300ms linear;
        transition: border-color 300ms linear;
    }
    /* Pricing */
    .pricing-table .price h2 {
        margin: 0 0 0 6px;
        font-size: 35px;
    }
    /* Stats */
    .stats-item p {
        line-height: 18px;
    }
    /* Blog */
    .blog-post .post-meta p {
        line-height: 14px;
    }
    /* Contact */
    ul.office-details li {
        margin-right: 15px;
    }
    ul.office-details li i {
        width: 25px;
    }
    /* .guru-ngaji-kami [class*='col-md']:first-child {
        display: none;
    } */
    .white-nav-top {
        padding-top: 10px;
    }
}


/* Extra Small Devices (Landscape Phones & Portrait Tablets) */

@media (max-width: 767px) {
    /* Navigaiton */
    .navbar {
        padding: 20px 0;
    }
    .site-nav-wrapper,
    .white-nav-top {
        padding: 0;
    }
    /* show mobile nav open btn */
    #mobile-nav-open-btn {
        display: block;
    }
    /* Home */
    #home-heading {
        text-align: center;
    }
    #home-heading h1 {
        font-size: 30px;
        letter-spacing: 1px;
        font-weight: bold;
    }
    #home-text p {
        font-size: 17px;
        line-height: 18px;
        margin: 8px 2px 30px 2px;
    }
    /* Generic */
    .btn-general {
        padding: 8px 25px 6px 25px;
        font-size: 10px;
    }
    /* About 01 */
    /* Large Content Box */
    .content-box-lg {
        padding: 90px 0;
    }
    /* Vertical heading */
    .vertical-heading {
        text-align: center;
    }
    .vertical-heading h5 {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        display: block;
        position: static;
        margin-bottom: 15px;
    }
    .vertical-heading h2 {
        font-size: 29px;
        line-height: normal;
        margin: 0;
    }
    #about-left {
        margin-bottom: 50px;
    }
    #about-right {
        text-align: center;
    }
    /* About 02 */
    /* Medium Content Box */
    .content-box-md {
        padding: 80px 0;
    }
    .about-item {
        padding: 55px 30px;
        /* margin-bottom: 35px; */
    }
    .about-item i {
        font-size: 30px;
    }
    .about-item h3 {
        font-size: 20px;
    }
    /* Team */
    #team-left .vertical-heading {
        min-height: 130px;
    }
    .skill h4 {
        font-size: 14px;
        line-height: 35px;
    }
    /* Tech Statement */
    #tech-statement h3 {
        font-size: 20px;
        line-height: 30px;
    }
    /* Services 01 */
    /* Horizontal heading */
    .horizontal-heading {
        margin-bottom: 40px;
    }
    .horizontal-heading h2 {
        font-size: 30px;
        padding: 0 10px;
    }
    #services-01 img {
        margin: 35px 0;
    }
    .service,
    .service .icon {
        text-align: center;
    }
    .service h4 {
        font-size: 18px;
    }
    /* Services 02 */
    .r-tabs-accordion-title {
        text-align: center;
        margin-bottom: 10px;
    }
    .r-tabs-accordion-title a {
        font-family: "Muli", sans-serif;
        font-size: 13px;
        color: #212226;
        text-transform: uppercase;
        font-weight: 400;
        padding: 0;
        text-decoration: none;
    }
    /* Tab active state */
    .r-tabs-accordion-title.r-tabs-state-active a {
        color: #089ED1;
        font-weight: 700;
        border-bottom: 3px solid #089ED1;
        padding-bottom: 5px;
        -webkit-transition: border-color 300ms linear;
        transition: border-color 300ms linear;
    }
    #services-tabs .tab-bg {
        text-align: center;
        padding: 40px 30px;
    }
    #services-tabs h2 {
        font-size: 40px;
    }
    #services-tabs h3 {
        font-size: 28px;
    }
    /* Portfolio */
    #portfolio {
        padding-bottom: 0;
    }
    #isotope-filters button {
        padding-right: 15px;
    }
    /* Testimonials */
    #testimonials {
        padding-top: 45px;
    }
    #testimonial-slider {
        top: 0;
    }
    #testimonials .vertical-heading {
        padding: 0;
    }
    .testimonial .row {
        margin: 0;
    }
    .testimonial h3 {
        font-size: 20px;
    }
    .testimonial .stars {
        font-size: 16px;
    }
    .author img {
        width: 80px !important;
    }
    /* Pricing */
    .pricing-table {
        margin-bottom: 30px;
    }
    .pricing-table .price h2 {
        font-size: 28px;
        margin: 0 0 0 16px;
    }
    /* Stats */
    .stats-item {
        margin-bottom: 20px;
        padding: 25px 5px;
    }
    .stats-item i {
        font-size: 30px;
    }
    .stats-item h3 {
        font-size: 24px;
    }
    /* Blog */
    #blog-left {
        text-align: center;
        margin-bottom: 30px;
    }
    .blog-post {
        margin-bottom: 25px;
    }
    /* Contact */
    #contact-left {
        text-align: center;
    }
    .office {
        margin-bottom: 40px;
    }
    ul.office-details li {
        display: block;
        margin-top: 25px;
    }
    ul.office-details li i {
        width: auto;
        display: block;
        margin-bottom: 3px;
    }
    ul.social-list {
        margin-bottom: 40px;
    }
    .guru-ngaji-kami [class*='col-md']:first-child {
        display: none;
    }
    .white-nav-top {
        padding-top: 10px;
    }
    #home-bg-video {
        background-size: contain;
    }
    .navbar-brand-mobile {
        display: block;
    }
    .navbar-brand {
        display: none;
    }
    #home-text p {
        color: #fff;
        font-size: 15px;
        font-weight: 100;
        text-align: center;
        letter-spacing: .5px;
        line-height: 20px;
    }
    #home img {
        /* display: none; */
    }
    #home {
        background-color: #089ED1;
    }
    #home-content-inner {
        padding: 0 20px;
        transform: translate(3%, -80%);
    }
    #home-heading h1 {
        color: #fff;
        font-size: 65px;
        font-weight: 100;
        text-transform: uppercase;
        margin: 0;
        display: inline-block;
    }

    #home-text {
      display: block;
    }
}


/* Extra Small Devices (Portrait Phones & Smaller Devices) */

@media (max-width: 480px) {
    /* Home */
    #home-heading {
        text-align: center;
        font-size: 40px;
    }
    #home-heading h1 {
        font-size: 32px;
        font-weight: bold;
        letter-spacing: 1px;
    }
    #home-text p {
        font-size: 15px;
        line-height: 16px;
        margin: 8px 10px 25px 10px;
    }
    /* Generic */
    .vertical-heading h2 {
        font-size: 24px;
        letter-spacing: 2px;
    }
    /* Portfolio */
    #isotope-filters {
        text-align: center;
    }
    #isotope-filters button {
        font-size: 10px;
        padding-right: 14px;
    }
    /* Testimonials */
    .testimonial h3 {
        font-size: 14px;
        line-height: 18px;
    }
    .testimonial .stars {
        font-size: 13px;
    }
    .guru-ngaji-kami [class*='col-md']:first-child {
        display: none;
    }
    .white-nav-top {
        padding-top: 10px;
    }
    #home-bg-video {
        background-size: contain;
    }
    .navbar-brand-mobile {
        display: block;
    }
    .navbar-brand {
        display: none;
    }
    #home-text p {
        color: #fff;
        font-size: 15px;
        font-weight: 100;
        text-align: center;
        letter-spacing: .5px;
        line-height: 20px;
    }
    #home img {
        /* display: none; */
        max-width: 320px;
        height: auto;
        position: absolute;
        bottom: 0;
        left: 20px;
    }
    #home {
        background-color: #089ED1;
    }
    #home-content-inner {
        padding: 0 20px;
        left: unset;
        transform: translate(3%, -80%);
    }
    #home-heading h1 {
        display: inline-block;
    }

    #home-text {
      display: block;
    }
    .service .content-guru-ngaji-kami h4, .service .content-guru-ngaji-kami p {
      color: #089ED1;
      line-height: 20px;
    }
    #services-01 .heading-guru-ngaji-kami {
      color: #089ED1;
    }
    .about-item p {
      font-size: 16px;
    }
}


/* Extra Small Devices (Portrait Phones & Smaller Devices) */

@media (max-width: 320px) {
    /* Testimonials */
    .testimonial h3 {
        font-size: 12px;
        line-height: 16px;
    }
    .testimonial .stars {
        font-size: 10px;
    }
    .guru-ngaji-kami [class*='col-md']:first-child {
        display: none;
    }
    .white-nav-top {
        padding-top: 10px;
    }
    #home-bg-video {
        background-size: contain;
    }
    .navbar-brand-mobile {
        display: block;
    }
    .navbar-brand {
        display: none;
    }
    #home-content-inner {
        padding: 0 20px;
        left: unset;
        transform: translateY(-80%);
    }
    #statement .content-box-lg {
        padding: 0;
    }
    #home img {
        /* display: none; */
    }
    #home {
        background-color: #089ED1;
    }
    #home-text p {
        color: #fff;
        font-size: 15px;
        font-weight: 100;
        text-align: center;
        letter-spacing: .5px;
        line-height: 20px;
    }
    #home-heading h1 {
        font-size: 49px;
        font-weight: bold;
        letter-spacing: 1px;
        color: #fff;
        text-transform: uppercase;
        margin: 0;
        display: inline-block;
    }

    #home-text {
      display: block;
    }
    
}

</style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">
     <!--Header -->
    <header>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="site-nav-wrapper">
                    <div class="navbar-header">
                         <!--Mobile Menu Open Button -->
                        <span id="mobile-nav-open-btn">&#9776;</span>
                         <!--Logo -->
                        <a class="navbar-brand smooth-scroll" href="#home">
                            <img class="logo-non-text" src="./logo.png" alt="logo" width="auto" class="img-responsive" height="50px" style="margin-top: -10px;margin-left: 72px;">
                        </a>
                         <!--Logo -->
                        <a class="navbar-brand-mobile smooth-scroll" href="#home">
                            <img src="https://i.ibb.co/ZTdPn9T/Mau-Ngaji-Logo-3.png" alt="maungaji" border="0" class="img-responsive">
                        </a>
                    </div>

                    <!--Main Menu -->
                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a href="https://maungaji.co.id">HOME PAGE</a></li>
                                <li><a href="https://maungaji.co.id/artikel" target="_blank">ARTICLE</a></li>
                                <li><a href="https://maungaji.co.id/army" target="_blank">ARMY LIST</a></li>
                                <li><a href="https://maungaji.co.id/teacher" target="_blank">TEACHER LIST</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfXTB4RKaDXoB01ld4tA8TFSiQsu-u790F4bmG9WTeCYf8bIA/viewform" target="_blank">
                                <div class="teacher">
                                    MAUNGAJI ARMY
                                </div>
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Mobile Menu -->
                    <div id="mobile-nav">
                         <!--Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>
                        <div id="mobile-nav-content">
                            <ul class="nav">
                                <li><a href="https://maungaji.co.id/">HOME PAGE</a></li>
                                <li><a href="https://maungaji.co.id/artikel" target="_blank">ARTICLE</a></li>
                                <li><a href="https://maungaji.co.id/army" target="_blank">ARMY LIST</a></li>
                                <li><a href="https://maungaji.co.id/teacher" target="_blank">TEACHER LIST</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfXTB4RKaDXoB01ld4tA8TFSiQsu-u790F4bmG9WTeCYf8bIA/viewform" class="teacher" target="_blank">MAUNGAJI ARMY</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--Header Ends -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="content-mau text-left">
        <section class="section-size">
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-6 col-sm-6">
                        <p><h3 class="text-header">Belajar Mengaji</h3></p>
                        <p><h3 class="text-header">Makin Mudah</h3></p>
                        <br>
                        <p>
                        <h4 style="color: #FFF; line-height: normal;">dengan Guru Ngaji Terbaik se-Indonesia <span style="color: #FFE604">Tatap Muka Langsung</span> ataupun <span style="color: #FFE604">Kelas Online.</span> Mudah, Murah dan Sesuai Syariah.
                        </h4>
                        </p>
                        <br>
                        <div class="btn-download-header">
                            <div class="button-download">
                                <!-- <a href="https://apps.apple.com/id/app/maungaji/id1497420237" target="_blank">
                                    <img src="https://maungaji.co.id/img/logo/appstore.svg">
                                </a> -->
                                <a href="https://play.google.com/store/apps/details?id=com.maungaji" target="_blank" style="margin-left: 15px;">
                                    <img src="https://maungaji.co.id/img/logo/playstore.svg">
                                </a>
                            </div>
                        </div> 
                        <br>  
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="../img/ilustrasi/Hero_Illust.svg" class="img-responsive" alt="Belajar Ngaji" style="height: 450px; width: 100%;">  
                    </div>
                    <br>
                    <br>
                    <div id="socmed" class="col-md-2 col-sm-2" style="padding-left:100px;">
                        <ul>
                            <li><a href="https://api.whatsapp.com/send?text=Assalamua'alaikum&phone=6281213419253" target="_blank"><img src="../img/icon/new/wa_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
                            <br>
                            <li><a href="https://www.instagram.com/maungaji/" target="_blank"><img src="../img/icon/new/ig_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
                            <br>
                            <li><a href="https://www.facebook.com/maungaji/" target="_blank"><img src="../img/icon/new/fb_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
                            <br>
                            <li><a href="https://twitter.com/MaungajiIndo" target="_blank"><img src="../img/icon/new/tw_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
                            <br>
                            <li><a href="https://www.linkedin.com/company/maungaji-indonesia/?originalSubdomain=id" target="_blank"><img src="../img/icon/new/ln_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid"> 
                <div class="row">
                    <!-- <div id="jdid" class="square-jdid">
                        <div class="col-md-6 col-sm-6">
                            <p style="margin-top: 20px;">
                                <span style="font-size: 16px; font-family:Poppins; margin-left: 5rem; color: #000000;"> Beli Paket Ngaji Murah di JD.ID 
                                    <span style="margin-left: 1px; font-style: italic; font-weight: bold; font-size: 20px; letter-spacing: 0.05em;">
                                    Dapatkan
                                    <span style="color: #f60000e0; font-family: Montserrat; font-style: italic; font-weight: bold; font-size: 20px; letter-spacing: 0.05em;">Diskon 10%</span>
                                    </span>
                                </span>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <p style="margin-top: -50px;">
                                <span style="margin-left: 15rem;">
                                    <img class="logo-non-text" src="../img/logo/MauNgaji.png" alt="logo" width="auto" class="img-responsive" height="50%">
                                </span>
                                <span style="margin-left: 2rem;">
                                    <img class="logo-non-text" src="../img/logo/JDID.png" alt="logo" width="auto" class="img-responsive" height="250%">
                                </span>
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </section>
    </div>

    <div id="chosing-class" class="content-box-md">
        <div class="container">
            <div class="row">
                <div class="about-item text-left">
                    <div id="tech-statement">
                        <h3 style="font-size: 40px; font-family: 'Poppins'; font-weight: 1000;">Pilihan Kelas</h3>
                    </div>
                    <div class="new-text">
                        <p style="font-size: 24px; line-height: normal;">Di Maungaji kamu bisa memilih salah satu di antara tiga jenis kelas</p>
                    </div>   
               </div>  
               <div class="col-md-4 square-left text-center">
                    <div class="text-center">
                        <img src="../img/ilustrasi/iqro_Illust.png" class="img-responsive" alt="Belajar Ngaji" height="auto" style="height: 250px; position: absolute; top: 10%; left: 10%;">               
                    </div>
                    <div class="text-block-iqro" data-toggle="tooltip" title="Mulai belajar mengenali, membaca, dan melafalkan secara benar huruf-huruf Arab dengan mengikuti kelas IQRO’ di Maungaji">
                        IQRO'
                    </div>   
                </div>
                <div class="col-md-4 square-center">
                    <div class="text-center">
                        <img src="../img/ilustrasi/Tahsin_Illust.png" class="img-responsive" alt="Belajar Ngaji" height="auto" style="height: 250px; position: absolute; top: 10%; left: 1%;">               
                    </div>
                    <div class="text-block-tahsin" data-toggle="tooltip" title="Baguskan dan perbaiki bacaan Qur’an mu dengan mengikuti kelas Tahsin atau yang biasa dikenal dengan ilmu tajwid di Maungaji">
                        TAHSIN
                    </div>   
                </div>
                <div class="col-md-4 square-right">
                    <div class="text-center">
                        <img src="../img/ilustrasi/Tahfidz_Illust.png" class="img-responsive" alt="Belajar Ngaji" height="auto" style="height: 250px; position: absolute; top: 10%; left: 20%;">               
                    </div>
                    <div class="text-block-tahfidz" data-toggle="tooltip" title="Hafal lebih banyak surah dan ayat dengan mengikuti kelas Tahfidz. Insya Allah guru ngaji siap membimbing kamu menjadi Hafidz/Hafizah">
                        TAHFIDZ
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <div class="content-box-md" class="img-santri">
        <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6">
                    <div>
                        <img src="../img/guru-ngaji/santri.png" class="img-responsive" alt="Belajar Ngaji" height="auto">               
                    </div>
                </div>
                <div class="col-md-6 sm-6">
                    <div class="row">
                        <div class="text-student text-center col-md-9 col-md-push-3" style="font-size:48px;">
                        <?php if (!empty($value)) { ?>
                        <?php echo $value[0]['name'] ?>
                        <?php } ?>
                        </div>
                        <div class="text-count-student text-center col-md-3 col-md-pull-9" style="font-size:48px;">
                        <?php if (!empty($value)) { ?>
                        <?php echo $value[0]['count'] ?>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="text-left">
                        <p class="text-santri">
                        Saat ini Maungaji telah memiliki santri-santri dari segala jenis usia, tempat tinggal dan latar belakang. Antusias belajar ngaji yang disebarkan oleh mereka membuat kami bersemangat untuk terus memberikan fasilitas terbaik bagi para pembelajar Qur’an.
                        </p>
                    </div>   
                    <div class="text-center">
                        <p class="text-register-student text-center" style="color: #3597D4;">
                        <a href="https://linktr.ee/Maungaji" target="_blank">Daftar Jadi Santri Ngaji</a>
                        </p>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <div class="content-box-md" style="margin-top:-100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div>
                       <div class="text-teacher text-center col-md-9 col-md-push-3" style="font-size:48px;">
                       <?php if (!empty($value)) { ?>
                       <?php echo $value[1]['name'] ?>
                       <?php } ?>   
                       </div>
                       <div class="text-count-teacher text-center col-md-3 col-md-pull-9" style="font-size:48px;">
                       <?php if (!empty($value)) { ?>
                       <?php echo $value[1]['count'] ?>
                       <?php } ?>
                       </div>   
                    </div>
                    <div class="text-left">
                        <p class="text-guru">
                        Insya Allah mitra guru ngaji di Maungaji memiliki 3 poin kompetensi yakni <span style="color: #3597D4">Terpercaya, Berpengalaman</span>, dan <span style="color: #3597D4">Terkualifikasi.</span> Maungaji juga membuka kesempatan bagi Guru Ngaji untuk bergabung bersama kami sebagai mitra maungaji.
                        </p>
                    </div>   
                    <div class="text-center">
                        <p class="text-register-teacher text-center" style="color: #3597D4;">
                        <a href="https://play.google.com/store/apps/details?id=com.maungaji.guruapp" target="_blank">Daftar Jadi Guru Ngaji</a>
                        </p>
                    </div>   
                </div>
                
                <div class="col-md-6 sm-6 img-teacher-mobile-version">
                    <div class="row">
                        <img src="../img/guru-ngaji/guru-ngaji.png" class="img-responsive" alt="Belajar Ngaji" height="auto">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="prons-mau" class="content-mau text-left">
        <section>
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-12 col-sm-12">
                    <p><h3 style="font-family: 'Poppins'; font-weight: 1000; font-size: 30px;">Kelebihan Maungaji</h3></p>
                    </div>    
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-6 col-sm-6 text-center square-kelebihan-maungaji" style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        <p>
                            <img src="../img/ilustrasi/Shield.png" style="left: 10%;" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
                        </p>
                        <p style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                            Aman dan Nyaman
                        </p>
                        <p style="font-size:15px;">
                        Kenali dan Verifikasi Guru Ngaji mu dengan fitur scan barcode di aplikasi.
                        </p>
                    </div>    
                    <div class="col-md-6 col-sm-6 text-center square-kelebihan-maungaji" style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        <p>
                            <img src="../img/ilustrasi/Hands.png" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
                        </p>
                        <p style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        Berdasarkan Syari'ah
                        </p>
                        <p style="font-size:15px;">
                        Demi menjalani syariah, kami menyarankan para santri untuk memilih gender guru ngaji sesuai dengan gender santri pemesan, laki laki dengan laki laki,  perempuan dengan perempuan. 
                        </p>
                    </div>    
                </div>
                <div class="row">
                    <br>
                    <div class="col-md-6 col-sm-6 text-center square-kelebihan-maungaji" style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        <p>
                            <img src="../img/ilustrasi/Report.png" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
                        </p>
                        <p style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        Laporan Belajar
                        </p>
                        <p style="font-size:15px;">
                        Kamu dapat melihat perkembangan belajarmu melalui aplikasi
                        </p>
                    </div>    
                    <div class="col-md-6 col-sm-6 text-center square-kelebihan-maungaji" style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        <p>
                            <img src="../img/ilustrasi/Certificate.png" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
                        </p>
                        <p style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        Dapat sertifikat
                        </p>
                        <p style="font-size:15px;">
                        Pelajari apa yang anda inginkan dan dapatkan sertifikasi pada mata pelajaran tertentu.
                        </p>
                    </div>    
                </div>
            </div>
            <br>
            <br>
        </section>
    </div>

    <!--testimoni-->
    <div class="gtco-testimonials">
        <div class="container">
            <div class="row">
                <div class="about-item text-left" style="margin-top: 100px;">
                    <div id="tech-statement">
                        <div class="title-testimoni">Testimoni</div>
                    </div>
                    <div style="color:#8A8787">
                        <h5 style="font-size: 20px;">Kumpulan testimoni dari para santri dan guru ngaji yang sudah terdaftar di maungaji</h5>
                    </div>
               </div>  
            </div>
        </div>
        <div class="owl-carousel owl-carousel1 owl-theme" style="margin-top: -50px;">
          <div>
            <div class="card text-center" style="background: #3597D4"><img class="card-img-top" src="../img/testimonial/desi.jpeg" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5 style="color:#FFFFFF;">Desi Aulia Pratama <br />
                <p class="card-text" style="color:#FFFFFF; font-family:Poppins; margin-top:50px;" >Maungaji sangat bermanfaat bagi siapa saja yang ingin belajar ngaji, bagi guru yang ingin mengajar maupun bagi murid yang ingin belajar. Dapat memilih jadwal yang sesuai, guru dan materi yang diinginkan juga. Sangat Memudahkan dan fleksibel.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center"><img class="card-img-top" src="../img/testimonial/derisca.jpg" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5>Nararya Nur Hasna<br />
                <p class="card-text" style="margin-top:100px;">Lebih mudah pertemuan online nya.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center" style="background: #3597D4"><img class="card-img-top" src="../img/testimonial/putridewi.jpg" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5 style="color:#FFFFFF;">Putri Dewi Puspita<br />
                <p class="card-text" style="color:#FFFFFF; margin-top:50px;">Maungaji sangat bermanfaat dan memudahkan umat untuk mencari guru ngaji berkualitas.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center"><img class="card-img-top" src="../img/testimonial/yuniar.jpg" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5>Yuniar Fella Anggaraini<br />
                <p class="card-text" style="margin-top:100px;">Sangat membantu dan memudahkan bagi mualaf seperti saya dalam belajar mengaji. Guru nya juga mumpuni. Makasih banyak Maungaji,recomended!.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center" style="background: #3597D4"><img class="card-img-top" src="../img/testimonial/faiqotul.jpg" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5 style="color:#FFFFFF;">Faiqotul jamilah<br />
                <p class="card-text" style="color:#FFFFFF; margin-top:50px;">MashaAllah , alhmdulillah dengan adanya aplikasi maungaji ini  saya lebih mudah untuk berbagi ilmu al quran kepada orang lain, tidak perlu repot melamar kerja atau mencari murid untuk sy ajar , dan respon admin mau ngaji yg ramah dan gercep jika membalas pertanyaan saya , membuat saya sdh merasa seperti keluarga.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center" style="background: #3597D4"><img class="card-img-top" src="../img/testimonial/fida.jpg" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5 style="color:#FFFFFF;">Fida Nabila<br />
                <p class="card-text" style="color:#FFFFFF; margin-top:50px;">Alhamdulillah lebih mudah mengamalkan ilmu tentang al-qur'an nya. Mengajarnya jadi simple karena yang jauh bisa secara daring.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center" style="background: #3597D4"><img class="card-img-top" src="../img/testimonial/idanurjanah.jpg" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5 style="color:#FFFFFF;">Ida Nurjanah<br />
                <p class="card-text" style="color:#FFFFFF; margin-top:50px;">Alhamdulillah baik namun kurang lancar kadang masih macet appnya.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center" style="background: #3597D4"><img class="card-img-top" src="../img/testimonial/rizqotul.jpg" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5 style="color:#FFFFFF;">Rizqotul Mukaromah<br />
                <p class="card-text" style="color:#FFFFFF; margin-top:50px;">Alhamdulillah lewat apk saya bisa mengamalkan ilmu saya sekaligus membantu perekonomian saya, jazakumullahu khoiron kastiiron tim maungaji.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center"><img class="card-img-top" src="../img/testimonial/dea.jpeg" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5>Tory Asdani<br />
                <p class="card-text" style="margin-top:50px;">Alhamdulillah Tory sudah menjadi lebih baik dalam membaca Al Quran dan dapat memahami panjang pendek ayat dengan makhraj yang baik serta pengertian sedikit tajwid.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!--end testimoni-->

    <!--prices-->
    <div class="gtco-testimonials">
        <div class="container">
            <div class="row">
                <div class="about-item text-left">
                    <div id="tech-statement">
                        <div class="text-choose-package">Pilih Paket Belajar-Mu</div>
                    </div>
                    <div style="color:#8A8787">
                        <h5 style="font-size: 20px;">Paket Pertemuan adalah paket yang pembayarannya dilakukan setiap 1x pertemuan</h5>
                    </div>
               </div>  
            </div>
        </div>

        <div class="owl-carousel owl-carousel1 owl-theme" style="margin-top: -50px;">
            <div class="card text-center" style="background: #D44835">
              <img class="card-img-top" src="../img/icon/new/keluarga.png" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h3 style="color:#FFFFFF;font-family:Poppins; letter-spacing: -1px;">KELUARGA</h3> <br />
                    <p class="card-text" style="color:#D44835; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    font-size: 50px;
                    line-height: 80px;
                    " >
                    75K/<span style="font-size: 25px;">pertemuan</span>
                    </p>
                    <br />
                    <div class="col-sm-6" style="color:#FFFFFF;
                    border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Tipe Kelas: Online
                    </div>
                    <div class="col-sm-6" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Max. Santri: 4 orang
                    </div>
                    <p>
                    <div class="col-sm-12" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    margin-top: 10px;
                    ">
                        Durasi Belajar: 90 Menit
                    </div>
                    </p>
                    <p class="card-text" style="color:#FFFFFF; font-family:Poppins; margin-top:53px;" >
                    Belajar ngaji bersama guru ngaji secara online dan sertakan anggota keluarga Anda untuk belajar bersama.
                    </p>
              </div>
            </div>

            <div class="card text-center" style="background: #35D458">
              <img class="card-img-top" src="../img/icon/new/kelompok.png" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h3 style="color:#FFFFFF;font-family:Poppins; letter-spacing: -1px;">KELOMPOK</h3> <br />
                    <p class="card-text" style="color:#35D458; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    font-size: 50px;
                    line-height: 80px;
                    " >
                    100K/<span style="font-size: 25px;">pertemuan</span>
                    </p>
                    <br />
                    <div class="col-sm-6" style="color:#FFFFFF;
                    border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Tipe Kelas: Online
                    </div>
                    <div class="col-sm-6" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Max. Santri: 10 orang
                    </div>
                    <p>
                     <div class="col-sm-12" style="color:#FFFFFF;border: 2px solid #FFF;
                        box-sizing: border-box;
                        border-radius: 16px;
                        font-family: Poppins;
                        margin-top: 10px;
                        ">
                        Durasi Belajar : 120 menit
                    </div>
                    </p>
                    <p class="card-text" style="color:#FFFFFF; font-family:Poppins; margin-top:53px;" >
                    Belajar ngaji bersama guru ngaji secara online dengan sensasi belajar di dalam kelas, Anda bisa mengajak hingga 10 orang untuk ikut belajar.
                    </p>
              </div>
            </div> 

            <div class="card text-center" style="background: #35D458">
              <img class="card-img-top" src="../img/icon/new/kelompok.png" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h3 style="color:#FFFFFF;font-family:Poppins; letter-spacing: -1px;">KELOMPOK</h3> <br />
                    <p class="card-text" style="color:#35D458; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    font-size: 50px;
                    line-height: 80px;
                    " >
                    200K/<span style="font-size: 25px;">pertemuan</span>
                    </p>
                    <br />
                    <div class="col-sm-6" style="color:#FFFFFF;
                    border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Tipe Kelas: offline
                    </div>
                    <div class="col-sm-6" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Max. Santri: 10 orang
                    </div>
                    <p>
                     <div class="col-sm-12" style="color:#FFFFFF;border: 2px solid #FFF;
                        box-sizing: border-box;
                        border-radius: 16px;
                        font-family: Poppins;
                        margin-top: 10px;
                        ">
                        Durasi Belajar : 120 menit
                    </div>
                    </p>
                    <p class="card-text" style="color:#FFFFFF; font-family:Poppins; margin-top:53px;" >
                    Belajar ngaji bersama guru ngaji secara offline dengan sensasi belajar di dalam kelas, Anda bisa mengajak hingga 10 orang untuk ikut belajar
                    </p>
              </div>
            </div>   

            <div class="card text-center" style="background: #D44835">
              <img class="card-img-top" src="../img/icon/new/keluarga.png" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h3 style="color:#FFFFFF;font-family:Poppins; letter-spacing: -1px;">KELUARGA</h3> <br />
                    <p class="card-text" style="color:#D44835; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    font-size: 50px;
                    line-height: 80px;
                    " >
                    150K/<span style="font-size: 25px;">pertemuan</span>
                    </p>
                    <br />
                    <div class="col-sm-6" style="color:#FFFFFF;
                    border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Tipe Kelas: offline
                    </div>
                    <div class="col-sm-6" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Max. Santri: 4 orang
                    </div>
                    <p>
                    <div class="col-sm-12" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    margin-top: 10px;
                    ">
                        Durasi Belajar: 90 Menit
                    </div>
                    </p>
                    <p class="card-text" style="color:#FFFFFF; font-family:Poppins; margin-top:53px;" >
                    Belajar ngaji bersama guru ngaji secara offline dan sertakan anggota keluarga Anda untuk belajar bersama.
                    </p>
              </div>
            </div>

            <div class="card text-center" style="background: #3597D4">
              <img class="card-img-top" src="../img/icon/new/personal.png" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h3 style="color:#FFFFFF;font-family:Poppins; letter-spacing: -1px;">PERSONAL</h3> <br />
                    <p class="card-text" style="color:#3597D4; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    font-size: 50px;
                    line-height: 80px;
                    " >
                    100K/<span style="font-size: 25px;">pertemuan</span>
                    </p>
                    <br />
                    <div class="col-sm-6" style="color:#FFFFFF;
                    border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Tipe Kelas: offline
                    </div>
                    <div class="col-sm-6" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Max. Santri: 1 orang
                    </div>
                    <p>
                    <div class="col-sm-12" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    margin-top: 10px;
                    ">
                        Durasi Belajar: 60 Menit
                    </div>
                    </p>
                    <p class="card-text" style="color:#FFFFFF; font-family:Poppins; margin-top:53px;" >
                    Belajar ngaji bersama guru ngaji secara offline dan privat. Cocok untuk Anda yang lebih suka pembelajaran 1 on 1 dengan guru.
                    </p>
              </div>
            </div> 

              <div class="card text-center" style="background: #3597D4">
              <img class="card-img-top" src="../img/icon/new/personal.png" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h3 style="color:#FFFFFF;font-family:Poppins; letter-spacing: -1px;">PERSONAL</h3> <br />
                    <p class="card-text" style="color:#3597D4; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    font-size: 50px;
                    line-height: 80px;
                    " >
                    50K/<span style="font-size: 25px;">pertemuan</span>
                    </p>
                    <br />
                    <div class="col-sm-6" style="color:#FFFFFF;
                    border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Tipe Kelas: Online
                    </div>
                    <div class="col-sm-6" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    ">
                        Max. Santri: 1 orang
                    </div>
                    <p>
                    <div class="col-sm-12" style="color:#FFFFFF;border: 2px solid #FFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-family: Poppins;
                    margin-top: 10px;
                    ">
                        Durasi Belajar: 60 Menit
                    </div>
                    </p>
                    <p class="card-text" style="color:#FFFFFF; font-family:Poppins; margin-top:53px;" >
                    Belajar ngaji bersama guru ngaji secara online dan privat. Cocok untuk Anda yang lebih suka pembelajaran 1 on 1 dengan guru.
                    </p>
              </div>
            </div>    

        </div>
    </div>
    <!--end price-->

     <div id="faq" class="container">
        <div id="tech-statement" class="text-left" style="margin-top: 50px;">
            <div class="vertical-heading">
                <h3 style="font-size:50px; font-family: 'Poppins'; font-weight: 1000;">FAQ</h3>
            </div>
        </div>
        <div class="panel-group" id="faqAccordion">
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0" style="background: #3597D4">
                    <h4 class="panel-title">
                        <div style="color:#FFFFFF; font-family:Poppins;">
                        Berapa tarif rata-rata dari kursus mengaji ?
                        </div>
                    </h4>
                </div>
                <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                         <p style="font-family:Poppins;">Tarif rata-rata dari kursus mengaji adalah sebesar Rp 50.000</p>
                         <p style="font-family:Poppins;">Tarif masing-masing guru juga akan bergantung pada :</p>
                         <p style="font-family:Poppins;">Pengalaman mengajar dari guru mengaji lokasi kursus (online atau langsung) dan jarak yang di tempuh untuk ke tempat mengajar durasi dan frekuensi kursus.
                         99% guru kami menawarkan kursus gratis untuk 1 jam pertama.</p>
                         <p style="font-family:Poppins;"><strong>Segera cek tarif guru ngaji kami yang siap mengajar di dekat wilayah anda.</strong></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1" style="background: #3597D4">
                    <h4 class="panel-title">
                        <div style="color:#FFFFFF; font-family:Poppins;">
                        Kenapa harus mengambil kursus mengaji ?
                        </div>
                    </h4>
                </div>
                <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                         <p style="font-family:Poppins;">Karena mengaji adalah pondasi penting yang harus kita pupuk sejak dini dan terus kita dawamkan hingga tua nanti, menjadi pedoman hidup serta apabila di amalkan secara istiqomah mampu menjadikan amal jariyah di akhirat kelak.</p>
                         <p style="font-family:Poppins;">Kursus mengaji dengan guru ngaji yang berpengalaman memberikan kamu pengalaman untuk belajar mengaji dengan pendekatan yang berbeda yang lebih efektif dan efisien.</p>
                         <p style="font-family:Poppins;">Segera pilih guru ngaji kamu dan pilih kursus nya, apakah itu kursus secara langsung atau online, semua terserah kamu !</p>
                         <p style="font-family:Poppins;">Fitur chat dengan guru ngaji memungkinkan untuk berkomunikasi langsung dengan Guru Ngaji kamu serta dapat memilih waktu dan mengatur kursus ngaji kamu dengan tenang.</p>
                         <p><strong>Cari guru ngaji sekarang hanya dengan 1 klik.</strong></p>    
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2" style="background: #3597D4">
                    <h4 class="panel-title">
                        <div style="color:#FFFFFF; font-family:Poppins;">
                        Apakah kami bisa kursus mengaji secara online ?
                        </div>
                    </h4>
                </div>
                <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                         <p style="font-family:Poppins;">Di Maungaji, 100% guru mengaji kami menawarkan <strong>kursus mengaji secara online</strong></p>
                         <p style="font-family:Poppins;"><strong>kursus mengaji secara online : </strong></p>
                         <p style="font-family:Poppins;">Alat yang digunakan untuk dapat menunjang kursus online diserahkan antara kesepakatan guru ngaji dan murid, bisa menggunakan Skype, Zoom, Google Meet, Facetime, Video call WA, dll.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3" style="background: #3597D4">
                    <h4 class="panel-title">
                        <div style="color:#FFFFFF; font-family:Poppins;">
                        Ada berapa guru yang tersedia untuk memberikan kursus mengaji ?
                        </div>
                    </h4>
                </div>
                <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                         <p style="font-family:Poppins;">Terdapat 124 guru mengaji dan akan terus bertambah yang menawarkan kursus mengaji dan siap membantu Anda.</p>
                         <p style="font-family:Poppins;">Kamu bisa cek profil mereka dan pilih guru ngaji yang paling sesuai dengan kebutuhan dan keinginan Anda.</p>   
                         <p style="font-family:Poppins;"><strong>Pilih guru ngaji kamu di lebih dari 124 profil guru ngaji yang ada di aplikasi kami.</strong></p>  
                    </div>
                </div>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4" style="background: #3597D4">
                     <h4 class="panel-title">
                        <div style="color:#FFFFFF; font-family:Poppins;">
                        Berapa nilai rata-rata yang diberikan oleh para murid kepada para guru mengaji ?
                        </div>
                    </h4>
                </div>
                <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                         <p style="font-family:Poppins;">Para murid memberikan nilai kepada guru mereka sebesar 5.0 dari skala 5.</p>
                         <p style="font-family:Poppins;">Jika kamu memiliki masalah dengan kursus kamu, layanan customer service kami tersedia untuk dapat memberikan kamu solusi terbaik (via telepon atau via email dari Senin sampai Minggu).</p>
                    </div>
                </div>
            </div>
        </div>
    <!--/panel-group-->
    </div>
    <!--END FAQ-->

    <!--article-->
    <div class="gtco-article">
        <div class="container">
            <div class="row">
                <div class="about-item text-left">
                    <div id="tech-statement">
                        <h3 style="font-size: 50px; font-family: 'Poppins'; font-weight: 1000;">Artikel</h3>
                    </div>
                    <div style="color:#8A8787">
                        <h5 style="font-size: 20px;">Kumpulan artikel terbaru yang ada di maungaji</h5>
                    </div>
               </div>  
            </div>
        </div>
        
        <div class="owl-carousel owl-carousel1 owl-theme" style="margin-top: -50px;">
            <div class="card text-left" style="background: #FFFFFF">
              <img class="img-article" src="<?php if (!empty($article)) { ?>
                    <?php echo $article['0']['jetpack_featured_media_url'] ?>
                    <?php } ?>" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <br />
                    <p class="card-text" style="color:#263238; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    line-height: 50px;
                    " >
                    <?php if (!empty($article)) { ?>
                    <?php echo $article['0']['title']['rendered'] ?>
                    <?php } ?>
                    </p>
                    <br />
              </div>

              <div class="text-center">
                <p>
                <a href="<?php if (!empty($article)) { ?> <?php echo $article['0']['link'] ?> <?php } ?>" class="btn btn-warning btn-lg" role="button" target="_blank" style="background-color: #FFD93B; text-transform:capitalize; border-radius: 20px; width: 250px; color: #263238; font-weight: 800;">Read More</a>
                </p>
               </div>
            </div>
            
            <div class="card text-left" style="background: #FFFFFF">
              <img class="img-article" src="<?php if (!empty($article)) { ?>
                    <?php echo $article['1']['jetpack_featured_media_url'] ?>
                    <?php } ?>" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <br />
                    <p class="card-text" style="color:#263238; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    line-height: 50px;
                    " >
                    <?php if (!empty($article)) { ?>
                    <?php echo $article['1']['title']['rendered'] ?>
                    <?php } ?>
                    </p>
                    <br />
              </div>
              <div class="text-center">
                <p>
                <a href="<?php if (!empty($article)) { ?>
                    <?php echo $article['1']['link'] ?>
                    <?php } ?>" class="btn btn-warning btn-lg" role="button" target="_blank" style="background-color: #FFD93B; text-transform:capitalize; border-radius: 20px; width: 250px; color: #263238; font-weight: 800;">Read More</a>
                </p>
               </div>
            </div>

            <div class="card text-left" style="background: #FFFFFF">
              <img class="img-article" src="<?php if (!empty($article)) { ?>
                    <?php echo $article['2']['jetpack_featured_media_url'] ?>
                    <?php } ?>" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <br />
                    <p class="card-text" style="color:#263238; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    line-height: 50px;
                    " >
                    <?php if (!empty($article)) { ?>
                    <?php echo $article['2']['title']['rendered'] ?>
                    <?php } ?>
                    </p>
                    <br />
              </div>
              <div class="text-center">
                <p>
                <a href="<?php if (!empty($article)) { ?>
                    <?php echo $article['2']['link'] ?>
                    <?php } ?>" class="btn btn-warning btn-lg" role="button" target="_blank" style="background-color: #FFD93B; text-transform:capitalize; border-radius: 20px; width: 250px; color: #263238; font-weight: 800;">Read More</a>
                </p>
               </div>
            </div>

            <div class="card text-left" style="background: #FFFFFF">
              <img class="img-article" src="<?php if (!empty($article)) { ?>
                    <?php echo $article['3']['jetpack_featured_media_url'] ?>
                    <?php } ?>" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <br />
                    <p class="card-text" style="color:#263238; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    line-height: 50px;
                    " >
                    <?php if (!empty($article)) { ?>
                    <?php echo $article['3']['title']['rendered'] ?>
                    <?php } ?>
                    </p>
                    <br />
              </div>
              <div class="text-center">
                <p>
                <a href="<?php if (!empty($article)) { ?>
                    <?php echo $article['3']['link'] ?>
                    <?php } ?>" class="btn btn-warning btn-lg" role="button" target="_blank" style="background-color: #FFD93B; text-transform:capitalize; border-radius: 20px; width: 250px; color: #263238; font-weight: 800;">Read More</a>
                </p>
               </div>
            </div>

            <div class="card text-left" style="background: #FFFFFF">
              <img class="img-article" src="<?php if (!empty($article)) { ?>
                    <?php echo $article['4']['jetpack_featured_media_url'] ?>
                    <?php } ?>" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <br />
                    <p class="card-text" style="color:#263238; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                    box-sizing: border-box;
                    border-radius: 16px;
                    font-weight: 600;
                    line-height: 50px;
                    " >
                    <?php if (!empty($article)) { ?>
                    <?php echo $article['4']['title']['rendered'] ?>
                    <?php } ?>
                    </p>
                    <br />
              </div>
              <div class="text-center">
                <p>
                <a href="<?php if (!empty($article)) { ?>
                    <?php echo $article['4']['link'] ?>
                    <?php } ?>" class="btn btn-warning btn-lg" role="button" target="_blank" style="background-color: #FFD93B; text-transform:capitalize; border-radius: 20px; width: 250px; color: #263238; font-weight: 800;">Read More</a>
                </p>
               </div>
            </div>

        </div>
    </div>
    <!--end article-->

    <div id="tech-statement" class="text-center" style="margin-top: 50px;">
        <div class="vertical-heading">
            <div class="media">
                Maungaji Telah diliput Oleh
            </div>
        </div>
    </div>

    <section id="pers" style="background-color: #FFFFFF;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn">
                    <div id="logo" class="text-center">
                            <div class="vertical-heading">
                                <ul>
                                <img src="../img/icon/koran-tempo.png" class="img-responsive img-media-tempo" width="200px" height="auto" alt="Koran Tempo">
                                <img src="../img/icon/go-muslim.png" class="img-responsive img-media-gomuslim" width="200px" height="auto" alt="gomuslim">
                                <img src="../img/icon/republika.png" class="img-responsive img-media-republika" width="200px" height="auto">
                                <img src="../img/icon/republika_ramadhan.png" class="img-responsive img-media-republika-ramadhan" width="200px" height="auto" alt="Republika">
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER START -->
    <footer class="ct-footer" style="background-color: #263238">
      <div class="container">
        <ul class="ct-footer-list text-center-sm">
            <li>
                <h2 class="ct-footer-list-header" style="color: #FFFFFF">Follow Kami</h2>
                <ul><li style="color:white"><a href="https://www.instagram.com/maungaji/" target="_blank"><i class="fa fa-instagram"></i><span>&nbsp;maungaji</span></a></li>
                <li style="color:white"><a href="https://www.facebook.com/maungaji/" target="_blank"><i class="fa fa-facebook"></i><span>&nbsp; maungaji</span></a></li>
                <li style="color:white"><a href="https://twitter.com/MaungajiIndo" target="_blank"><i class="fa fa-twitter"></i><span>&nbsp; maungajiIndo</span></a></li>
                <li style="color:white"><a href="https://www.youtube.com/channel/UCIp6c79qyzU98400W253WYQ" target="_blank"><i class="fa fa-youtube"></i><span>&nbsp; maungaji official</span></a></li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header" style="color: #FFFFFF">Hubungi Kami</h2>
                <ul><li style="color:white"><a href="" target="_blank"><i class="fa fa-envelope-square"></i><span>&nbsp;support@maungaji.co.id</span></a></li>
                <li style="color:white"><a href="https://api.whatsapp.com/send?text=Assalamua'alaikum&phone=6281213419253" target="_blank"><i class="fa fa-whatsapp"></i><span>&nbsp; +6281213419253</span></a></li>
                <li style="color:white"><a href="" target="_blank"><i class="fa fa-map-marker"></i><span>&nbsp; 
                Menara 165 lantai 4 Jl TB Simatupang kav1 Cilandak Jakarta Selatan</span></a></li></ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header" style="color: #FFFFFF">Info Perusahaan</h2>
                <ul>
                    <li><a href="https://maungaji-2019.s3-ap-southeast-1.amazonaws.com/additional/tnc.html">Kebijakan Privasi</a></li>
                    <li><a href="https://maungaji-2019.s3-ap-southeast-1.amazonaws.com/additional/tnc.html">Syarat dan Ketentuan</a></li>
                    <li><a href="">Karir</a></li>
                    <li><a href="https://maungaji.co.id/artikel">blog</a></li>
                </ul>
                <br/>
                <br/>
                <div class="inner-center">
                    <p>Copyright © <?php echo date("Y"); ?> PT Maungaji Teknologi Indonesia.&nbsp;<a href="">Privacy Policy</a></p>
                </div>
            </li>
            <li>
                <h2 class="ct-footer-list-header" style="color: #FFFFFF">Download</h2>
                <ul>
                    <li>
                        <div style="text-align: center;display: flex;flex-wrap: wrap;justify-content: center;">
                           <div class="button-download">
                                <a href="https://play.google.com/store/apps/details?id=com.maungaji" target="_blank">
                                    <img src="../img/icon/playstore.png" class="img-responsive">
                                </a>
                                <br>
                               <!--  <a href="https://apps.apple.com/id/app/maungaji/id1497420237" target="_blank">
                                    <img src="../img/icon/appstore.png" class="img-responsive">
                                </a> -->
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    </footer>
     <!--FOOTER END -->
    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

<script src="https://maungaji.co.id/js/jquery.min.js"></script>

<!--Bootstrap JS -->
<script src="https://maungaji.co.id/js/bootstrap/bootstrap.min.js"></script>

<!--Owl Carousel JS -->
<script src="https://maungaji.co.id/js/owl-carousel/owl.carousel.min.js"></script>

<!--Waypoints -->
<script src="https://maungaji.co.id/js/waypoints/jquery.waypoints.min.js"></script>

<!--Responsive Tabs JS -->
<script src="https://maungaji.co.id/js/responsive-tabs/jquery.responsiveTabs.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

 <!--Isotope -->
<script src="https://maungaji.co.id/js/isotope/isotope.pkgd.min.js"></script>

 <!--Magnific Popup -->
<script src="https://maungaji.co.id/js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!--Counter -->
<script src="https://maungaji.co.id/js/counter/jquery.counterup.min.js"></script>

<!--Easing -->
<script src="https://maungaji.co.id/js/easing/jquery.easing.1.3.min.js"></script>

<!--WOW JS -->
<script src="https://maungaji.co.id/js/wow/wow.min.js"></script>

<!--Custom JS -->
<script src="https://maungaji.co.id/js/script.js"></script>

<script async data-id="16951" src="https://cdn.widgetwhats.com/script.min.js"></script>

<script>
    (function () {
        "use strict";
        var carousels = function () {
        $(".owl-carousel1").owlCarousel({
          loop: true,
          center: true,
          margin: 0,
          responsiveClass: true,
          nav: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            680: {
              items: 2,
              nav: false,
              loop: false
            },
            1000: {
              items: 3,
              nav: true
            }
          }
        });
      };

  (function ($) {
    carousels();
  })(jQuery);
})();

</script>

</body>

</html>
