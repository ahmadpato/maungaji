<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    if($murid){
         foreach ($murid as $key => $value) {
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
    <meta name="keywords" content="guru ngaji online, belajar ngaji, belajar iqro, belajar al-quran, belajar tahsin, hafidz qur'an, aplikasi ngaji online, belajar iqro online, belajar al-quran online, ngaji online, privat ngaji, guru ngaji, guru ngaji profesional, privat ngaji online, ngaji, guru ngaji berkualitas">
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

     <!--Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">

      <!--Slick  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">

     <!--jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
            font-size: 45.5px;
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
            margin: 1px;
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
            right: 20px;
            left: 0;
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
            /*position: absolute;*/
            /*color: #FFF;*/
            padding-top: 10px;
            height: 250px;
            width: 550px;
            border: 2px solid #FFF;
            box-sizing: border-box;
            border-radius: 16px;
            font-family:Poppins; 
            margin-left: 3rem;
            /*font-size:16px; */
        }
        .gtco-testimonials {
          position: relative;
          margin-top: 30px;
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
        .gtco-testimonials .owl-dots {
          text-align: center;
        }
        .gtco-testimonials .owl-dots span {
          position: relative;
          height: 10px;
          width: 10px;
          border-radius: 50%;
          display: block;
          background: #fff;
          border: 2px solid #01b0f8;
          margin: 0 5px;
        }
        .gtco-testimonials .owl-dots .active {
          box-shadow: none;
        }
        .gtco-testimonials .owl-dots .active span {
          background: #01b0f8;
          box-shadow: none;
          height: 12px;
          width: 12px;
          margin-bottom: -1px;
        }
        .gtco-testimonials .card {
          /*background: #3597D4;*/
          box-shadow: 0 8px 30px -7px #c9dff0;
          margin: 0 20px;
          padding: 0 10px;
          border-radius: 20px;
          border: 0;
        }
        .gtco-testimonials .card .card-img-top {
          max-width: 100px;
          border-radius: 50%;
          margin: 15px auto 0;
          box-shadow: 0 8px 20px -4px #95abbb;
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
        * {
            box-sizing: border-box;
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
                                <li><a href="">ARTIKEL</a></li>
                                <li><a href="">FAQ</a></li>
                                <li><a href="">TENTANG KAMI</a></li>
                                <li a href="" class="teacher" target="_blank">CARI GURU NGAJI</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Mobile Menu -->
                    <div id="mobile-nav">
                         <!--Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>
                        <div id="mobile-nav-content">
                            <ul class="nav">
                                <li><a href="">ARTIKEL</a></li>
                                <li><a href="">FAQ</a></li>
                                <li><a href="">TENTANG KAMI</a></li>
                                <li a href="" class="teacher" target="_blank">CARI GURU NGAJI</a></li>
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
        <section>
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-6 col-sm-6">
                        <p><h3>Belajar Mengaji</h3></p>
                        <p><h3>Makin Mudah</h3></p>
                        <br>
                        <p>
                        <h4 style="color: #FFF;">dengan Guru Ngaji Terbaik se-Indonesia <span style="color: #FFE604">Tatap Muka Langsung</span> ataupun <span style="color: #FFE604">Kelas Online.</span> Mudah, Murah dan Sesuai Syariah.
                        </h4>
                        </p>
                        <br>
                        <div style="text-align: center;display: flex;flex-wrap: wrap;justify-content: left;">
                            <div class="button-download">
                                <a href="https://apps.apple.com/id/app/maungaji/id1497420237" target="_blank">
                                    <img src="https://maungaji.co.id/img/logo/appstore.svg">
                                </a>
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
                    <div class="col-md-2 col-sm-2" style="padding-left:100px;">
                        <ul>
                            <li><img src="../img/icon/new/wa_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></li>
                            <br>
                            <li><img src="../img/icon/new/ig_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></li>
                            <br>
                            <li><img src="../img/icon/new/fb_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></li>
                            <br>
                            <li><img src="../img/icon/new/tw_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></li>
                            <br>
                            <li><img src="../img/icon/new/ln_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid"> 
                <div class="row">
                    <div class="square-jdid">
                        <div class="col-md-6 col-sm-6">
                            <p style="margin-top: 20px;">
                                <span style="font-size: 16px; font-family:Poppins; margin-left: 15rem; color: #000000;"> Beli Paket Ngaji Murah di JD.ID 
                                    <span style="margin-left: 5rem; font-style: italic; font-weight: bold; font-size: 20px; letter-spacing: 0.05em;">
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
                    </div>
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

    <div class="content-box-md">
        <div class="container">
            <div class="row">
                <div class="about-item text-left">
                    <div id="tech-statement">
                        <h3 style="font-size: 45.5px;">Pilihan Kelas</h3>
                    </div>
                    <div class="new-text">
                        <p style="font-size: 24px;">Di Maungaji kamu bisa memilih salah satu di antara tiga jenis kelas</p>
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
                        <img src="../img/ilustrasi/tahsin_Illust.png" class="img-responsive" alt="Belajar Ngaji" height="auto" style="height: 250px; position: absolute; top: 10%; left: 1%;">               
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

    <div class="content-box-md" style="margin-top:-100px;">
        <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6">
                    <div>
                        <img src="../img/guru-ngaji/santri.png" class="img-responsive" alt="Belajar Ngaji" height="auto">               
                    </div>
                </div>
                <div class="col-md-6 sm-6">
                    <div class="row">
                        <div class="text-student text-center col-md-9 col-md-push-3" style="font-size:48px;">Santri Ngaji</div>
                        <div class="text-count-student text-center col-md-3 col-md-pull-9" style="font-size:48px;">
                        <?php if (!empty($value)) { ?>
                        <?php echo $value[0]['count'] ?>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="text-left">
                        <p style="font-family:Poppins; font-size:24px; margin-left:15px; margin-top: 150px;">
                        Saat ini Maungaji telah memiliki santri-santri dari segala jenis usia, tempat tinggal dan latar belakang. Antusias belajar ngaji yang disebarkan oleh mereka membuat kami bersemangat untuk terus memberikan fasilitas terbaik bagi para pembelajar Qur’an.
                        </p>
                    </div>   
                    <div class="text-center">
                        <p class="text-register-student text-center" style="color: #3597D4; margin-top: 175px;">
                        Daftar Jadi Santri Ngaji
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
                       <div class="text-teacher text-center col-md-9 col-md-push-3" style="font-size:48px;">GURU Ngaji</div>
                       <div class="text-count-student text-center col-md-3 col-md-pull-9" style="font-size:48px;">
                       <?php if (!empty($value)) { ?>
                       <?php echo $value[1]['count'] ?>
                       <?php } ?>
                       </div>   
                    </div>
                    <div class="text-left">
                        <p style="font-family:Poppins; font-size:24px; margin-left:15px; margin-top: 150px;">
                        Insya Allah mitra guru ngaji di Maungaji memiliki 3 poin kompetensi yakni <span style="color: #3597D4">Terpercaya, Berpengalaman</span>, dan <span style="color: #3597D4">Terkualifikasi.</span> Maungaji juga membuka kesempatan bagi Guru Ngaji untuk bergabung bersama kami sebagai mitra maungaji.
                        </p>
                    </div>   
                    <div class="text-center">
                        <p class="text-register-student text-center" style="color: #3597D4; margin-top: 205px;">
                        Daftar Jadi Guru Ngaji
                        </p>
                    </div>   
                </div>
                
                <div class="col-md-6 sm-6">
                    <div class="row">
                        <img src="../img/guru-ngaji/guru-ngaji.png" class="img-responsive" alt="Belajar Ngaji" height="auto">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-mau text-left">
        <section>
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-12 col-sm-12">
                    <p><h3>Kelebihan Maungaji</h3></p>
                    </div>    
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-6 col-sm-6 text-center square-kelebihan-maungaji" style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        <p>
                            <img src="../img/ilustrasi/shield.png" style="left: 10%;" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
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
                            <img src="../img/ilustrasi/report.png" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
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
                            <img src="../img/ilustrasi/certificate.png" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
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

    <div class="gtco-testimonials">
        <div class="container">
            <div class="row">
                <div class="about-item text-left" style="margin-top: 100px;">
                    <div id="tech-statement">
                        <h3 style="font-size: 50px;">Testimoni</h3>
                    </div>
               </div>  
            </div>
        </div>
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div>
            <div class="card text-center" style="background: #3597D4"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5 style="color:#FFFFFF;">Desi Aulia Pratama <br />
                <p class="card-text" style="color:#FFFFFF; font-family:Poppins; margin-top:53px;" >Maungaji sangat bermanfaat bagi siapa saja yang ingin belajar ngaji, bagi guru yang ingin mengajar maupun bagi murid yang ingin belajar. Dapat memilih jadwal yang sesuai, guru dan materi yang diinginkan juga. Sangat Memudahkan dan fleksibel.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5>Coretininay<br />
                <p class="card-text" style="margin-top:53px;">Sangat bermanfaat untuk menemukan guru ngaji sesuai jadwal yang diinginkan.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center" style="background: #3597D4"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5 style="color:#FFFFFF;">Putri Dewi Puspita<br />
                <p class="card-text" style="color:#FFFFFF; margin-top:53px;">Maungaji sangat bermanfaat dan memudahkan umat untuk mencari guru ngaji berkualitas.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
              <div class="card-body" style="font-family:Poppins;">
                <h5>Yuniar Fella Anggaraini<br />
                <p class="card-text" style="margin-top:53px;">Sangat membantu dan memudahkan bagi mualaf seperti saya dalam belajar mengaji. Guru nya juga mumpuni. Makasih banyak Maungaji,recomended!.</p>
              </div>
            </div>
          </div>
        </div>
  </div>

<!-- <div class="container">   
    <div id="tech-statement" class="text-center">
        <div class="vertical-heading">
            <h3><strong>Artikel Terbaru</strong></h3>
        </div>
    </div>      
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="<?php echo base_url('/img/icon/waktu_membaca_quran.png') ?>" alt="Waktu Baca" width="100%" height="auto">
            <div class="caption">
                <h3>Ini Loh Waktu Paling Baik Untuk Baca Al-Qur’an</h3>
                <p><a href="https://maungaji.co.id/artikel/index.php/2020/03/25/ini-loh-waktu-paling-baik-untuk-baca-al-quran/" class="btn btn-primary" role="button">Lihat</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="<?php echo base_url('/img/icon/quran_qorona.png') ?>" alt="Al-Qur’an Qorona" width="100%" height="auto">
            <div class="caption">
                <h3>Sebelum Virus Corona, Al-Qur’an Sudah Ingatkan</h3>
                <p><a href="https://maungaji.co.id/artikel/index.php/2020/03/23/sebelum-virus-corona-al-quran-sudah-ingatkan-tinggal-di-rumah-saat-bahaya/" class="btn btn-primary" role="button">Lihat</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="<?php echo base_url('/img/icon/fun_learning.png') ?>" alt="Fun Learning" width="100%" height="auto">
            <div class="caption">
                <h3>Belajar Mengaji Jadi Mudah dan Menyenangkan</h3>
                <a href="https://maungaji.co.id/artikel/index.php/2020/04/04/metode-fun-learning-quran-untuk-anak/" class="btn btn-primary" role="button">Lihat</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="<?php echo base_url('/img/icon/isra_miraj.png') ?>" alt="Isra Miraj" width="100%" height="auto" width="100%" height="auto">
            <div class="caption">
                <h3>Kisah Isra Miraj: Langit Cemburu Pada Bumi</h3>
                <p><a href="https://maungaji.co.id/artikel/index.php/2020/03/22/kisah-isra-miraj-langit-cemburu-pada-bumi-lalu-merayu-allah-agar-dikunjungi-nabi-muhammad/" class="btn btn-primary" role="button">Lihat</a></p>
            </div>
        </div>
    </div>
</div>
<hr>
<br/> -->

<div id="tech-statement" class="text-center">
    <div class="vertical-heading">
        <h3><strong>Maungaji Telah diliput Oleh</strong></h3>
    </div>
</div>

<section id="pers" style="background-color: #FFFFFF;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn">
                <div id="logo" class="text-center">
                        <div class="vertical-heading">
                            <!-- <ul>
                            <img src="<?php echo base_url('/img/icon/koran-tempo.png') ?>" class="img-responsive" width="200px" height="auto" alt="Koran Tempo" style="display: inline-block; margin-right: 15px;">
                            <img src="<?php echo base_url('/img/icon/go-muslim.png') ?>" class="img-responsive" width="200px" height="auto" alt="gomuslim" style="display: inline-block; margin-right: 15px;">
                            <img src="<?php echo base_url('/img/icon/republika.png') ?>" class="img-responsive" width="200px" height="auto" style="display: inline-block; margin-right: 15px;">
                            <img src="https://maungaji.co.id/img/icon/republika_ramadhan.png" class="img-responsive" width="200px" height="auto" alt="Republika" style="display: inline-block; margin-right: 15px;">
                            </ul> -->
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--FOOTER START -->
<footer class="ct-footer">
  <div class="container">
    <ul class="ct-footer-list text-center-sm">
        <li>
            <h2 class="ct-footer-list-header">Info Perusahaan</h2>
            <ul><li><a href="">Tentang Kami</a></li>
                <li><a href="">Kebijakan Privasi</a></li>
                <li><a href="https://maungaji-2019.s3-ap-southeast-1.amazonaws.com/additional/tnc.html">Syarat dan Ketentuan</a></li>
                <li><a href="https://maungaji-2019.s3-ap-southeast-1.amazonaws.com/additional/faq.html">FAQ</a></li>
                <li><a href="">Karir</a></li>
                <li><a href="https://maungaji.co.id/artikel/">blog</a></li>
            </ul>
        </li>
        <li>
            <h2 class="ct-footer-list-header">Follow</h2>
            <ul><li style="color:white"><a href="https://www.instagram.com/maungaji/" target="_blank"><i class="fa fa-instagram"></i><span>&nbsp;maungaji</span></a></li>
            <li style="color:white"><a href="https://www.facebook.com/maungaji/" target="_blank"><i class="fa fa-facebook"></i><span>&nbsp; maungaji</span></a></li>
            <li style="color:white"><a href="https://twitter.com/MaungajiIndo" target="_blank"><i class="fa fa-twitter"></i><span>&nbsp; maungajiIndo</span></a></li>
            <li style="color:white"><a href="https://www.youtube.com/channel/UCIp6c79qyzU98400W253WYQ" target="_blank"><i class="fa fa-youtube"></i><span>&nbsp; maungaji official</span></a></li>
            </ul>
        </li>
        <li>
            <h2 class="ct-footer-list-header">Hubungi Kami</h2>
            <ul><li style="color:white"><a href="" target="_blank"><i class="fa fa-envelope-square"></i><span>&nbsp;support@maungaji.co.id</span></a></li>
            <li style="color:white"><a href="" target="_blank"><i class="fa fa-whatsapp"></i><span>&nbsp; 0813-8227-0775</span></a></li>
            <li style="color:white"><a href="" target="_blank"><i class="fa fa-map-marker"></i><span>&nbsp; 
            jl. radio dalam, gg.minank kramat rt 001/014, no2 Kebayoran Baru, Kota Jakarta Selatan, 12140.</span></a></li></ul>
        </li>
        <li>
            <h2 class="ct-footer-list-header">Download</h2>
            <ul>
                <li>
                    <div style="text-align: center;display: flex;flex-wrap: wrap;justify-content: center;">
                       <div class="button-download">
                            <a href="https://play.google.com/store/apps/details?id=com.maungaji" target="_blank">
                                <img src="../img/icon/playstore.png" class="img-responsive">
                            </a>
                            <br>
                            <a href="https://apps.apple.com/id/app/maungaji/id1497420237" target="_blank">
                                <img src="../img/icon/appstore.png" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>
  <div class="inner-center">
        <p>Copyright © 2020 PT Maungaji Teknologi Indonesia.&nbsp;<a href="">Privacy Policy</a></p>
  </div>

</footer>
 <!--FOOTER END -->
<script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
    });
</script>
<script src="<?php echo base_url('/js/calculate.js') ?>"></script>

<script src="https://maungaji.co.id/maungaji/js/jquery.min.js"></script>

<!--Bootstrap JS -->
<script src="https://maungaji.co.id/maungaji/js/bootstrap/bootstrap.min.js"></script>

<!--Owl Carousel JS -->
<script src="https://maungaji.co.id/maungaji/js/owl-carousel/owl.carousel.min.js"></script>

<!--Waypoints -->
<script src="https://maungaji.co.id/maungaji/js/waypoints/jquery.waypoints.min.js"></script>

<!--Responsive Tabs JS -->
<script src="https://maungaji.co.id/maungaji/js/responsive-tabs/jquery.responsiveTabs.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

<!--Gojek  -->
<script type="text/javascript" src="https://maungaji.co.id/maungaji/js/slick.js"></script>

 <!--Isotope -->
<script src="https://maungaji.co.id/maungaji/js/isotope/isotope.pkgd.min.js"></script>

 <!--Magnific Popup -->
<script src="https://maungaji.co.id/maungaji/js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!--Counter -->
<script src="https://maungaji.co.id/maungaji/js/counter/jquery.counterup.min.js"></script>

<!--Easing -->
<script src="https://maungaji.co.id/maungaji/js/easing/jquery.easing.1.3.min.js"></script>

<!--WOW JS -->
<script src="https://maungaji.co.id/maungaji/js/wow/wow.min.js"></script>

<!--Custom JS -->
<script src="https://maungaji.co.id/maungaji/js/script.js"></script>

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
