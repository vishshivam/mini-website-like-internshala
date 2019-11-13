<?php
include "../db_config.php";

class Employer{

	public $db;

	public function __construct(){
		$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		if(mysqli_connect_errno()) {
			echo "Error: Could not connect to database.";
			exit;
		}
	}

	/*** for registration process ***/

	public function reg_employer($username,$password,$f_name,$l_name,$mob_no){

		$password = md5($password);
		$sql="SELECT * FROM employer_tb WHERE EMAIL_ID='$username'";

			//checking if the username or email is available in db
		$check =  $this->db->query($sql) ;
		$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
		if ($count_row == 0){
			$sql1="INSERT INTO `employer_tb`(`EMAIL_ID`, `PASSWORD`, `FIRST_NAME`, `LAST_NAME`, `MOBILE_NUMBER`) VALUES ('$username','$password','$f_name','$l_name','$mob_no')";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
			return $result;
		}
		else { return false;}
	}

/*** for registration process ***/
		public function reg_internship($category,$company_name,$location,$start_date,$duration,$stipend,$post_date,$apply_date,$no_of_intenrships,$skills_required,$perks,$emp_id){

				$sql1="INSERT INTO `internships_tb`(`CATEGORY`, `COMPANY_NAME`, `LOCATION`, `START_DATE`, `DURATION`, `STIPEND`, `POSTED_ON`, `APPLY_BY`, `NO_OF_INTERNSHIPS`, `SKILLS_REQUIRED`, `PERKS`, `EMPLOYER_ID`) VALUES ('$category','$company_name','$location','$start_date','$duration','$stipend','$post_date','$apply_date','$no_of_intenrships','$skills_required','$perks',$emp_id)";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
		}

	/*** for login process ***/
	public function check_employer_login($email, $password){

		$password = md5($password);
		$sql2="SELECT EMPLOYER_ID,FIRST_NAME from employer_tb WHERE EMAIL_ID='$email' and PASSWORD='$password'";

			//checking if the username is available in the table
		$result = mysqli_query($this->db,$sql2);
		$user_data = mysqli_fetch_array($result);
		$count_row = $result->num_rows;

		if ($count_row == 1) {
	            // this login var will use for the session thing
			$_SESSION['login'] = true;
			$_SESSION['emp_id'] = $user_data['EMPLOYER_ID'];
			$_SESSION['emp_f_name'] = $user_data['FIRST_NAME'];
			return true;
		}
		else{
			return false;
		}
	}
	public function fetch_internship_data($id){
		$sql2="SELECT * FROM `internships_tb` WHERE EMPLOYER_ID=$id";
		$result=mysqli_query($this->db,$sql2) or die(mysqli_connect_errno()."Data cannot be fetched");
		return $result;
	}

public function fetch_accepted_internships($emp_id){
	$sql="SELECT student_tb.FIRST_NAME,student_tb.LAST_NAME,student_tb.EMAIL_ID ,internships_tb.CATEGORY,internships_tb.POSTED_ON,internships_tb.NO_OF_INTERNSHIPS,internships_tb.DURATION,internships_tb.APPLY_BY FROM student_tb,internship_applied_tb,internships_tb WHERE internship_applied_tb.EMPLOYER_ID=$emp_id AND internship_applied_tb.STUDENT_ID=student_tb.STUDENT_ID AND internship_applied_tb.INTERNSHIPS_ID=internships_tb.INTERNSHIPS_ID ";
	$result=mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot be fetched");
		return $result;
}
	
	/*** starting the session ***/
	public function get_session(){
		return $_SESSION['login'];
	}

	public function emp_logout() {
		$_SESSION['login'] = FALSE;
		session_destroy();
	}

}


?>