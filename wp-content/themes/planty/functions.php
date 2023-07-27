<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


/**
** logo widget
**/
function header_widgets_init() {
 
    register_sidebar( array(
   
    'name' => 'Logo',
    'id' => 'logo',
    'before_widget' => '<div class="logo-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="logo-title">',
    'after_title' => '</h2>',
    ) );
   }
   
   add_action( 'widgets_init', 'header_widgets_init' );
?>


<?php

add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'principal') {

        $items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';

    }

    return $items;
}

?> 


<?php

function register_menus() {     
    register_nav_menus( 
        array( 
            'principal' => 'Principal' 
        ) 
    ); 
}
add_action('init', 'register_menus');

?>

