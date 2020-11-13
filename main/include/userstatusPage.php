<div class="userstatus">
	<?php
	if (isset($_SESSION['username'])) {
		if ($_SESSION['username'] == "admin1") {
			echo "<p><a href='../../admin/admin.html.php'>" . $_SESSION['username'] . "</a>";
		}
		else {
			echo "<p><a href='user.html.php'>" . $_SESSION['username'] . "</a>";
		}
		echo "<i class='fas fa-user icon'></i><a href='../../php/logout.php'>Log Out</a></p>";
	} else {
		echo "<p>You are not logged in. <a href='login.html.php'>Log In</a>";
	}
	?>
</div>
