<?php
// start session
session_start();

// read in json file
$jsonArray = file_get_contents('../data/output/users.json');

// convert json string to php array
$phpArray = json_decode($jsonArray, true);

// get user input from login.html
$attemptUser = $_GET['username'];
$attemptPsw = $_GET['password'];

// user will login only if correct credentials
$login = false;

// loop over existing users
foreach ($phpArray as $key => $value) {
	// username of current user in existing users array
	$existingUser = $value["username"];
	$existingPsw = $value["password"];
	// compare entered username to existing username
	if ($attemptUser == $existingUser) { 
		// username is correct
		// now check if password is correct
		if ($attemptPsw == $existingPsw) { // password is correct
			$login = true;
			break;
		}
	}
}

if ($login == true) { // user entered correct credentials
	$_SESSION["username"] = $attemptUser;
?>
<script>window.location.assign("user.html.php")</script>

<?php
} else { // user entered incorrect credentials
	echo "<p>Incorrect username or password.<br>New user? <a href='register.html.php'>Register an account.</a></p>";
}
?>
