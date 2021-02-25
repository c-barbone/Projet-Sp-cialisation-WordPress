<?php /* Template Name: Agence */ ?>

<?php get_header(); ?>


    <div class="row justify-content-center rowagence">
      <?php $logo = get_field("logo_pagea");
        echo'<img class="img-fluid logofiendly" src="'.$logo.'">';
        ?>
    </div>
    <span class="triangleb"></span>
    <span class="triangleh"></span>
    <div class="row justify-content-center text-center descriptifagence">  
        <div class="col-10 ">
          <?php $descriptif = get_field("descriptif_pagea");
          echo'<p class="descriptifpagea">'.$descriptif.'"</p>';
          ?>
        </div> 
    </div>
    <div class="row justify-content-center mt-5">
        <?php $titrepage = get_field("titre_pagea");
        echo'<h2 class="descriptifpagea titre_pagea">'.$titrepage.'</h2>';
        ?>
    </div>
    <div class=" row justify-content-center ml-5 pl-5 presagence">
           <div class="col-lg-8 col-sm-12 colpresentation">    
              <?php $equipe = get_field("presentation_agence");
                for ($i=0; $i < count($equipe); $i++){
                echo '<div class="view view-sixth "><div class="nom">'.$equipe[$i]['nom'].'</div><div class="statut">'.$equipe[$i]['statutentreprise'].'</div><img class="img-fluid" src="'.$equipe[$i]['photo'].'"/><div class="mask"><h2>'.$equipe[$i]['titre_agence'].'</h2><p>'.$equipe[$i]['texte_agence'].'</p>
                <a class="info" href="mailto:'.$equipe[$i]['email'].'">'.$equipe[$i]['email'].'</a><br>
                <a class="info" href="'.$equipe[$i]['lien_linkedin'].'" target="_blank"><img class="logolinkedin" src="'.$equipe[$i]['linkedin'].'"></i></a></div></div>';
                }
              ?>
            </div> 
    </div> 




<?php get_footer(); ?>