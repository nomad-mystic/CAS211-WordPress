<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 4/3/2016
 * Time: 7:55 PM
 */


add_action('wp_enqueue_scripts', 'nifty_scripts', 20);

function nifty_scripts()
{
     // removing parent styles
     wp_dequeue_style('twentyfouteen-style');
     wp_dequeue_style('twentyfouteen-lato');
     wp_dequeue_style('genericons');
     wp_deregister_style('twentyfouteen-style');
     wp_deregister_style('twentyfouteen-lato');
     wp_deregister_style('genericons');

     // removing .js files
     wp_dequeue_script('jquery');
     wp_deregister_script('jquery');


     // enqueuing styles
     wp_enqueue_style('google-raleway', 'http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800');
     wp_enqueue_style('google-open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300,200');
     wp_enqueue_style('font-awesome', 'http://nomadmystic.com/CAS211W/nifty/css/font-awesome.min.css');
     wp_enqueue_style('main-style', 'http://nomadmystic.com/CAS211W/nifty/nifty.css');
     wp_enqueue_style('responsive-style', 'http://nomadmystic.com/CAS211W/nifty/css/responsive.css', array('main-style'));
     wp_enqueue_style('sidr-style', 'http://nomadmystic.com/CAS211W/nifty/css/jquery.sidr.dark.css');

     // enqueuing scripts
     wp_enqueue_script('jquery', 'http://nomadmystic.com/CAS211W/nifty/js/jquery.min.js', array(), '1.11.0', false);
     wp_enqueue_script('sidr-script', 'http://nomadmystic.com/CAS211W/nifty/sidr/jquery.sidr.min.js', array('jquery'), '1.2.0', false);
     wp_enqueue_script('nicescroll-script', 'http://nomadmystic.com/CAS211W/nifty/js/jquery.nicescroll.min.js', array('jquery'), '3.2.0', true);

}