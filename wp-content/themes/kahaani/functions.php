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

    function kahaani_features(){
        add_theme_support('title-tag');
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
    }
    add_action('after_setup_theme', 'kahaani_features');


    function filter_post_asb() {

        ob_start();
    
        $args = array(
           'cat' => 43,
           'year' => $_POST['year']
        );
        $query = new WP_Query($args);
    
        if ( $query -> have_posts()) : ?>
        <div class="container">
        <select id="year"></select>
        <ul class="slides">
            <?php while($query -> have_posts()) : $query -> the_post(); ?>
            <li>
                <img src="<?php bloginfo('template_url')?>/images/logo.png" >
                <?php the_content(); ?>
                <h2><?php the_permalink();?></h2>
                <h4><?php the_title();?></h4>
            </li>
            <li>
                <?php the_post_thumbnail();?>
            </li>
            <?php endwhile ; ?>
            <?php wp_reset_postdata();?>
        </ul>
       </div>
       <?php
       endif;
       echo ob_get_clean();
    
       // OR
       // $html = ob_get_clean();
       // echo json_encode( array( 'html' => $html ) );
       exit;
    }
    
    add_action('wp_ajax_filter', 'filter_post_asb');
    add_action('wp_ajax_nopriv_filter', 'filter_post_asb');
?>