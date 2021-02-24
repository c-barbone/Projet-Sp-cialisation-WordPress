<?php /* Template Name: contact */ ?>

<?php get_header(); ?>

<section class="pagecontact">
    <div class="row ">
        <div class="col-12 d-flex justify-content-center formulaire">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<div class="row justify-content-center mapcontact mx-1">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.8863249110327!2d5.551161015598206!3d46.668505379133585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478cd78d87b0768b%3A0x6dc52ab5581eb62b!2s2%20Route%20de%20Montaigu%2C%2039000%20Lons-le-Saunier!5e0!3m2!1sfr!2sfr!4v1602236588098!5m2!1sfr!2sfr"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>
<?php get_footer(); ?>