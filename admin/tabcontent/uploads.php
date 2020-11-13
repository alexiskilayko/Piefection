<table>
<?php
$dir = "../data/uploads/";
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