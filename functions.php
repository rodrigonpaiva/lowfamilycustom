<?php
 
 
 function low_family_scripts(){
    wp_enqueue_script( 'pooper-script', get_template_directory_uri().'/assets/js/vendor/popper.js' , array() , '2.5.4' , true );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri().'/assets/js/vendor/bootstrap.min.js', array('jquery'), '5.1', true );
    wp_enqueue_script( 'swiper-script', get_template_directory_uri().'/assets/js/plugins/swiper-bundle.min.js' , array(), '5.1', true );
    wp_enqueue_script( 'glightbox-script', get_template_directory_uri().'/assets/js/plugins/glightbox.min.js', array(), '5.1' , true );

    wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/assets/css/plugins/swiper-bundle.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'glightbox-style', get_template_directory_uri().'/assets/css/plugins/gligtbox.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri(). '/assets/css/vendor/bootstrap.min.css', array(), '5.1', 'all');

    wp_enqueue_script( 'low-family-script', get_template_directory_uri().'assets/js/script.js', array() , '1.0', true );
    wp_enqueue_style('low_family_style', get_stylesheet_uri(), array(), filemtime(get_template_directory().'/style.css'), 'all');
 }
 add_action('wp_enqueue_scripts', 'low_family_scripts');