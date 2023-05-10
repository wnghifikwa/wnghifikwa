<?php

$conn= mysqli_connect("localhost","root", "", "emsphpdb" );
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="adminpage.css">
    <style>

    </style>
    <title>Employee Dashboard</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #023020;">
  <div class="container-fluid">
    <a class="navbar-brand text-white"  href="#">EMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto" style="margin-right: 35px;">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" id="em" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#">My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="applyleave.php">Apply Leave</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid" >
<div class="container mt-4">
 
    <h5 class="text-center">Welcome  <?php echo $_SESSION['lname'];?></h5>
 
</div>




    
        </div>


    
</body>
</html>