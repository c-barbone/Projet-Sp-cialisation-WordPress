<?php /* Template Name: Agence */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
    <?php $logo = get_field("logo_agence");
      echo'<img class="img-fluid" src="'.$logo.'">';
      ?>
        <?php $descriptif = get_field("descriptif_agence");
      echo'<img class="img-fluid" src="'.$descriptif.'">';
      ?>

    </div>
</div>




<?php get_footer(); ?>