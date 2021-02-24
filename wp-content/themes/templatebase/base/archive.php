<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div id="sidebar-before-front-page" class="sidebar">

<?php dynamic_sidebar( 'nouvelle-zone' ); ?>

</div>
<section class="blog">
    <div class="container-fluid">
        <!-- Début de la Boucle. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

            echo '<div class="row justify-content-center">'?>
                    <?php the_post_thumbnail('img', array('class' => 'img-fluid'));
            echo '</div>' ?>


        <!-- Ce qui suit teste si l'Article en cours est dans la Catégorie 3. -->
        <!-- Si c'est le cas, le bloc div reçoit la classe CSS "post-cat-three". -->
        <!-- Sinon, le bloc div reçoit la classe CSS "post". -->
        <div class=" row post">
        <div class="col-12">
        <?php if ( in_category('3') ) { ?>
        <div class="post-cat-three">
            <?php } else { ?>
            
                
                <?php } ?>

                <!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
                <div class="titlebox unbuntuItalic">
                    <h2"><?php the_title(); ?></h2>
                </div>


                <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->
                <div class="entry">
                    <?php the_content(); ?>
                </div>

                <!-- Affiche une liste des Catégories des Articles séparées par des virgules. -->
                <!-- Affiche la Date. -->
                <div class="row justify-content-center">
                <i class="far fa-calendar-minus iconeblog mt-1 mr-1"></i><p><small class="date mr-5"><?php the_time('F jS, Y'); ?></small></p>
                    <i class="far fa-folder ml-5 iconeblog mt-1"></i><p class="postmetadata ml-1">Catégorie(s) <?php the_category(', ');
                    echo '</div>' ?></p>
                </div>
                </div>
            </div> <!-- Fin du premier bloc div -->

            <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->
            <?php endwhile; else: ?>

            <!-- Le premier "if" testait l'existence d'Articles à afficher. Cette -->
            <!-- partie "else" indique que faire si ce n'est pas le cas. -->
            <p>Sorry, no posts matched your criteria.</p>

            <!-- Fin REELLE de La Boucle. -->
            <?php endif; ?>

    </div>
</section>

<!-- fin ajout code -->
<!-- ***************************************************** -->

<?php get_footer(); ?>