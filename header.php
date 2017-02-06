<!DOCTYPE html>
<html>
<head>
	<title> <?php bloginfo('name'); ?> | <?php wp_title(); ?></title>


	<?php wp_head(); ?>
</head>

<link rel="stylesheet" type="text/css" href=" <?php bloginfo('stylesheet_url'); ?>">
<body>
 
 <div id="wrapper">
 	<div id="header">
      <div id="logo">
        <h2> <a href="<?php home_url();?>"><?php bloginfo('name'); ?></a></h2>
      	<h4> <?php bloginfo('description'); ?></h4>
      </div> <!-- end of logo div -->

      <div id="menu">
       <?php	wp_nav_menu(array('theme_location'=>'primary')); ?>
      	
      </div> <!-- end menu  -->



 	</div> <!-- end of header -->