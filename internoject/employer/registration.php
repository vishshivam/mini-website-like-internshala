<?php
if (isset($_REQUEST['submit'])){
	include_once 'Employer.php';
	$employer = new Employer(); // Checking for user logged in or not
	extract($_REQUEST);
	$register = $employer->reg_employer($emp_email,$password,$emp_f_name, $emp_l_name,$emp_mob_no);

}

?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Interno</title>
</head>
<body>
	<!-- Navigation Bar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">INTERNO</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="../internship_Page.php">INTERNSHIPS</a>        
				</li>
			</ul>
		</div>
	</nav>

	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-7 p-5"style="background-color: #eee;">
				<?php
				if (isset($_REQUEST['submit'])) {
					//Show Success Message
				if (isset($register)) {
		        // Registration Success
					?>
						<div class="alert-success text-center p-3">Registration successful</div>
					<?php
				}
			}
				?>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label for="Email address">Email address</label>
						<input type="email" name="emp_email" class="form-control" placeholder="Enter email" required="">
					</div>
					<div class="form-group">
						<label for="Password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" required="">
					</div>


					<div class="row">
						<div class="col">

							<div class="form-group">
								<label for="First Name">First Name</label>
								<input type="text" name="emp_f_name" class="form-control" placeholder="John" required="">
							</div>
						</div>
						<div class="col">

							<div class="form-group">
								<label for="Last Name">Last Name</label>
								<input type="text" name="emp_l_name" class="form-control"placeholder="Doe" required="">
							</div>
						</div>
					</div>

					
					<div class="form-group">
						<label for="Mobile Number">Mobile Number</label>
						<input type="text" name="emp_mob_no" maxlength="10" class="form-control">
					</div>
					<button type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
					<div class="mt-3"><center>Already Registered?<a href="login.php">Login</a></center></div>
				</form>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
