<?php
include_once 'Employer.php';
$employer = new Employer();
$data=$employer->fetch_internship_data($_SESSION['emp_id']);
?>
<div class="container">
	<?php
	if ($data->num_rows==0) {
		?>
		<h1>No Internships Posted Yet</h1>
		<?php
	}
	else{
		while ($obj=$data->fetch_object()) {
		?>

		<div class="row">
			<div class="col bg-light pt-3 mb-5">
				<div class="internship_section">
					<h3 class="text-info"><?php echo $obj->CATEGORY;?></h3>
					<h5 class="text-secondary"><?php echo $obj->COMPANY_NAME;?></h5>
					<h6> Location: <?php echo $obj->LOCATION;?></h6>
					<div class="row">
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
					<div class="row mt-3 footer_part bg-primary text-light pt-1">
						<div class="col-10">
							<h6>Full Time</h6>
						</div>
						<div class="col-2">
							<a href="internship_Details.php?internship_id=<?php echo $obj->INTERNSHIPS_ID;?>" class="text-light"><b>View Details</b></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php

	}
	} 
	?>
</div>