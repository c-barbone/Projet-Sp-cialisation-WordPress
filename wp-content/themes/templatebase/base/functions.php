<?php 

// on créé une zone pour le menu 
register_nav_menu( 'menuheader', 'Menu du Header' );
register_nav_menu( 'menufooter', 'Menu du Footer' );


function header_widgets_init() {
 
register_sidebar( array(

 'name' => 'Ma zone que je viens de créer',
 'id' => 'nouvelle-zone',
 'before_widget' => '<div class="mettez-ce-que-vous-voulez">',
 'after_widget' => '</div>',
 'before_title' => '<h2 class="mettez-ce-que-vous-voulez">',
 'after_title' => '</h2>',
 ) );
 
 
register_sidebar( array(

 'name' => 'Ma zone que je viens de créer 2',
 'id' => 'nouvelle-zone-2',
 'before_widget' => '<div class="mettez-ce-que-vous-voulez">',
 'after_widget' => '</div>',
 'before_title' => '<h2 class="mettez-ce-que-vous-voulez">',
 'after_title' => '</h2>',
 ) );
 
 }

add_action( 'widgets_init', 'header_widgets_init' );


//‘name’ = nom de la “widget area” qui apparaîtra dans votre administration WordPress
//‘id’ = identifiant unique de votre “widget area”
//‘before_widget’ = choisir une balise HTML à ouvrir avant votre widget (<div>, <li> etc…) et profitez-en pour y ajouter une classe qui pourra vous aider lors de la customisation CSS (étape 5)
//‘after_widget’ = fermer la balise (</div>, </li> etc…)
//‘before_title’ = choisir une balise pour le titre du widget (<h2>, <h3>, <h4> etc…) et, comme pour le ‘before_widget’, ajoutez une classe pour agir en CSS ultérieurement
//‘after_title’ = fermer la balise du titre (</h2>, </h3>, </h4> etc…)



//====================== Add Custom Post Type Portfolio===========================================

function capitaine_register_post_types() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Portfolio',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'capitaine_register_post_types' ); // Le hook init lance la fonction


//================================== Add Logo ===========================================

add_theme_support('custom-logo');
