<?php
//error_reporting(0);

include('./includes/header.php');
include('dbconnect.php');

$username 	= $_POST['username'];
$password 	= md5($_POST['password']);
$firstname 	= $_POST['firstname'];
$lastname 	= $_POST['lastname'];
$credits 	= $_POST['credits'];
$email 		= $_POST['email'];

$conn->query("INSERT INTO gebruiker(username, firstname, lastname, password, email, credits, rights) VALUES('$username', '$firstname', '$lastname', '$password', '$email', '25', '1')");

echo "<div class='alert'>U heeft succesvol een account aangemaakt. Deze kunt u nu ook gelijk gebruiken. Keer <a href='../index.php'>hier</a> terug naar de homepagina om in te loggen!</div>";

?>