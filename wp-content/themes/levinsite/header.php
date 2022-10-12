<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="apple-touch-fullscreen" content="yes" />

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width,height=device-height">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <?php 
    $meta_desc = get_option( 'blogdescription', '' );
    $meta_keywords = get_option( 'meta_keywords', '' );

    if($meta_desc!=''){
      ?>
        <meta property="og:description" content="<?php echo $meta_desc; ?>" />
        <meta name="description" content="<?php echo $meta_desc; ?>">
      <?php
    }

    if($meta_keywords!=''){
      ?>
        <meta name="keywords" content="<?php echo $meta_keywords; ?>">
      <?php
    }
  ?> 
  <meta property="og:url" content="" /> 
  <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" /> 
  
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/favicon/16x16.png<?php echo $v; ?>" />

  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,600,700" rel="stylesheet">
  <?php wp_head(); ?>
  <?php $v = '?v=1.0.0'.time(); ?>

  <!--<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicon/57x57.png<?php echo $v; ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicon/60x60.png<?php echo $v; ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/72x72.png<?php echo $v; ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicon/76x76.png<?php echo $v; ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/114x114.png<?php echo $v; ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/120x120.png<?php echo $v; ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicon/144x144.png<?php echo $v; ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/152x152.png<?php echo $v; ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/180x180.png<?php echo $v; ?>">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/favicon/196x196.png<?php echo $v; ?>">
  
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/16x16.png?v=1.2">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/32x32.png<?php echo $v; ?>">
  
  
  
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/manifest.json<?php echo $v; ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon/32x32.png<?php echo $v; ?>">
  <meta name="theme-color" content="#ffffff"> -->
</head>
<body class="body page-index clearfix">
<!-- Header Start -->
<div id="header" class="header">
  <img class="logo-header" src="<?php echo get_template_directory_uri().'/images/logo.png' ?>">
</div>
<!-- Header End -->