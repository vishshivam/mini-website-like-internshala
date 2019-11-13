<?php
session_start();
header("location:login.php");
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
    <a class="navbar-brand" href="../index.php">INTERNO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <span class="nav-link text-success"><?php echo "Welcome ".$_SESSION['emp_f_name'];?></span>        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>        
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
   <div class="row">
    <div class="col text-center mt-3 jumbotron">
   <h1 class="display-4">Post Internship For Free</h1>
   <a href="internship_Posting_Page.php" class="btn btn-success btn-lg mt-3">Post</a>
 </div>
</div>
</div>

<div class="container-fluid">
 <div class="row">
  <div class="col">
    <h1 class="display-4 m-5">Recent Posted Internships</h1>	
    <!--  Recent Posted Internships -->
    <?php include "internship_Area.php"?>
    <!--  End Recent Posted Internships -->
  </div>
</div>

<div class="row">
  <div class="col">
    <h1 class="display-4 m-5">Internships Accepted</h1>  
    <!--  Internship Accepted Area -->
    <?php include "internship_Accepted.php"?>
    <!--  Internship Accepted Area -->
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