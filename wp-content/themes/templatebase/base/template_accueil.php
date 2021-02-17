<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>
  <div class="row slider d-flex align-items-center">
    <section class="cr-container d-flex justify-content-center">

      <input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked />
      <label for="select-img-1" class="cr-label-img-1">1</label>

      <input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
      <label for="select-img-2" class="cr-label-img-2">2</label>

      <input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
      <label for="select-img-3" class="cr-label-img-3">3</label>

      <input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
      <label for="select-img-4" class="cr-label-img-4">4</label>

      <div class="clr"></div>
      <?php $slide = get_field("slider");
      for ($i=0; $i < count($slide); $i++){
                  echo '<style>.cr-container input.cr-selector-img-'.[$i].':checked ~ .cr-bgimg,
                        .cr-bgimg div span:nth-child('.[$i].'){
                        background-image:url('.$slide[$i]['image_slider'].');
                        }</style>';
                }
                // var_dump($slide);
      ?>
      <div class="cr-bgimg col-12">
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
          echo $slide[0]['image_slider']
          ?>

      </div>
    </section> 
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
              echo'<div class="row"><div class="col-md-6 col-sm-12 d-flex justify-content-center"><img class="img-fluid" src="'.$imgag.'"></div>';
            $titleag = get_field("titre_accueilg");
              echo'<div class="col-md-6 col-sm-12 mt-5"><h2 class="titreaccueil">'.$titleag.'</h2>';
            $textag = get_field("texte_accueilg");
              echo'<p class="textaccueil mt-3 d-flex align-items-center">'.$textag.'</p></div></div>';     
      ?>
          <?php $imgad = get_field("image_accueild");
                  echo'<div class="row d-flex flex-md-row-reverse"><div class="col-md-6 col-sm-12 d-flex justify-content-center"><img class="img-fluid" src="'.$imgad.'"></div>';
                $titlead = get_field("titre_accueild");
                  echo'<div class="col-md-6 col-sm-12 mt-5"><h2 class="titreaccueil">'.$titlead.'</h2>';
                $textad = get_field("texte_accueild");
                  echo'<p class="textaccueil">'.$textad.'</p></div></div>';
      ?>


<?php get_footer(); ?>