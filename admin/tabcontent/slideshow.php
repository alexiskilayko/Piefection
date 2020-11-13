<table>
<?php
$dir = "../images/slideshow/";
$dirArray = scandir($dir);
$files = array_values($dirArray);
$files = array_slice($files, 2);
foreach ($files as $file) {
	$filename = strtolower($file);
	$filepath = $dir . $filename;
	echo "<tr><td><a href='$filepath' target='_blank'>$filename</a></td></tr>";
}
?>
</table>
<form action="php/upload.php" method="post" enctype="multipart/form-data">
<p><input type="file" name="fileToUpload" id="fileToUpload"></p>
<input type="text" name="fileName" placeholder="File Name"><br>
<button type="submit" value="Upload Image" name="submit">Upload</button>
</form>