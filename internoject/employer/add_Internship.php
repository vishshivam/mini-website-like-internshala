<?php
session_start();
  include_once 'Employer.php';
  $employer = new Employer();
  $emp_id=$_SESSION['emp_id'];
  $category=$_POST['category'];
  $company_name=$_POST['company_name'];
  $location=$_POST['location'];
  $start_date=$_POST['start_date'];
  $duration=$_POST['duration'];
  $stipend=$_POST['stipend'];
  $post_date=$_POST['post_date'];
  $apply_date=$_POST['apply_date'];
  $no_of_intenrships=$_POST['no_of_intenrships'];
  $skills_required=$_POST['skills_required'];
  $perks=$_POST['perks'];
  $add_status = $employer->reg_internship($category,$company_name,$location,$start_date,$duration,$stipend,$post_date,$apply_date,$no_of_intenrships,$skills_required,$perks,$emp_id);
echo $add_status;
?>