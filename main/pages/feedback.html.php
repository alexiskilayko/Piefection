<?php 
session_start();
$csspath = "../../css/";
$includepath = "../include/";
?>

<html>
<head>
	<title>Poll</title>
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
		<h2>Poll</h2>
		<h3>What is your favorite kind of pie?</h3>
		<div id="poll">
			<form>
				Apple: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
				Pumpkin: <input type="radio" name="vote" value="1" onclick="getVote(this.value)"><br>
				Blueberry: <input type="radio" name="vote" value="2" onclick="getVote(this.value)"><br>
				Pecan: <input type="radio" name="vote" value="3" onclick="getVote(this.value)"><br>
				Cream: <input type="radio" name="vote" value="4" onclick="getVote(this.value)"><br>
				Key Lime: <input type="radio" name="vote" value="5" onclick="getVote(this.value)"><br>
			</form>
		</div>
	</div>
	
	<!-- ajax -->
	<script>
		function getVote(int) {
		  var xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange=function() {
		    if (this.readyState==4 && this.status==200) {
		      document.getElementById("poll").innerHTML=this.responseText;
		    }
		  }
		  xmlhttp.open("GET", "../../php/feedback.php?vote="+int,true);
		  xmlhttp.send();
		}
	</script>

</body>
</html> 