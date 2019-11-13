<?php
session_start();
include_once 'Employer.php';
$Employer = new Employer();
$emp_id = $_SESSION['emp_id'];
if (!$Employer->get_session()){
 header("location:login.php");
}

 $Employer->emp_logout();
 header("location:../index.php");



?>