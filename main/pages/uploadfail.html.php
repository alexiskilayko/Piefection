<?php 
session_start();
$csspath = "../../css/";
$includepath = "../include/";
?>

<html>
<head>
	<title>User Page</title>
	<link rel="stylesheet" href="<?=$csspath?>main.css">
	<link rel="stylesheet" href="<?=$csspath?>card.css">
	<link rel="stylesheet" href="<?=$csspath?>back.css">
	<link rel="stylesheet" href="<?=$csspath?>input.css">
	<link rel="stylesheet" href="<?=$csspath?>user.css">
	<?php require $includepath.'scripts.php';?>
</head>
<body>
	<!-- user login status -->
	<?php require $includepath.'userstatusPage.php';?>	
	
	<!-- header -->
	<?php require  $includepath.'header.php';?>	
	
	<!-- content -->
	<div class="card">
		<p>Sorry, there was a problem uploading your image. <a href="user.html.php">Go back.</a></p>
	</div>
</body>
</html>