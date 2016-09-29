<?php

session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "soccergamble";
$message = "";

try {
	$connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	//Als je op de Login knop klikt
	if(isset($_POST["login"])) {
		//Controleert of de velden "username" of "password leeg zijn"
		if(empty($_POST["username"]) || empty($_POST["password"])) {
			$message= "<label>All fields are required</label>";
		}
		else {
			$query = "SELECT * FROM users WHERE username = :username AND password = :password";
			$statement = $connect->prepare($query);
			$statement->execute(
				array (
					'username'	=> $POST_['username'],
					'password'	=> $POST_['password']
				)
			);
			$count = $statement->rowCount();
			if($count > 0) {
				$_SESSION["username"] = $_POST["username"];
			}
		}
	}
}
catch(PDOException $error) {
	$message = $error->getMessage();
}

?>