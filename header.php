<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysia</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">

    <?php wp_head(); ?>

</head>


<body>

    <!--
      - #HEADER
    -->
  <div class="container"> 
    <header class="header" data-header>
      <div class="container">
        <div class="navbar-brand">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Educator Logo">
        </div>        

        <div class="header-actions">
            <?php

              wp_nav_menu(
                array(
                  'theme_location' => 'top-menu',
                  'menu' => 'main-menu',
                  'container' => 'ul',
                  'menu_class' => 'navbar-nav'
                )
              )

            ?>
          <!-- <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.html">Accueil</a>
            </li>
            <li class="nav-item">
              <a href="vie_scolaire.html">Vie Scolaire</a>
            </li>
            <li class="nav-item">
              <a href="inscription.html">Inscription</a>
            </li>
            <li class="nav-item">
              <a href="actualite.html">Actualit??</a>
            </li>
            <li class="nav-item">
              <a href="formulaire.html">Formulaire</a>
            </li>
            <li class="nav-item">
              <a href="temoignages.html">T??moignages </a> 
            </li>
          </ul> -->
        </div>

        <button class="nav-toggle-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>
      </div>
    </header>