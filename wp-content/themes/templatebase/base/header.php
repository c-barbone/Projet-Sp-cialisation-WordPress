<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="container-fluid containerglobal">
    <div class="fixed-top">
    <?= the_custom_logo(); ?>
    <div class="tel">03 84 85 12 34</div>
    <button class="logoM"><img class="img-fluid logomenu" src="http://localhost/wordpress/wp-content/uploads/2021/02/MenuLogo.png" alt=""></button>
  <nav class="navbar">
    <ul>
    <?php
                  wp_nav_menu( array(
                  'container' =>'nav',
                  'theme_location' => '',
                  'menu_id' => '',
                  'echo' => true,
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'depth' => 0,
                  'items_wrap' => '%3$s',
                  'walker' => '')
                  );
                  ?>
    </ul>
  </nav>
    </div>
  
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