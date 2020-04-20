<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta chraset="php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<div id="container">
		<div id="header_logo">
			<img src="/imgs/logo.png" id="logo">
		</div>
		<div id="header_image">
			<img src="/imgs/header_img.jpg">
		</div>
