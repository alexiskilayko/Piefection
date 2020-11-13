<?php 
session_start(); 
$path = "css/";
?>

<html>
<head>
	<title>Piefection</title>
	<link rel="stylesheet" href="<?=$path?>main.css">
	<link rel="stylesheet" href="<?=$path?>card.css">
	<link rel="stylesheet" href="<?=$path?>slideshow.css">
	<link rel="stylesheet" href="<?=$path?>tabs.css">
	<link rel="stylesheet" href="<?=$path?>user.css">
	<link rel="stylesheet" href="<?=$path?>meta.css">
	<?php require 'main/include/scripts.php';?>
</head>
<body>
	
	<!-- user login status -->
	<?php require 'main/include/userstatusIndex.php';?>	
	
	<!-- header -->
	<?php require 'main/include/header.php';?>	
	
	<!-- tab bar -->
	<?php require 'main/include/tabbar.php';?>	
	
	<!-- tab content -->
	<?php require 'main/tabcontent/welcome.php';?>	
	<?php require 'main/tabcontent/bestoftheweek.php';?>	
	<?php require 'main/tabcontent/feedback.php';?>
	<?php require 'main/tabcontent/register.php';?>	
	<?php require 'main/tabcontent/login.php';?>		
	<?php require 'main/tabcontent/admin.php';?>
	
	<script src="js/meta.js"></script>
	<script src="js/slideshow.js"></script>
	<script>
	    var slides = document.getElementsByClassName("mySlide");
	    var dots = document.getElementsByClassName("dot");
		var crtSlideToShow = 0;
		showCurrentSlide();
	</script>
	
</body>
</html>