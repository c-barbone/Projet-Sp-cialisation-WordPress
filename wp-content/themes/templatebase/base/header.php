<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content=" Bienvenue dans notre Agence web éco fiendly">

  <!-- Title and slogan display -->
  <title><?= bloginfo('name');?> - <?= bloginfo('description')?></title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/d69db61c7b.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="<?= get_stylesheet_uri()?>">

  <!-- Logo tab navigation -->
  <link rel="icon" type="image/png" href="http://localhost/wordpress/wp-content/uploads/2021/02/DdpLogo.png" />

</head>

<body>
  <nav class="navbar navbar-dark fixed-top">
  <a class="navbar-brand" href="#">
        <div class="logoagence">
          <?php the_custom_logo(); ?>
        </div>
      </a>
    <span class="navbar-text d-flex justify-content-center">
      <!-- <h1 class="mt-3 mr-5">03.84.85.12.34</h1> -->
    </span>

    <?php $logomenu = get_field("logo_textmenu");
      echo'<img class="img-fluid logomenu" src="'.$logomenu.'">';
      ?>


    <!-- Collapsible content -->
    <div class="collapse navbar-collapse left" id="navbarSupportedContent">
      <center>
        <p class="navbar-text text-center">
          <h2 class="nom-menu">burger-café & bar</h2>
        </p>
      </center>
      <div class="container-fluid " id="lolcontainer">
        <div class="row" id="lolcontent">
          <ul class="navbar-nav col-6 d-flex justify-content-end">
            <li class="nav-item active">
              <a class="nav-link text-uppercase active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#apropos">à propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#burgers">Burgers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#bar">bar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#petitdejeuner">petit déjeuner</a>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#evenement">évènement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#contact">contact</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  