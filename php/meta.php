<?php
$draft = false;

if ($GLOBALS["draft"] == true) { ?>
	
	<button class='metabtn' onclick='toggleMeta()'>Meta Info</button>
	<div id='metacontent'>
		<p>Site still in development. There may be bugs that I didn't test for and catch, especially with filepaths. Some features I'd like to try implementing in the future:</p>
		<ul>
			<li>Improve handling of admin uploads, e.g. proper success/fail pages, ability to delete images</li>
			<li>Improve handling of multiple user uploads</li>
			<li>Add more user functionality</li>
			<li>Each user has unique space</li>
			<li>Disable logged in users/admin from login/register</li>
			<li>Meta info for specific page available to that page only</li>
		</ul>
	</div>

<?php } ?>