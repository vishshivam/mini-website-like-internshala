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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">INTERNO</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="internship_Page.php">INTERNSHIPS</a>       
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="RegisterDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						REGISTER
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="student/registration.php">As Student</a>
						<a class="dropdown-item" href="employer/registration.php">As Employer</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="LoginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						LOGIN
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="student/login.php">As Student</a>
						<a class="dropdown-item" href="employer/login.php">As Employer</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>


		<?php
		include_once 'Internship.php';
		$internship = new Internship();
		$internship_id=$_GET['internship_id'];
		$data=$internship->fetch_internship_data_with_id($internship_id);
		$obj=$data->fetch_object()

		?>
		<div class="container mt-5">
			<div class="row">
				<div class="col bg-light pt-3 pb-4">
					<div class="internship_section">
						<h3 class="text-info"><?php echo $obj->CATEGORY;?></h3>
						<h5 class="text-secondary"><?php echo $obj->COMPANY_NAME;?></h5>
						<h6> Location: <?php echo $obj->LOCATION;?></h6>
						<div class="row pb-3">
							<div class="col">
								<h5>Start Date</h5>
								<h6><?php echo $obj->START_DATE;?></h6>
							</div>
							<div class="col">
								<h5>Duration</h5>
								<h6><?php echo $obj->DURATION;?></h6>
							</div>					
							<div class="col">
								<h5>Stipend</h5>
								<h6><?php echo $obj->STIPEND;?></h6>
							</div>					
							<div class="col">
								<h5>Posted On</h5>
								<h6><?php echo $obj->POSTED_ON;?></h6>
							</div>
							<div class="col">
								<h5>Apply By</h5>
								<h6><?php echo $obj->APPLY_BY;?></h6>
							</div>
						</div>
						<div class="row">
							<div class="col bg-light">
								<span><h5 class="d-inline p-3">Internsips Available : </h5><?php echo $obj->NO_OF_INTERNSHIPS;?></span>		
							</div>
						</div>

						<div class="row">
							<div class="col bg-light">
								<span><h5 class="d-inline p-3">Skills Required : </h5><?php echo $obj->SKILLS_REQUIRED;?></span>		
							</div>
						</div>

						<div class="row">
							<div class="col bg-light">
								<span><h5 class="d-inline p-3">Perks : </h5><?php echo $obj->PERKS;?></span>		
							</div>
						</div>

						<div class="row">
							<div class="col text-center bg-light">
								<a href="student/login.php" class="btn btn-primary btn-lg mt-5">Apply Now</a>
							</div>
						</div>

					</div>
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