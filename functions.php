<?php
 
 
 function low_family_scripts(){
    wp_enqueue_style( 'low_family_style', get_template_directory_uri(  ), array(), '1.0', 'all');
 }
 add_action('wp_enqueue_scripts', 'low_family_scripts');