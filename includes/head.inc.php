<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php 
        // print out the name of the website
        if( !isset($site_title) ) { 
          echo "Hexia Templating Demo";
        }  
          echo "$site_title &ndash; $page_title"; 
        ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <meta name="author" content="<?php echo $site_author; ?>">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?php echo $baseDir; ?>css/normalize.css">

    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css'>

    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

    <!-- style.css -->
    <link rel="stylesheet" href="<?php echo $baseDir; ?>css/style.css">
    
  </head>

  <body>

<!-- wrapper -->
<div class="page-wrap">

  <!-- header -->
  <header class="header">

    <div class="container">
      <!-- logo -->
      <div class="logo">
        <a href="<?php echo $baseDir; ?>home.php" title="Hexia company logo.">
          <img src="<?php echo $baseDir; ?>img/hexia-logo.png" alt="Hexia Monthly awesome website logo." class="logo-img u-full-wdth">
        </a>
      </div>
      <!-- /logo -->

      <!-- nav -->
      <nav class="nav">
        <div class="menu">
          <ul>
            <li class="page_item"><a class="" href="<?php echo $baseDir; ?>home.php">Home</a></li>
            <li class="page_item"><a class="" href="<?php echo $baseDir; ?>catalog.php">Catalog</a></li>
            <li class="page_item"><a class="" href="<?php echo $baseDir; ?>shopping_cart.php">Shopping Cart</a></li>
            <li class="page_item"><a class="" href="<?php echo $baseDir; ?>fullfillment.php">Fullfillment</a></li>
            <li class="page_item"><a class="" href="<?php echo $baseDir; ?>profile_demo.php">Profile</a></li>
            <li class="page_item"><a class="" href="<?php echo $baseDir; ?>admin_demo.php">Admin</a></li>
            <li class="page_item"><a class="" href="<?php echo $baseDir; ?>featured_item.php">Featured</a></li>
            <!-- <li class="page_item"><a class="" href="#">Search</a></li> -->
          </ul>
        </div>
      </nav>
      <!-- /nav -->
      <div id="top-search">
        <?php 

          // if the suer is logged in display their username
          if ($_SESSION['signed_in']) {
              echo 'Hello ' . $_SESSION['user_name'] . ', not you? <a href="' . $baseDir . 'signout.php">sign out</a>.';
          } else {

          // else print the sign link and register links.
              echo '
                <a href="' . $baseDir . 'login.php">Sign in</a> 
                <a href="' . $baseDir . 'register.php">Register</a>';
          }
         ?>
        
        <form class="top-search_box">
          <input type="text" name="searchBox" placeholder="Search" />
          <button class="button-primary"><i class="fa fa-search"></i> Search</button>
        </form>
        <a href="<?php echo "$baseDir"; ?>shopping_cart.php" class="button"><i class="fa fa-shopping-cart"></i> Shopping Cart</a>
      </div>
    </div>
  </header>
  <!-- /header -->
