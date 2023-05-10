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
          <a class="nav-link active text-white" aria-current="page"  href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#">My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="em" href="#">Apply Leave</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">

<section class="text-center">



<div class="card mt-5">
    <div class="card-body py-4 px-md-5">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                
               
                    <form action="" method="post" enctype="multipart/form-data" style="box-shadow: 1px 2px 6px 1px; padding:15px;">
                    <h2 class="fw-bold mb-3">Apply for Leave</h2>

                   <div class="mb-3">
                     <label for="" class="form-label">Reason</label>
                     <textarea class="form-control" name="reason" id="" rows="3"></textarea>
                   </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">Start Date</label>
                                <input type="date" id="form3Example1" class="form-control" />

                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example2">End Date</label>
                                <input type="date" id="form3Example2" class="form-control" />

                            </div>
                        </div>
                    </div>


                   



                    <!-- Submit button -->
                    <button type="submit" class="btn btn-success btn-block mb-4">
                        Apply for Leave
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
</section>




</div>
    
</body>
</html>