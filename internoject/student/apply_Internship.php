<?php
session_start();
	include_once '../Internship.php';
	$internship = new Internship();
	$internship_id=$_POST['internship_id'];
	$employer_id=$_POST['employer_id'];
	$student_id=$_SESSION['student_id'];
	$response=$internship->apply_internship($internship_id,$employer_id,$student_id);
	echo $response;
?>