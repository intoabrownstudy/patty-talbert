<?php
/*
Plugin Name: WPBatch Scroll to Top
Plugin URI: http://dreamwebit.com
Description: This Plugin allows you to scroll anywhere by Clicking on anything you will set up.. Enjoy
Version: 1.0
Author: Sujan
Author URI: http://dreamwebit.com
License: GPLv2
*/





define ('plugin_directory', WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__)) . '/' );

function external_scripts(){

	wp_enqueue_script('jquery');
	
	wp_register_style('scroll',plugin_directory.'css/scroll.css');
	wp_register_style('font-awesome',plugin_directory.'css/font-awesome.min.css');
	wp_register_script('easing',plugin_directory.'js/jquery.easing.js', 'jquery');
	wp_register_script('uikit',plugin_directory.'js/scroll.js', 'jquery');
	
	
	wp_enqueue_style('scroll');
	wp_enqueue_style('font-awesome');
	wp_enqueue_script('easing');
	wp_enqueue_script('uikit');
}
add_action('wp_enqueue_scripts', 'external_scripts');



add_filter('wp_head', function($content){
	echo $content.'<a class="dream-scroll" href="#"><i class="fa fa-chevron-up"></i></a>';
});







?>