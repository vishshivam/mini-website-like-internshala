<?php
include_once 'Employer.php';
$employer = new Employer();
$data=$employer->fetch_accepted_internships($_SESSION['emp_id']);
?>
<div class="container">
		<div class="row">
			<div class="col">
				<table class="table text-center">
					<thead class="bg-light">
						<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Id</th>
						<th>Category</th>
						<th>Posted On</th>
						<th>Apply By</th>
						<th>Internships</th>
						<th>Duration</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
						<?php
while ($obj=$data->fetch_object()) {
		?>

						<tr>
						<td><?php echo $obj->FIRST_NAME;?></td>
						<td><?php echo $obj->LAST_NAME;?></td>
						<td><?php echo $obj->EMAIL_ID;?></td>
						<td><?php echo $obj->CATEGORY;?></td>
						<td><?php echo $obj->POSTED_ON;?></td>
						<td><?php echo $obj->APPLY_BY;?></td>
						<td><?php echo $obj->NO_OF_INTERNSHIPS;?></td>
						<td><?php echo $obj->DURATION;?></td>
						<td><a href="#">View Application</a></td>
					</tr>
					<?php
				}
				?>
					</tbody>
				</table>
			</div>
		</div>
		
</div>