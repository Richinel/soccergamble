<?php
	include('dbconnect.php');

	error_reporting(0);

	include('../SoccerGamble/includes/header.php');
	include('dbconnect.php');

	$question 	= $_POST['question'];
	$answer 	= $_POST['answer'];

	$conn->query("INSERT INTO faq(question, answer) VALUES('$question', '$answer')");

	header('Location: ../faqpage.php');

?>