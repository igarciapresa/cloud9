<?php

/*Add support for woocommerce*/
function woocommerce_support(){
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'woocommerce_support');


/*Load the stylesheet of the parent theme*/
function enqueue_parent_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');