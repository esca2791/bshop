<?php

class User {

	public function validateUser($user,$pass) {
		//check for user's credentials
		//$dbh = new PDO("mysql:host=localhost;dbname=esca2791_esbt","esca2791","jD9h0wFBiv0F4DEo");
		if(!isset($user) || !isset($pass)) {
			//do nothing 
		} else {
			$dbh = ConnectionManager::getConnection();
			$sth = $dbh->prepare("SELECT * FROM user WHERE user_email='".$user."'");
			$sth->execute();
			$array = $sth->fetchAll();
			$count = count($array);
		
		//if user is not recognized
		if($count == 0) {
			//$_SESSION['loginAlertHTML'] = '<div class="alert alert-danger alert-dismissable></div>';
			//header('location:  ../actions/login');
			return '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> We\'re sorry, this user does not exist!</div>';
		} else {
			$passDB = $array[0]['user_password'];
			if($pass == $passDB) {
				//SET SESSION VARIABLES
                                $_SESSION['btUserItems'] = Item::getItems($array[0]['user_id']);
				$_SESSION['btID'] = "verified";
				$_SESSION['btUser'] = $user;
				$_SESSION['btPassport'] = md5(date("Y-M-D H:i"));
				$_SESSION['contentId'] = $array[0]['user_id'];
				return "verified";
			} else {
				return '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> We\'re sorry, there was a problem with either your username or password!</div>';
			}
		}
		}
	}
	
	public static function createUser($username,$password,$firstName,$lastName,$gender,$age,$university,$status,$expectedGradDate) {
		$dbh = ConnectionManager::getConnection();
		$password = $password;
		$sth = $dbh->prepare("INSERT INTO user (user_email,user_password) VALUES ('$username','$password')");
		$sth->execute();
		$_SESSION['accountCreated'] = "success";
		$_SESSION['btID'] = $username;
		header("location: http://localhost/projects/bookshop/profile/profile.php");
	}

}

class CoreClasses {

	public static function test() {
		$string = "PHPstring";
		echo "Test: ".$string;
		$dbh = ConnectionManager::getConnection();
		$sth = $dbh->prepare("SELECT * FROM user");
		$sth->execute();
		print_r($sth->fetchAll(PDO::FETCH_ASSOC));
	}

}

class Item {
	public static function createItem($contentId,$itemName,$isbnNumber,$itemPrice,$newname) {
		try {
			$dbh = ConnectionManager::getConnection();
$sql = "INSERT INTO item(user_id,item_name,item_isbn,item_price,item_file)VALUES ($contentId,'".$itemName."','".$isbnNumber."','".$itemPrice."','".$newname."');";
			echo $sql;
			$sth = $dbh->prepare($sql);
			$sth->execute();
			return "Success";
		} catch(PDOException $e) {
			return $e->getMessage();
		}
	}
	
	public static function getItems($userId) {
		//$sql = "SELECT item.item_name,item.item_isbn,item.item_price,item.item_file FROM item INNER JOIN user_items ON user_items.user_id = ".$userId.";";
		$sql = "SELECT * FROM item WHERE user_id=".$userId;
                $dbh = ConnectionManager::getConnection();
		$sth = $dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll(PDO::FETCH_ASSOC);
	}
}

class ConnectionManager {
public static function getConnection() {
		try {
			$dbh = new PDO("mysql:host=localhost;dbname=esca2791_esbt","esca2791_escam91","er514011ic");
			return $dbh;
		} catch(PDOException $e) {
			echo "ERROR:  " + $e->getMessage();
		}
	}
}

?>
