<?php

$conn = mysqli_connect("localhost", "root", "", "emsphpdb");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loginpages.css">
    <title>Employee Login Page</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #023020;">
  <div class="container-fluid">
    <a class="navbar-brand text-white"  href="#">EMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="em" href="#">Employee Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aloginpage.php">Admin Login</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid" style="background-color: #B9E2A7;">

<section class="vh-100 gradient-custom">
  <div class="container py-2 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card  text-black" >
          <div class="card-body p-4 text-center">

            <div class="mb-md-3 mt-md-3">
              <form action="eprocess.php" method="post">

              <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
              <p class="text-black-50 mb-3 text-center">Please enter your login and password!</p>

              <div class="form-outline form-white mb-2">
              <label class="form-label" for="typeEmailX">Email</label>
                <input type="email" id="typeEmailX" name="email"  class="form-control form-control-lg" />
              
              </div>

              <div class="form-outline form-white mb-2">
              <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                
              </div>

              <p class="small mb-2 pb-lg-2 text-center"><a class="text-black-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-black bg-secondary  btn-lg px-5 text-center" name="submit" type="submit">Login</button>

              
              </form>
            </div>

           

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
        </div>


    
</body>
</html>