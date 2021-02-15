<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>

<div class="container-fluid fondslide">
  <div class="row">
    <?php $slide = get_field("slider"); ?>
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?=$slide[0]["image_slider"]?>" class="d-block w-100" alt="...">
          </div>
          <?php
    
                for ($i=1; $i < count($slide); $i++){
                  echo '<div class="carousel-item">
                  <img src="'.$slide[$i]["image_slider"].'" class="d-block w-100" alt="...">
                  </div>';
                }
                ?>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <?php
                
                for ($i=1; $i < count($slide); $i++){
                  echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$i.'">';
                }
                ?>
        </ol>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
        <?php $logo = get_field("logo_t");
      echo'<img class="img-fluid" src="'.$logo.'">';
      ?>
        <?php $text = get_field("texte_l");
      echo'<h2 class="textelogo mt-5 pt-5">'.$text.'</h2>';
      ?>
    </div>
  </div>

  <?php $presentation = get_field("presentation_accueil"); 
    for ($i=0; $i < count($presentation); $i++){
      echo '<h3 class="test">'.$presentation[$i]["titre_presentation"].'</h3>';
      echo '<p class="paragraphe">'.$presentation[$i]["texte_presentation"].'</p>';
      echo '<img class="img-fluid" src="'.$presentation[$i]["image_presentation"].'">';
    }
  ?>

  <?php get_footer(); ?>