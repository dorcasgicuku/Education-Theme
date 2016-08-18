<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<?php wp_head();?>
</head>
<body>
 <div class="image-and-logo-name">
 	<img src="<?php bloginfo('stylesheet_directory');?>/img/logo.jpeg" alt="logo Icon" style="width:128px;height:128px;float:left;"> Elective Studies
 	</div>

 <?php wp_nav_menu(array('theme_location'=>'Main Menu')) ?>
