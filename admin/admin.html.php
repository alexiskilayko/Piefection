<?php 
session_start(); 
$path = "../css/";
?>

<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" href="<?=$path?>main.css">
	<link rel="stylesheet" href="<?=$path?>card.css">
	<link rel="stylesheet" href="<?=$path?>back.css">
	<link rel="stylesheet" href="<?=$path?>table.css">
	<link rel="stylesheet" href="<?=$path?>admin.css">
	<link rel="stylesheet" href="<?=$path?>input.css">
	<?php require '../main/include/scripts.php';?>
	<style>
		.left, .center, .right {
			float: left;
		}
		.left, .right, .right {
			width: 33%;
		} 
		.center {
			width: 34%;
		}
		.tabs:after {
			content: "";
			display: none;
			clear: both;
		}
		.tabs button {
			border-radius: 0px;
		}
		</style>
</head>
<body>	
	<div class="card">
		<span class="back"><a href="../index.php"><i class="fas fa-arrow-left"></i></a></span>
		<h2>Admin Page</h2>
		<div class="tabs">
			<div class="left">
				<button onclick="toggleUsers()">Users</button>
			</div>
			<div class="center">
				<button onclick="toggleUploads()">Uploads</button>
			</div>
			<div class="right">
				<button onclick="toggleSlideshow()">Slideshow</button>
			</div>
		</div>
		
		<div id="users-div" class="tabcontent" style="display: block;">
			<?php include 'tabcontent/users.php';?>
		</div>
		
		<div id="uploads-div" class="tabcontent" style="display:none;">
			<?php include 'tabcontent/uploads.php';?>
		</div>
		
		<div id="slideshow-div" class="tabcontent" style="display:none;">
			<?php include 'tabcontent/slideshow.php';?>
		</div>

	</div>
	
	<script src="js/admin.js"></script>
</body>
</html>