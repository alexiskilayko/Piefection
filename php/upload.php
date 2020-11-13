<?php
    $target_dir = "../data/uploads/";
	$uploadfile = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$fileType = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
	$fileSize = $_FILES["fileToUpload"]["size"];
	$target_file = $target_dir . $_POST["fileName"] . "." . $fileType;				
	$tmp_file = $_FILES['fileToUpload']['tmp_name'];
	$uploadOk = 1;
		
	// check if real image
	if (isset($_POST["submit"])) {
		$check = getimagesize($tmp_file);
		if ($check !== false) {
			$uploadOk = 1;
		} else {
			$uploadOk = 0;
		}
	}
	
	// check if file exists
	if (file_exists($target_file)) {
		$uploadOk = 0;
	}	
	
	// check file sizes
	if ($fileSize > 500000) {
		$uploadOk = 0;
	}
	
	// check file type
	if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
		$uploadOk = 0;
	}
	
	// upload files
	if ($uploadOk == 0) {
		//echo "hi";
		echo "<script>window.location.assign('../main/pages/uploadfail.html.php')</script>";
	} else {
		echo "<script>window.location.assign('../main/pages/uploadsuccess.html.php')</script>";
        move_uploaded_file($tmp_file, $target_file);
    }
?>