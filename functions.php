<?php

function twentytwelve_gpii_scripts() {
		
	wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery  
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');

    wp_register_style('bootstrap-min', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-min');

   	wp_register_script( 'angular', 'http:////ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js');

	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . "/js/script.js" , array('jquery'), null, false);
		wp_enqueue_script( 'controllers', get_stylesheet_directory_uri() . "/js/controllers.js", array('angular'), null, false);
}

add_action( 'wp_enqueue_scripts', 'twentytwelve_gpii_scripts' );

?>