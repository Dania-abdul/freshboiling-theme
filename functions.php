<?php 


    //enqueu stylesheets
    function load_stylesheets()
     {
         //where the stylesheet is pointed, source, dependencies, version, media 
         wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
         wp_enqueue_style('stylesheet');

         wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
         wp_enqueue_style('custom');
     }
     //add function in a spicific area
     add_action('wp_enqueue_scripts', 'load_stylesheets');



     //enqueu jscript
     function load_javascript()
     {
         wp_enqueue_script('jquery');
         //true is added to load in footer
         wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, 'true');
         wp_enqueue_script('custom');

     }     
     
     add_action('wp_enqueue_scripts', 'load_javascript');




     //add menus tp wp
     add_theme_support('menus');

     //add images to attributes
     add_theme_support('post-thumbnails');


     //Menus
     register_nav_menus(
         array(

            //for no translation
            //'top-menu' => 'Top menu',
            
             'top-menu' => __('Top menu location', 'theme'),
             'mobile-menu' => __('Mobile menu location', 'theme'),
             'footer-menu' => __('Footer menu location', 'theme')


         )
    );

    //custom image sizes 
    //true/false for hard crop
    add_image_size('blog-large', 800, 400, false);
    add_image_size('blog-small', 300, 200, true);

