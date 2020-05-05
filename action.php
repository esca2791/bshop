<?php

session_start();
$_SESSION['sessID'] = rand(5,10);
header('location: profile/profile.php');
?>