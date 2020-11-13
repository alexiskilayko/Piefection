<?php
// read in json file and convert to php array
$jsonArray = file_get_contents('../data/output/users.json');

// convert json string to php array
$phpArray = json_decode($jsonArray, true);

// number of users
$usercount = count($phpArray);
?>

<!-- print table of user info to page -->
<table>
	<tr>
		<th>Username</th>
		<th>Password</th>
		<th>Email Address</th>
	</tr>
	<?php
	// loop over each user in the array and
	// add their info as a new row in the table
	foreach ($phpArray as $key => $value) {
		$username = $value["username"];
		$password = $value["password"];
		$email = $value["email"];
		echo "<tr>";
		echo "<td>$username</td> <td>$password</td> <td>$email</td>";
		echo "</tr>";
	}
	?>
</table>

<!-- print number of users to page -->
<p>
	<?php echo $usercount; ?> users registered as of <?php echo date("M d, Y")?> at <?php echo date("h:i A"); ?>.
</p>