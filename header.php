<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <?php wp_head(); ?> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Start Header/Navigation -->
  <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><?php echo get_field('site_logo', 'option');?><span>.</span></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsFurni">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'menu_class' => 'custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0'
        ));
        ?>

        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
          <li><a class="nav-link" href="#"><img src="<?php echo get_field('header-user', 'option');?>"></a></li>
          <li><a class="nav-link" href="#"><img src="<?php echo get_field('header-cart', 'option');?>"></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header/Navigation -->

