<?php
include "../db_config.php";

	class Student{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		/*** for registration process ***/
		public function reg_user($username,$password,$f_name,$l_name){

			$password = md5($password);
			$sql="SELECT * FROM student_tb WHERE EMAIL_ID='$username'";

			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO `student_tb`(`EMAIL_ID`, `PASSWORD`, `FIRST_NAME`, `LAST_NAME`) VALUES ('$username','$password','$f_name','$l_name')";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}

		/*** for login process ***/
		public function check_student_login($email, $password){

        	$password = md5($password);
			$sql2="SELECT STUDENT_ID,FIRST_NAME from student_tb WHERE EMAIL_ID='$email' and PASSWORD='$password'";

			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;

	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true;
	            $_SESSION['student_id'] = $user_data['STUDENT_ID'];
	            $_SESSION['student_f_name'] = $user_data['FIRST_NAME'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}
    	
    	/*** starting the session ***/
	    public function get_session(){
	        return $_SESSION['login'];
	    }

	    public function student_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }

	}


?>