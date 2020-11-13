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
		<?php require  $includepath.'backbutton.php';?>	
		<h2>Hi, <?=$_SESSION["username"]?>!</h2>
		<form action="../../php/upload.php" method="post" enctype="multipart/form-data">
			<p>Share and upload your favorite pie images with us.</p>
			<p><input type="file" name="fileToUpload" id="fileToUpload"></p>
			<p><input type="text" name="fileName" placeholder="File Name"></p>
			<button type="submit" value="Upload Image" name="submit">Upload</button>
			</form>
		</form>
	</div>
</body>
</html>