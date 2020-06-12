<?php
/*
Plugin Name: Custom
Plugin URI:
Description:
Version:
Author:
Author URI:
License:
License URI:
*/

function my_training_custom_post_type(){
    $supports = array(
        'title',
        'editor',
        'excerpt',
        'author',
        'comments',
        'revisions',
        'thumbnail',
    );

    $labels = array(
        'name' => _x('Training Plans', 'plural'),
        'singular_name' => _x('Training Plan', 'singular'),
        'menu_name' => _x('Training Plans', 'admin_menu'),
        'name_admin_bar' => _x('Training Plans', 'admin_bar'),
        'add_new' => _x('Add New', 'add new'),
        'new_item' => __('Add New Training Plan'),
        'edit_item' => __('Edit Training Plan'),
        'view_item' => __('View Training Plan'),
        'all_items' => __('All Training Plans'),
        'search_items' => __('Search Training Plan'),
        'not_found' => __('No training plans found...'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_bar' => true,
        'rewrite' => array('slug' => 'my_training'),
        'has_archive' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-chart-area',
    );

    register_post_type('my_training', $args);
}

add_action('init', 'my_training_custom_post_type');

function add_tagscats(){
    register_taxonomy_for_object_type('category', 'my_training');
    register_taxonomy_for_object_type('post_tag', 'my_training');
}

add_action('init', 'add_tagscats');

function my_training_add_meta_box(){
    $screens = array('my_training');
    foreach($screens as $screen){
        add_meta_box(
            'my_training_sectionid',
            __('Training Plan Details', 'pasific'),
            'my_training_meta_box_callback',
            $screen,
            'normal'
        );
    }
}

add_action('add_meta_boxes', 'my_training_add_meta_box');

function my_training_meta_box_callback($post){
    /*Crear el campo de validacion*/
    wp_nonce_field(basename(__FILE__), 'my_training_metabox_nonce');

    //Cosecha de los datos previos
    $distance = get_post_meta($post->ID, 'distance', true);
    $hours = get_post_meta($post->ID, 'hours', true);
    $minutes = get_post_meta($post->ID, 'minutes', true);
    $duration = get_post_meta($post->ID, 'duration', true);
    $weekmonth = get_post_meta($post->ID, 'weekmonth', true);
    $frequence = get_post_meta($post->ID, 'frequence', true);
    $assesment = get_post_meta($post->ID, 'assesment', true);
    $level = get_post_meta($post->ID, 'level', true);
    $price = get_post_meta($post->ID, 'price', true);

    //Codigo html de la metabox
    ?>
    <table class="form-table">
        <tr>
            <th><label for="distance">Distance</label></th>
            <td>
                <select name="distance" id="distance" value="<?php $distance ?>">
                    <option value="5" <?php if($distance=='5') echo 'selected'; ?>>5K</option>
                    <option value="10" <?php if($distance=='10') echo 'selected'; ?>>10K</option>
                    <option value="21" <?php if($distance=='21') echo 'selected'; ?>>1/2 Marathon</option>
                    <option value="42" <?php if($distance=='42') echo 'selected'; ?>>Marathon</option>
                </select>
            </td>
        </tr>

        <tr>
            <th><label for="time">Time</label></th>
            <td>
                <input type="number" name="hours" id="hours" value="<?php echo $hours ?>" min="0" max="5"> hours
            </td>
            <td>
                <input type="number" name="minutes" id="minutes" value="<?php echo $minutes ?>" min="0" max="59"> minutes
            </td>
        </tr>

        <tr>
            <th><label for="duration">Duration</label></th>
            <td>
                <input type="number" name="duration" id="duration" value="<?php echo $duration ?>" min="1" max="15">
                <select name="weekmonth" id="weekmonth"  value="<?php $weekmonth ?>">
                    <option value="weeks" <?php if($weekmonth=='weeks') echo 'selected'; ?>>Weeks</option>
                    <option value="months" <?php if($weekmonth=='months') echo 'selected'; ?>>Months</option>
                </select>
            </td>
        </tr>

        <tr>
            <th><label for="frequence">Frequence</label></th>
            <td>
                <select name="frequence" id="frequence" value="<?php $frequence ?>">
                    <option value="1"  <?php if($frequence=='1') echo 'selected'; ?>>Once</option>
                    <option value="2"  <?php if($frequence=='2') echo 'selected'; ?>>Twice</option>
                    <option value="3"  <?php if($frequence=='3') echo 'selected'; ?>>3 Days</option>
                    <option value="4"  <?php if($frequence=='4') echo 'selected'; ?>>4 Days</option>
                    <option value="5"  <?php if($frequence=='5') echo 'selected'; ?>>5 Days</option>
                    <option value="6"  <?php if($frequence=='6') echo 'selected'; ?>>6 Days</option>
                    <option value="7"  <?php if($frequence=='7') echo 'selected'; ?>>7 Days</option>
                </select> a week
            </td>
        </tr>

        <tr>
            <th><label for="assesment">Assesment</label></th>
            <td>
                <input type="number" name="assesment" id="assesment" value="<?php echo $assesment ?>" min="1" max="5" step="0.5">
            </td>
        </tr>

        <tr>
            <th><label for="level">Level</label></th>
            <td>
                <select name="level" id="level" value="<?php $level ?>">
                    <option value="starter"  <?php if($level=='starter') echo 'selected'; ?>>Starter</option>
                    <option value="medium"  <?php if($level=='medium') echo 'selected'; ?>>Medium</option>
                    <option value="high"  <?php if($level=='high') echo 'selected'; ?>>High</option>
                </select>
            </td>
        </tr>

        <tr>
            <th><label for="price">Price</label></th>
            <td>
                <input type="number" name="price" id="price" value="<?php echo $price ?>" min="0"> €
            </td>
        </tr>
    </table>
    <?php
}

function save_my_training($post_id){
    if(!wp_verify_nonce($_POST['my_training_metabox_nonce'], basename(__FILE__))){
        return;
    }

    $distance = sanitize_text_field($_POST['distance']); //name en el formulario
    $hours = sanitize_text_field($_POST['hours']);
    $minutes = sanitize_text_field($_POST['minutes']);
    $duration = sanitize_text_field($_POST['duration']);
    $weekmonth = sanitize_text_field($_POST['weekmonth']);
    $frequence = sanitize_text_field($_POST['frequence']);
    $assesment = sanitize_text_field($_POST['assesment']);
    $level = sanitize_text_field($_POST['level']);
    $price = sanitize_text_field($_POST['price']);

    update_post_meta($post_id, 'distance', $distance); //del get_post_meta
    update_post_meta($post_id, 'hours', $hours);
    update_post_meta($post_id, 'minutes', $minutes);
    update_post_meta($post_id, 'duration', $duration);
    update_post_meta($post_id, 'weekmonth', $weekmonth);
    update_post_meta($post_id, 'frequence', $frequence);
    update_post_meta($post_id, 'assesment', $assesment);
    update_post_meta($post_id, 'level', $level);
    update_post_meta($post_id, 'price', $price);
}

add_action('save_post', 'save_my_training');