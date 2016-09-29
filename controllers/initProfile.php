<?php

include('dbconnect.php');

$username = $_SESSION['username'];
$sql = "SELECT * FROM gebruiker WHERE username = '$username'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {

	$rights 	= $row['rights'];
	$firstname 	= $row['firstname'];
	$lastname	= $row['lastname'];
	$email		= $row['email'];
	$credits 	= $row['credits'];
	$profile = new Profile();
	$profile->setProfileData($firstname, $lastname, $username, $email, $credits, $rights);
}

?>