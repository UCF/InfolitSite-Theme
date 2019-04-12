<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles');
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array('normalize','jquery.ui.css','bootstrap.min','font-awesome.min.css'), '1', 'all' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri().'/style.css', array('parent-style')  );
}
?>