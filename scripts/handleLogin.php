<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST'); 
header('Content-Type: application/json');

require_once('control.php');

$name = $_POST['username'];
$password = $_POST['password'];
//check if user exists
$sth = $dbh->prepare("SELECT * FROM bshop_user WHERE email = '$name'");
$sth->execute();
$userArray = $sth->fetchAll(PDO::FETCH_ASSOC);

if($userArray[0]['user_password'] == $password) {
	$obj = (object) $userArray[0];
	$obj->returnCode="SUCCESS";
	echo json_encode($obj);
} else {
	echo "{\"returnCode\":\"FAIL\",\"value\":\"Invalid login provided.\"}";
}

?>
