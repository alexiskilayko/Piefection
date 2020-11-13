<?php 
session_start();
$csspath = "../../css/";
$includepath = "../include/";
?>

<html>
<head>
	<title>User Login</title>
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
		<h2>Log In</h2>
		<form>
			<div class="inputcontainer">
				<input id="username" name="username" type="text" placeholder="Username" required><br>
				<input id="password" name="password" type="password" placeholder="Password" required><br>
			</div>
		</form>
		<button id="submit" type="submit">Log In</button>
		<div id="div1"></div>
	</div>
	
	<!-- ajax -->
	<script>
		$(document).ready(function(){
			$("#submit").click(function(){
				var username = $("#username").val();
				var password = $("#password").val();
				var dataString = 'username='+ username + '&password='+ password;
				$.ajax({
					type: "GET",
					url: "../../php/login.php",
					data: dataString,
			        success: function(result) {
			            $('#div1').html(result);					
					}
				});
			});
		});
	</script>
</body>
</html>