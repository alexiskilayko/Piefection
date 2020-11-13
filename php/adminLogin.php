<?php
// start session
session_start();

$user = $_GET['username'];
$psw = $_GET['password'];

if ($user == "admin1") { // username is correct
	if ($psw == "psw1") { // password is also correct
		$_SESSION["username"] = $user;
?>

<script>window.location.assign("../../admin/admin.html.php")</script>
		
<?php
	} else { // password is incorrect
		echo "<p>Incorrect password. Please try again.</p>";
	}
} else { 
	echo "<p>Incorrect username or password. Please try again.</p>";
}
?>
