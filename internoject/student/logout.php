<?php
session_start();
include_once 'Student.php';
$Student = new Student();
if (!$Student->get_session()){
 header("location:login.php");
}

 $Student->student_logout();
 header("location:../index.php");
?>