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
	include('../SoccerGamble/models/profile.php');
	include('../SoccerGamble/controllers/initProfile.php');
	include('../SoccerGamble/includes/mobile_menu_logged.php');
	include('../SoccerGamble/includes/navbar_loggedin.php');
	include('../SoccerGamble/includes/logoutbox.php');
	include('../SoccerGamble/includes/user_profile.php');
}
else {
	include('../SoccerGamble/includes/nav.php');
	include('../SoccerGamble/includes/mobile_menu.php');
}
?>

	<?php include('includes/login.php'); ?>
	<?php include('includes/register.php'); ?>
