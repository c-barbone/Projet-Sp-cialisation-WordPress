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
  <div class="container-fluid">
  <nav class="navbar navbar-light bg-light fixed-top">
    <?= the_custom_logo(); ?>
    <span class="navbar text d-flex justify-content-center"><h1 class="tel">03 84 85 12 34</h1></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <?php $logomenu = get_field("logo_textmenu");
      echo'<img class="img-fluid logomenu" src="'.$logomenu.'">';
      ?>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <!--********************* Barre latérale réseaux sociaux********************* -->
  <!-- ************************************************************************ -->
  <div class="socialmedia">
    <div class="flex-auto">
    <div class="margin-remove-vertical">
           <a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> 
      </div>
      <div class="margin-remove-vertical mt-2">
           <a target="_blank" href="https://www.instagram.com/?hl=fr"><i class="fab fa-instagram"></i></a> 
      </div>  
      <div class="margin-remove-vertical mt-2">
           <a target="_blank" href="https://twitter.com/?lang=fr"><i class="fab fa-twitter"></i></a> 
      </div>
      <div class="margin-remove-vertical mt-2">
           <a target="_blank" href="https://www.linkedin.com/in/camille-barbone/"><i class="fab fa-linkedin-in"></i></a> 
      </div>
      <div class="margin-remove-vertical mt-2">
           <a target="_blank" href="https://vimeo.com/fr"><i class="fab fa-vimeo-v"></i></a> 
      </div>
      <div class="margin">
        <div class="tm-rotate-180 vertical mt-3">Retrouvez nous ici</div>
      </div>
    </div>
  </div>