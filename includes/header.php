<?php
define('ROOT_PATH', 'http://localhost/charati/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php $title = isset($meta['title']) ? $meta['title'] : 'AS Charitable Trust';
    echo $title; ?></title>
    <meta name="description" content="<?php
    $title = isset($meta['description']) ? $meta['description'] : 'AS Charitable Trust';
    echo $meta['description']; ?>">
    <meta name="keywords" content="<?php
    $title = isset($meta['keywords']) ? $meta['keywords'] : 'AS Charitable Trust';
    echo $meta['keywords']; ?>">

  <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/animate.css">

  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/magnific-popup.css">

  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/aos.css">

  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/ionicons.min.css">

  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/flaticon.css">
  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/icomoon.css">
  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/style.css">
  <link rel="stylesheet" href="<?= ROOT_PATH ?>css/donation.css">
  
  <!-- I HAVE CRAETED -->
  <!-- <link rel="stylesheet" href="css/popup.css"> -->
  <link rel="icon" href="<?= ROOT_PATH ?>images/logos.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
     
    #snackbar {
      visibility: hidden;
      min-width: 250px;
      margin-left: -125px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 2px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
      font-size: 17px;
    }

    #snackbar.show {
      visibility: visible;
      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
      animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
      from {
        bottom: 0;
        opacity: 0;
      }

      to {
        bottom: 30px;
        opacity: 1;
      }
    }

    @keyframes fadein {
      from {
        bottom: 0;
        opacity: 0;
      }

      to {
        bottom: 30px;
        opacity: 1;
      }
    }

    @-webkit-keyframes fadeout {
      from {
        bottom: 30px;
        opacity: 1;
      }

      to {
        bottom: 0;
        opacity: 0;
      }
    }

    @keyframes fadeout {
      from {
        bottom: 30px;
        opacity: 1;
      }

      to {
        bottom: 0;
        opacity: 0;
      }
    }
    @media screen and (min-width: 1200px){
      
      .home-banner{
              margin-top:90px;

      }
    }


    @media screen and (max-width: 480px){
    #section-counter{

         margin-top:40px;

    }
  }
  
  </style>
 
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="<?= ROOT_PATH ?>images/logos.png" class="nav-logo"
          style="width: 100px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item  <?php if($page=='home'){echo 'active';}?>"><a href="<?= ROOT_PATH ?>index.php" class="nav-link">Home</a></li>
          <li class="nav-item <?php if($page=='about'){echo 'active';}?>"><a href="<?= ROOT_PATH ?>about.php" class="nav-link">About</a></li>
          <li class="nav-item <?php if($page=='Services'){echo 'active';}?>"><a href="<?= ROOT_PATH ?>services.php" class="nav-link">Services</a></li>

          <li class="nav-item"><a href="https://ascharitabletrust.com/BLOG/" class="nav-link">Blog</a></li>
          <li class="nav-item <?php if($page=='Gallery'){echo 'active';}?>"><a href="<?= ROOT_PATH ?>gallery.php" class="nav-link">Gallery</a></li>

          <li class="nav-item <?php if($page=='Contact'){echo 'active';}?>"><a href="<?= ROOT_PATH ?>contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item blink" style="background-color:red"><a href="<?= ROOT_PATH ?>donate.php" class="nav-link">Donate Now</a></li>
          </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
