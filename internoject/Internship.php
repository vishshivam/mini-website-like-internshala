<?php
include "db_config.php";

	class Internship{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

	public function fetch_internship_data(){
		$sql2="SELECT * FROM `internships_tb`";
		$result=mysqli_query($this->db,$sql2) or die(mysqli_connect_errno()."Data cannot be fetched");
		return $result;
	}
	public function fetch_internship_data_with_id($internship_id){
		$sql2="SELECT * FROM `internships_tb` WHERE INTERNSHIPS_ID='$internship_id'";
		$result=mysqli_query($this->db,$sql2) or die(mysqli_connect_errno()."Data cannot be fetched");
		return $result;
	}
	public function apply_internship($internship_id,$employer_id,$student_id){
		$sql2="INSERT INTO `internship_applied_tb`(`INTERNSHIPS_ID`, `EMPLOYER_ID`, `STUDENT_ID`) VALUES ('$internship_id','$employer_id','$student_id')";
		$result=mysqli_query($this->db,$sql2) or die(mysqli_connect_errno()."Data cannot be Inserted");
		return $result;
	}
	public function check_validity($employer_id,$internship_id){
		if (isset($_SESSION['student_id'])) {
			$student_id=$_SESSION['student_id'];
		$sql2="SELECT * FROM `internship_applied_tb` WHERE STUDENT_ID=$student_id AND INTERNSHIPS_ID=$internship_id AND EMPLOYER_ID=$employer_id";
		$result=mysqli_query($this->db,$sql2) or die(mysqli_connect_errno()." Data cannot be Fetched");
		return $result->num_rows;
		} else {
			header("location:student/login.php");
		}
		
	}
	

}


?>