<!DOCTYPE html>
<html>
<head>
	<title>File Upload Project</title>
</head>
<body>
	<?php
		if(isset($_FILES['file'])) {
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES['file']['name']); 
			$upload_ok = 1;
			$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$upload_ok = 0;
			}

			// Check file size
			if ($_FILES['file']['size'] > 500000) {
				echo "Sorry, your file is too large.";
				$upload_ok = 0;
			}

			// Allow certain file formats
			if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"
			&& $image_file_type != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$upload_ok = 0;
			}

			if ($upload_ok == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {
				if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
					echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}
	?>
</body>
</html>
