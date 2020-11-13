<?php
session_start();
$csspath = "../../css/";
$includepath = "../include/";
?>

<html>
<head>
	<title>Register</title>
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
		<h2>Register</h2>
		<form>
			<div class="inputcontainer">
				<input id="username" name="username" type="text" placeholder="Username" required><br>
				<input id="password1" name="password1" type="password" placeholder="Password" required><br>
				<input id="password2" name="password2" type="password" placeholder="Confirm Password" required><br>
				<input id="email" name="email" type="email" placeholder="Email Address" required><br>
			</div>
		</form>
		<button id="submit" type="submit">Register</button>
		<div id="div1"></div>
	</div>
	
	<!-- ajax -->
	<script>		
		$(document).ready(function(){
			$("#submit").click(function(){
				var username = $("#username").val();
				var password1 = $("#password1").val();
				var password2 = $("#password2").val();
				var email = $("#email").val();
				var dataString = 'username='+ username + '&password1='+ password1 + '&password2='+ password2 +'&email='+ email;
				$.ajax({
					type: "GET",
					url: "../../php/register.php",
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