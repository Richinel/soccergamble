<?php
	include('dbconnect.php');

	

	include('../SoccerGamble/includes/header.php');
	include('dbconnect.php');

	$thuisploeg 	= $_POST['thuisploeg'];
	$thuis_score 	= $_POST['thuis_score'];
	$uitploeg 	= $_POST['uitploeg'];
	$uit_score 	= $_POST['uit_score'];
	$division_logo 	= $_POST['division_logo'];

	$conn->query("INSERT INTO wedstrijden(thuisploeg, thuis_score, uitploeg, $uit_score,division_logo) VALUES('$thuisploeg', '$thuis_score, uitploeg, $uit_score, $division_logo')");

	header('Location: ../faqpage.php');

?>