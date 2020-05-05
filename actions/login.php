<?php
session_start();
$alerts = @$_SESSION['loginAlertHTML'];
require_once '../WEB-INF/CoreClasses.php';
$userObj = new User();
$result = $userObj->validateUser(@$_POST['username'],@$_POST['password']);

if($result == "verified") {
	header('location:  http://www.omicronconnections.com/projects/bookshop/profile/profile');
} else {
	include('../templates/bad_login.php');
}

?>
