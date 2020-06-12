<?php
add_theme_support('post-thumbnails');

function add_scripts(){
    wp_enqueue_script('jquery');

    wp_register_script('jquery-min', get_template_directory_uri() . '/assets/js/core/jquery.min.js', array(jquery), null, true);
    wp_enqueue_script('jquery-min');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/core/bootstrap-3.3.7.min.js', array(jquery), null, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('popup', get_template_directory_uri() . '/assets/js/magnific-popup/jquery.magnific-popup.min.js', array(jquery), null, true);
    wp_enqueue_script('popup');

    wp_register_script('popup-zoom-gallery', get_template_directory_uri() . '/assets/js/magnific-popup/magnific-popup-zoom-gallery.js', array(jquery), null, true);
    wp_enqueue_script('popup-zoom-gallery');

    wp_register_script('appear', get_template_directory_uri() . '/assets/js/main/jquery.appear.js', array(jquery), null, true);
    wp_enqueue_script('appear');

    wp_register_script('isotope', get_template_directory_uri() . '/assets/js/main/isotope.pkgd.min.js', array(jquery), null, true);
    wp_enqueue_script('isotope');

    wp_register_script('parallax', get_template_directory_uri() . '/assets/js/main/parallax.min.js', array(jquery), null, true);
    wp_enqueue_script('parallax');

    wp_register_script('countTo', get_template_directory_uri() . '/assets/js/main/jquery.countTo.js', array(jquery), null, true);
    wp_enqueue_script('countTo');

    wp_register_script('carousel', get_template_directory_uri() . '/assets/js/main/owl.carousel.min.js', array(jquery), null, true);
    wp_enqueue_script('carousel');

    wp_register_script('sticky', get_template_directory_uri() . '/assets/js/main/jquery.sticky.js', array(jquery), null, true);
    wp_enqueue_script('sticky');

    wp_register_script('imagesloaded', get_template_directory_uri() . '/assets/js/main/imagesloaded.pkgd.min.js', array(jquery), null, true);
    wp_enqueue_script('imagesloaded');

    wp_register_script('main', get_template_directory_uri() . '/assets/js/main/main.js', array(jquery), null, true);
    wp_enqueue_script('main');
    
    wp_register_script('masonry', get_template_directory_uri() . 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js', array(jquery), null, true);
    wp_enqueue_script('masonry');
    
    wp_register_script('masonry-min', get_template_directory_uri() . 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(jquery), null, true);
    wp_enqueue_script('masonry-min');
}

add_action('wp_enqueue_scripts', 'add_scripts');

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

require_once('custom-fields.php');

function get_author_role($author_id){
    $user_info = get_user_data($author_id);
    return implode(', ', $user_info->roles);
}

function has_gravatar($email){
    $hash = md5(strtoLower(trim($email)));
    $uri = 'http://www.gravatar.com/avatar/' . $hash . '?d=404';
    $headers = @get_headers($uri);
    if(!preg_match("|200|", $headers[0])){
        $has_valid_avatar = FALSE;
    } else{
        $has_valid_avatar = TRUE;
    }
    return $has_valid_avatar;
}

function edit_comment_form($fields){
    $aux = [];
    array_push($aux,$fields['author']);
    array_push($aux,$fields['email']);
    array_push($aux,$fields['comment']);
    array_push($aux,$fields['cookies']);

    //consent

    return $aux;
}

add_action('comment_form_fields','edit_comment_form');

function save_consent_field($comment_id){
    $consent_checkbox = $_POST['consent'];
    if($consent_checkbox == 'on'){
        $value = "Checkbox Checked: I accept the privacy policy";
    } else{
        $value = "Checkbox NOT Checked: I don´t accept the privacy policy";
    }
    add_comment_meta($comment_id,'consent',$value,true);
}
//Añade el checkbox de consentimiento de politica de privacidad en el comentario
add_action('comment_post','save_consent_field');

function add_consent_column($columns){
    $columns=array(
        'cb'=>'<input type="checkbox"/>',
        'author'=>'Author',
        'comment'=>'Comment',
        'consent_column'=>'Private Policy Consenting',
        'response'=>'In Response To',
        'date'=>'Date Posted',
    );
    return $columns;
}
//Añade el campo de politica de privacidad en el backend
add_action('manage_edit-comments_columns','add_consent_column');

function show_private_policy_consent($col,$comment_id){
    if($col=='consent_column'){
        echo get_comment_meta($comment_id,'consent',true);
    }
}

add_action('manage_comments_custom_column','show_private_policy_consent', 10, 2);

function get_num_visits($post_ID){
    $numvisits = 1;
    $sufix = " Visit";
    if(!add_post_meta($post_ID, 'numvisits', $numvisits, true)){
        $numvisits = get_post_meta($post_ID, 'numvisits', true) +1;
        $sufix = " Visits";
        if(!is_front_page() && !is_home){
            update_post_meta($post_ID, 'numvisits', $numvisits);
        }
    }
    return $numvisits.$sufix;
}

function custom_login_logo(){?>
<style type="text/css">
    #login h1 a, .login h1 a{
        background-image: url("<?php echo get_stylesheet_directory_uri();?>/assets/img/apple-touch-icon-72x72.png");
    }
</style> <?php
}
add_action('login_enqueue_scripts', 'custom_login_logo');



function custom_login_error_message(){
    return "Yikes, that wasn´t quite right. Please try again.";
}
add_filter('login_errors', 'custom_login_error_message');

function list_tags(){
    $tags = get_tags(array(
        'orderby' => 'count',
        'number' => 10,
        'order' =>'DESC'
    ));
    
    foreach($tags as $tag){
        echo '<li> <a href="' . get_tag_link($tag->term_id) . '" class="tagname">' . $tag->name . '</a> <span class="tagcount">' . $tag->count . '</span> </li>';
    }
}