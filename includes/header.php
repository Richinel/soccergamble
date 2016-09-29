<html>
<head>
	<title>
		<?php echo $title; ?> 
		| SoccerGamble
	</title>
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/kube.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
		
	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/cycle2.js"></script>
	<script src="assets/js/cycle2-tile.js"></script>
	<script src="assets/js/visuals.js"></script>
</head>
<body>

<?php
session_start();
if(ISSET($_SESSION['username'])) {
	include('../soccergamble_git/models/profile.php');
	include('../soccergamble_git/controllers/initProfile.php');
	include('../soccergamble_git/includes/mobile_menu_logged.php');
	include('../soccergamble_git/includes/navbar_loggedin.php');
	include('../soccergamble_git/includes/logoutbox.php');
	include('../soccergamble_git/includes/user_profile.php');
}
else {
	include('../soccergamble_git/includes/nav.php');
	include('../soccergamble_git/includes/mobile_menu.php');
}
?>

	<?php include('includes/login.php'); ?>
	<?php include('includes/register.php'); ?>
