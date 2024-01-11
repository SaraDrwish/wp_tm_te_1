<?php


function ThemeBySara_register_styles(){

    $version = wp_get_theme()->get("version");

wp_enqueue_style("themeBySara" , get_template_directory_uri() . "/style.css" , array("themeBySara-bootstrap") , $version , "all");
wp_enqueue_style("themeBySara-fontawesome" ,"https://use.fontawesome.com/releases/v5.15.4/css/all.css" , array() , "5.15.4" , "all");
wp_enqueue_style("themeBySara-stlye" , get_template_directory_uri() . "/style.css" , array() , "1.0" , "all");
wp_enqueue_style("themeBySara-bootstrap" , "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" , array() , "4.6.2" , "all");

}

add_action( "wp_enqueue_scripts" , "ThemeBySara_register_styles");




function ThemeBySara_register_scripts(){

    wp_enqueue_script("themeBySara-jquery" ,"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" , array() , "3.5.1" , true);
    wp_enqueue_script("themeBySara-bootstrap" ,"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" , array() , "3.5.1" , true);
    wp_enqueue_script("themeBySara-js" , get_template_directory_uri() ."assets/js/app.js" , array() ,'1.0' , true);
   
    
}

add_action( "wp_enqueue_scripts" , "ThemeBySara_register_scripts");



?>