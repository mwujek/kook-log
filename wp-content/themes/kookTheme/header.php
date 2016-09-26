<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri();?>/_img/icon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/_css/style.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/kook.js"></script> 
	<script src="https://use.typekit.net/fyl4pfg.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	

</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	

	<div id="content" class="site-content">

