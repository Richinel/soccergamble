<?php
session_start();

include('dbconnect.php');

function saveText($text) {
	$cleaned = strip_tags(htmlspecialchars(addslashes(stripslashes( $text ))));
	return $cleaned;
}

$username = mysqli_real_escape_string($conn, saveText($_POST['username']));
$password = mysqli_real_escape_string($conn, saveText($_POST['password']));
$sql = "SELECT * FROM gebruiker WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	$_SESSION['username'] 	= $username;
	$_SESSION['rights'] 	= $row['rights'];
	$_SESSION['firstname'] 	= $row['firstname'];
	$_SESSION['lastname'] 	= $row['lastname'];
	$_SESSION['email'] 		= $row['email'];
	$_SESSION['credits'] 	= $row['credits'];
	header('Location: ../');
}
echo "<div class='alert'>Je gegevens kloppen niet bruur wtf man wat doe je =(</div>";

?>