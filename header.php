<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" type="image/png" href="favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400italic' rel='stylesheet' type='text/css'>

<?php
wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css',false,'0.1','all');
wp_enqueue_style('boilerplate', get_template_directory_uri() . '/css/boilerplate.css',false,'0.1','all');
?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
        <a href="#" class="scrollup">Scroll</a>
            <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="kurtyna">
            <div id="curtain_image">
            </div>
            <div id="scroll_indicator">
                <img id="scroll_down_arrow" src="<?php echo get_template_directory_uri()."/img/scroll_down_arrow.png"?>" />            
                <img src="<?php echo get_template_directory_uri()."/img/scroll_down_text.png"?>" />
            </div>
        </div>
        <header>
        	<div class="top">
                <div class="logo"><a href="#"><img alt="studio111" src="<?php echo get_template_directory_uri()."/img/logo.png"?>"></a></div>
                <div id="claim">
                <p>Freshly baked ideas just round the corner</p>
                </div>
            </div>

            <nav class="main_nav">
                <ul>
                    <li>
                        <a href="#manifesto">/ Manifesto /</a>
                        <span></span>
                    </li>
                    <li>
                        <a href="#oferta">/ Oferta /</a>
                        <span></span>
                    </li>
                    <li>
                        <a href="#portfolio">/ Portfolio /</a>
                        <span></span>
                    </li>
                    <li>
                        <a href="#aktualnosci">/ Aktualności /</a>
                        <span></span>
                    </li>
                    <li>
                        <a href="#team">/ Team /</a>
                        <span></span>
                    </li>
                    <li>
                        <a href="#kontakt">
                        / Kontakt /</a>
                        <span></span>
                    </li>
                </ul>
            </nav>

        </header>