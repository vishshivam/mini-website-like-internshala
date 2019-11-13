<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <!--  meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <title>Interno</title>
</head>
<body>
  <!-- Navigation Bar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php">INTERNO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="employer_Dashboard.php">Home</a>        
        </li>
        <li class="nav-item">
          <span class="nav-link text-success"><?php echo "Welcome ".$_SESSION['emp_f_name'];?></span>        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>        
        </li>
      </ul>
    </div>
  </nav>

  <div class="conatiner mt-5">
    <div class="row justify-content-center">
      <div class="col-4 pt-5 pl-5"  style="background-color: #bba">
       <form action=""  id="post_internship_form">
        <div class="form-group">
          <label for="Category">Category</label>
          <input type="text" name="category" class="form-control" required placeholder="eg : Marketing">
        </div>
        <div class="form-group">
          <label for="Comapany Name">Comapany Name</label>
          <input type="text" name="company_name" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="Location">Location</label>
          <input type="text" name="location" class="form-control" required>
        </div>


        <div class="form-group">
          <label for="Start Date">Start Date</label>
          <input type="date" name="start_date" class="form-control" required>
        </div>


        <div class="form-group">
          <label >Duration</label>
          <input type="month" name="duration" class="form-control" required placeholder="eg : 2 months/2 weeks">
        </div>
      </div>
      <div class="col-4 pt-5 pr-5"  style="background-color: #bba">


        <div class="form-group">
          <label >Stipend</label>
          <input type="text" name="stipend" class="form-control" required>
        </div>


        <div class="form-group">
          <label >Posted On</label>
          <input type="date" name="post_date" class="form-control" required>
        </div>


        <div class="form-group">
          <label >Apply By</label>
          <input type="date" name="apply_date" class="form-control" required>
        </div>


        <div class="form-group">
          <label >Internships Available</label>
          <input type="text" name="no_of_intenrships" class="form-control" required>
        </div>

      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-4 pl-5" style="background-color: #bba">

        <div class="form-group">
          <label >Skills </label><br>
          <textarea name="skills_required" cols="30" rows="3" ></textarea>
        </div>
      </div>
      <div class="col-4" style="background-color: #bba">

       <div class="form-group">
        <label >Perks</label><br>
        <textarea name="perks" cols="30" rows="3" ></textarea>
      </div>
    </div>
  </div>
  <center><input type="submit" id="add_internship_btn" name="add_internship_btn" class=" mt-3 mb-3 btn btn-primary" value="Post Internship" />
  </center>
</form>
</div>

<script>
  $(document).ready(function() {
    $("#post_internship_form").submit(function(event) {
      /* Act on the event */
      event.preventDefault();
      $.ajax({
        url:"add_Internship.php",
        method:"post",
        data:new FormData(this),
        contentType: false,
        processData: false,
        success:function(response){
          if (response) {
            $("#add_internship_btn").attr("disabled", true);
            alert("Your Internship has been posted successfully");

          }
          else{
            alert("Some Error Occured! Please try again");

          }
        }
      });
    });
  });
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>