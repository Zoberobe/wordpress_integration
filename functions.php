<?php

    function load_stylesheet() {

        wp_register_style('bootstrap', get_template_directory_uri() . '/Css/bootstrap.min.css' , array(), 1, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('slick', get_template_directory_uri() . '/Css/slick.css', array(), '1.0', 'all');
        wp_enqueue_style('slick');

        wp_register_style('slick-theme', get_template_directory_uri() . '/Css/slick-theme.css', array(), '1.0', 'all');
        wp_enqueue_style('slick-theme');

        wp_register_style('css-style', get_template_directory_uri() . '/Css/stylesheet.css', array(), 1, 'all');
        wp_enqueue_style('css-style');

        wp_register_style('custom-style', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
        wp_enqueue_style('custom-style');
    }




    add_action('wp_enqueue_scripts', 'load_stylesheet');

