<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" class="blog" role="main">
        <h2 class="titreblog">Blog DebugDump Promo</h2>
        <?php while ( have_posts() ) : the_post(); ?>

        <!-- Debut div article blog -->
        <div class="blog_article justify-content-center text-center">



            



            <div class="titlebox unbuntuItalic">
                <h2"><?php the_title(); ?></h2>
            </div>

            <?php the_post_thumbnail('img', array('class' => 'img-fluid'));?>

            <div class="entry">

                <?php the_content(); ?>



            </div><!-- .entry-content -->


            <div class="row justify-content-center">
                <i class="far fa-calendar-minus iconeblog mt-1 mr-1"></i>
                <p><small class="date mr-5"><?php the_time('F jS, Y'); ?></small></p>
                <i class="far fa-folder ml-5 iconeblog mt-1"></i>
                <p class="postmetadata ml-1">Catégorie(s) <?php the_category(', ');
?></p>
            </div>


        </div><!-- Fin div article blog -->
        <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
</div><!-- #primary -->

<div id="sidebar-before-front-page" class="sidebar">

    <?php dynamic_sidebar( 'nouvelle-zone' ); ?>
</div>
<?php get_footer(); ?>