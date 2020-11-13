<?php
// read in json file
$jsonArray = file_get_contents('../data/output/users.json');

// convert json string to php array
$phpArray = json_decode($jsonArray, true);

// get user input info from register.html
$newUser = $_GET['username'];
$newPsw = $_GET['password1'];
$confPsw = $_GET['password2'];
$newEmail = $_GET['email'];

// set a boolean for if user can register or not
$register = true;

// check for empty fieds and if passwords match
// show only one error at a time
if (trim($newUser) == "") {
	$register = false;
	echo "<p>Please enter a valid username.</p>";
} else if (trim($newPsw) == "") {
	$register = false;
	echo "<p>Please enter a valid password.</p>";
} else if ($newPsw !== $confPsw) {
	echo "<p>Passwords do not match. Please try again.</p>";
	$register = false;
} else if (trim($newEmail) == "") {
	$register = false;
	echo "<p>Please enter a valid email.</p>";
}

// check if username already taken
foreach ($phpArray as $key => $value) {
	// username of current user in existing users array
	$oldUser = $value["username"];
	// compare existing username to new username
	if ($newUser == $oldUser) { // username already exists
		$register = false;
		echo "<p>Sorry, this username is taken.<br>Already have an account? <a href='login.html.php'>Log in.</a></p>";
		break;
	}
}

// if pass all these tests, registration success
if ($register != false) {
	?>
	<script>window.location.assign("login.html.php")</script>
	<?php
	// add the new user credentials to the php array
	array_push($phpArray, (array)[
	        'username' => $newUser,
	        'password' => $newPsw,
	        'email' => $newEmail] );
	// overwrite json file with new array
	$updatedArray = json_encode($phpArray);
	file_put_contents('../data/output/users.json', $updatedArray);
}
?>
