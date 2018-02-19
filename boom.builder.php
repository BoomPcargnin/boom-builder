<?php
/*
Plugin Name: Boom.ink page builder for H-Farm Education
Plugin URI: http://www.boom.ink
Description: Official page builder  of boom.ink, adapted for H-Farm education. The best for the besties.
Version: 1.0
Author: Boom.ink di Paolo Cargnin
Author URI: http://www.boom.ink
*/


define( 'boombuilderUrl', plugins_url( 'boom-builder', dirname( __FILE__ ) ) );
define( 'boombuilderDir', plugin_dir_path( dirname( __FILE__ ) ).'boom-builder' );

@require( 'model/Builder.php' );

@require( 'controller/builder.controller.php' );

function boomBilderFuncitonInit() {
  $BoomBuilder = new BoomBuilder();
}

// add_action( 'admin_enqueue_scripts', 'style_admin_boom_bookable' );
// function style_admin_boom_bookable(){ //acrocchione veloce
//     wp_register_style('boomBookablestyle',  coursesTypologiesUrl.'/assets/styles/admin_helpers.css');
//     wp_enqueue_style('boomBookablestyle');
// }

add_action( 'init', 'boomBilderFuncitonInit', 10);
