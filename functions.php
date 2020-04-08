<?php

function get_da_files()
{
  wp_register_style('bootstrap_style', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', false, '1.1', 'all');
  wp_enqueue_style( 'bootstrap_style' );

  wp_register_style('main_style', get_template_directory_uri() . '/style.css', false, '1.1', 'all');
  wp_enqueue_style( 'main_style' );

  wp_register_style('nav-style', get_template_directory_uri() . '/css/navigation.css', false, '1.1', 'all');
  wp_enqueue_style( 'nav-style' );

  wp_register_style('service-style', get_template_directory_uri() . '/css/services.css', false, '1.1', 'all');
  wp_enqueue_style( 'service-style' );

  wp_register_style('bio-style', get_template_directory_uri() . '/css/bio.css', false, '1.1', 'all');
  wp_enqueue_style( 'bio-style' );

  wp_register_style('wildcard-style', get_template_directory_uri() . '/css/wildcard.css', false, '1.1', 'all');
  wp_enqueue_style( 'wildcard-style' );

  wp_register_style('contact-style', get_template_directory_uri() . '/css/contact.css', false, '1.1', 'all');
  wp_enqueue_style( 'contact-style' );

  wp_enqueue_script('jquery');

  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'nav_script', get_template_directory_uri() . '/js/navigation.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'instagram_feed', get_template_directory_uri() . '/js/instagram_feed.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

}

add_action('wp_enqueue_scripts', 'get_da_files');




