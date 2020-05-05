<?php
	session_start();
	$contentId = $_SESSION['contentId'];
	$info = pathinfo($_FILES['userFile']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = $contentId.".".$ext; 
	$target = '/home1/esca2791/public_html/projects/bookshop/assets/img/users/'.$newname;
	move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
	header('location:  /projects/bookshop/profile/profile.php');
?>
