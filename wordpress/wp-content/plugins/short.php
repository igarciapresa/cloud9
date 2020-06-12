<?php
/*
Plugin Name: Short
Plugin URI:
Description:
Version:
Author:
Author URI:
License:
License URI:
*/

//shortcode que saluda a whoever you are
function salute($atts, $content = null){
    $name = shortcode_atts(array('name' => 'Whoever you are'), $atts);
    return '<h1>Hola '.$name['name'].'</h1>'.$content.'</h1>';
}

add_shortcode('saluda', 'salute');