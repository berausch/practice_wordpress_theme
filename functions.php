<?php
function practice_scripts(){

  wp_enqueue_style( 'material-style', get_template_directory_uri() . '/css/materialize.css' );
  wp_enqueue_style("practice-style", get_stylesheet_uri());
  wp_enqueue_style("animate-style", '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css');
  wp_enqueue_style( 'material-icons', '//fonts.googleapis.com/icon?family=Material+Icons' );
  wp_enqueue_script( 'material-script', get_template_directory_uri() . '/js/materialize.js', array(), '1.0', true );
  wp_enqueue_script("my-custom-js", get_template_directory_uri() . '/js/custom-js.js', array('jquery'), '1.0', true);



}


add_action('wp_enqueue_scripts', 'practice_scripts');
