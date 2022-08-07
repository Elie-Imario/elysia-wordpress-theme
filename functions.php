<?php 
    function load_styleSheets(){
        wp_register_style('mainStyle', get_template_directory_uri() . '/assets/css/style.css', array(), 1,'all');
        wp_enqueue_style('mainStyle');

        wp_register_style('mediaQueries', get_template_directory_uri() . '/assets/css/media_queries.css', array(), 1,'all');
        wp_enqueue_style('mediaQueries');

        wp_register_style('animation', get_template_directory_uri() . '/assets/css/animation.css', array(), 1,'all');
        wp_enqueue_style('animation');

        wp_register_style('ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css', array(), 1,'all');
        wp_enqueue_style('ionicons');

        wp_register_style('footer', get_template_directory_uri() . '/assets/css/footer.style.css', array(), 1,'all');
        wp_enqueue_style('footer');

    }

    add_action('wp_enqueue_scripts', 'load_styleSheets');

    function load_Js(){
        wp_enqueue_script('mainScript', get_template_directory_uri() . '/assets/js/script.js', false);
    }

    add_action('wp_footer', 'load_Js');

    add_theme_support('menus');
    add_theme_support('post-thumbnails');
?>