<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>
<div class="container-fluid fondslide d-flex justify-content-center">
  <div class="row slider justify-content-center align-items-center">
    <!-- slider desktop -->
    <section class="cr-container ">

      <input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked />
      <label for="select-img-1" class="cr-label-img-1">1</label>

      <input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
      <label for="select-img-2" class="cr-label-img-2">2</label>

      <input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
      <label for="select-img-3" class="cr-label-img-3">3</label>

      <input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
      <label for="select-img-4" class="cr-label-img-4">4</label>

      <div class="clr"></div>
      <style>
        <?php $slide=get_field("slider");

        for ($i=0; $i < count($slide); $i++) {
          echo '.cr-container input.cr-selector-img-'.($i+1).':checked ~ .cr-bgimg,
        .cr-bgimg div span:nth-child('.($i+1).') {
            background-image: url('.$slide[$i]['image_slider'].');
          }

          ';

        }

        ?>
      </style>
      <div class="cr-bgimg">
        <div>
          <span>Slice 1 - Image 1</span>
          <span>Slice 1 - Image 2</span>
          <span>Slice 1 - Image 3</span>
          <span>Slice 1 - Image 4</span>
        </div>
        <div>
          <span>Slice 2 - Image 1</span>
          <span>Slice 2 - Image 2</span>
          <span>Slice 2 - Image 3</span>
          <span>Slice 2 - Image 4</span>
        </div>
        <div>
          <span>Slice 3 - Image 1</span>
          <span>Slice 3 - Image 2</span>
          <span>Slice 3 - Image 3</span>
          <span>Slice 3 - Image 4</span>
        </div>
        <div>
          <span>Slice 4 - Image 1</span>
          <span>Slice 4 - Image 2</span>
          <span>Slice 4 - Image 3</span>
          <span>Slice 4 - Image 4</span>
        </div>
      </div>
      <div class="cr-titles">
        <?php
          for ($i=0; $i < count($slide); $i++){
            echo "<h3><span>".$slide[$i]['titre_slider']."</span><span>".$slide[$i]['description_slider']."</span></h3>";
          }
          ?>

      </div>
    </section>
    <!-- fin slider desktop -->
    <!-- slider mobile -->
    <section class=" slidermobile">
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
    </section>
    <!-- fin slider mobile -->
  </div>
</div>
<div class="row ">
  <div class="col-12 d-flex justify-content-center align-items-center">
    <?php $logo = get_field("logo_t");
        echo'<img class="img-fluid logo_t" src="'.$logo.'">';
        ?>
    <?php $text = get_field("texte_l");
        echo'<h2 class="textlogo d-flex align-items-center">'.$text.'</h2>';
        ?>
  </div>
</div>
<?php $imgag = get_field("image_accueilg");
              echo'<div class="row"><div class="col-lg-6 col-sm-12 d-flex justify-content-center"><img class="img-fluid" src="'.$imgag.'"></div>';
            $titleag = get_field("titre_accueilg");
              echo'<div class="col-lg-6 col-sm-12 mt-5"><h2 class="titreaccueil1 mb-2">'.$titleag.'</h2>';
            $textag = get_field("texte_accueilg");
              echo'<p class="textaccueil1">'.$textag.'</p></div></div>';     
      ?>
<?php $imgad = get_field("image_accueild");
                  echo'<div class="row bloctxaccueil"><div class="col-lg-6 col-sm-12 order-lg-last d-flex justify-content-center"><img class="img-fluid image2" src="'.$imgad.'"></div>';
                $titlead = get_field("titre_accueild");
                  echo'<div class="col-lg-6 col-sm-12 order-lg-first mt-5 "><h2 class="titreaccueil2 mb-2">'.$titlead.'</h2>';
                $textad = get_field("texte_accueild");
                  echo'<p class="textaccueil2">'.$textad.'</p></div></div>';
      ?>


<?php get_footer(); ?>