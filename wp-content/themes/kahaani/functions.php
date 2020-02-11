<?php 
    function kahaaniZidki(){
        wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css'); 
        wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
        wp_enqueue_style('setting', get_template_directory_uri() . '/css/settings.css');
        wp_enqueue_style('layers', get_template_directory_uri() . '/css/layers.css');
        wp_enqueue_style('ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
        wp_enqueue_style('meanmenu', get_template_directory_uri() . '/css/meanmenu.min.css');
        wp_enqueue_style('mystyle', get_template_directory_uri() . '/css/mystyle.css');
        wp_enqueue_style('kahaani_main_styles', get_stylesheet_uri());
        wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
        wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery.min.js'), NULL, '1.0', true);
        wp_enqueue_script('jquery-punch', get_theme_file_uri('/js/jquery.themepunch.tools.min.js'), NULL, '1.0', true);
        wp_enqueue_script('jquery-theme', get_theme_file_uri('/js/jquery.themepunch.revolution.min.js'), NULL, '1.0', true);
        wp_enqueue_script('revolution-extension', get_theme_file_uri('/js/revolution.extension.actions.min.js'), NULL, '1.0', true);
        wp_enqueue_script('revolution-kenburn', get_theme_file_uri('/js/revolution.extension.kenburn.min.js'), NULL, '1.0', true);
        wp_enqueue_script('revolution-layer', get_theme_file_uri('/js/revolution.extension.layeranimation.min.js'), NULL, '1.0', true);
        wp_enqueue_script('revolution-parallax', get_theme_file_uri('/js/revolution.extension.parallax.min.js'), NULL, '1.0', true);
        wp_enqueue_script('revolution-slide', get_theme_file_uri('/js/revolution.extension.slideanims.min.js'), NULL, '1.0', true);
        wp_enqueue_script('revolution-slider', get_theme_file_uri('/js/revolution-slider.js'), NULL, '1.0', true);  
        wp_enqueue_script('aos', get_theme_file_uri('/js/aos.js'), NULL, '1.0', true);
        wp_enqueue_script('bootstrap.min', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '1.0', true);
        wp_enqueue_script('owl-carousel', get_theme_file_uri('/js/owl.carousel.min.js'), NULL, '1.0', true);
        wp_enqueue_script('scroll', get_theme_file_uri('/js/scroll.js'), NULL, '1.0', true);
        wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'kahaaniZidki');

    function featured_image() {
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'featured_image');
?>