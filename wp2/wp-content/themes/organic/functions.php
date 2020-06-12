<?php
add_theme_support('post-thumbnails');

function add_scripts(){
    wp_register_script('core', get_template_directory_uri() . '/assets/js/core.min.js', array(jquery), null, true);
    wp_enqueue_script('core');
    
    wp_register_script('html5shiv', get_template_directory_uri() . '/assets/js/html5shiv.min.js', array(jquery), null, true);
    wp_enqueue_script('html5shiv');
    
    wp_register_script('pointer', get_template_directory_uri() . '/assets/js/pointer-events.min.js', array(jquery), null, true);
    wp_enqueue_script('pointer');
    
    wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array(jquery), null, true);
    wp_enqueue_script('script');
    
    wp_register_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery') ,null, false);
    wp_enqueue_script('masonry');
}

add_action('wp_enqueue_scripts', 'add_scripts');

function add_styles(){
    
    wp_register_style('style', get_template_directory_uri() . 'assets/css/style.css');
    wp_enqueue_style('style');
    
    wp_register_style('fonts', get_template_directory_uri() . 'assets/css/fonts.css');
    wp_enqueue_style('fonts');
    
    wp_register_style('bootstrap', get_template_directory_uri() . 'assets/css/bootstrap.css');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('poppins', get_template_directory_uri() . '//fonts.googleapis.com/css?family=Poppins:300,400,500');
    wp_enqueue_style('poppins');
}

add_action('wp_enqueue_scripts','add_styles');

function generaltheme_widgets_init(){
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id' => 'sidebar',
        'description' => 'Sidebar Widget Area',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
    ));
}

add_action('widgets_init', 'generaltheme_widgets_init');

add_filter( 'excerpt_length', function($length) {
    return 25;
} );

function get_post_tags(){
    if(is_page('Archives')){
        $args = ['orderby' => 'count',
                 'order' => 'desc',
                 'number'  => 10,    
                ];
        $tags = get_tags($args);
        if($tags !== null){
        echo '<ul>';
        foreach($tags as $tag){
            echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a><span class="tagcount">' . $tag->count . '</span>';
        }
        echo '</ul>';
        }else echo 'No tags found';
    }
}

function get_author_role($author_id){
    $user_info = get_userdata($author_id);
    return implode(',',$user_info->roles);
}

require_once('custom-fields.php');

function home_active(){
    if(is_front_page()){
        echo "active";
    }
     else echo "";
}

function blog_active(){
    if(is_home() || is_single()){
        echo "active";
    }
     else echo "";
}

function archives_active(){
    if (is_page('archives')){
        echo "active";
    }
     else echo "";
}