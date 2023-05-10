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
    <link rel="stylesheet" href="adminpage.css">
    <style>

    </style>
    <title>Employee register</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #023020;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">EMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="em" href="#">Add Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">View Employee</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Employee Leave</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" >



        <section class="text-center">



            <div class="card mt-3">
                <div class="card-body py-4 px-md-5">

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            
                           
                                <form action="registeremcon.php" method="post" enctype="multipart/form-data" style="box-shadow: 1px 2px 6px 1px; padding:15px;">
                                <h2 class="fw-bold mb-3">Employee registration</h2>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1">First name</label>
                                            <input type="text" id="form3Example1" name="fname" class="form-control" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example2">Last name</label>
                                            <input type="text" id="form3Example2" name="lname" class="form-control" />

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1">Email Address</label>
                                            <input type="email" id="form3Example1" name="email" class="form-control" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example2">Password</label>
                                            <input type="password" id="form3Example2" name="password" class="form-control" />

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1">Birthday</label>
                                            <input type="date" id="form3Example1" name="dob" class="form-control" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <div class="mb-2">
                                                <label for="" class="form-label">Gender</label>
                                                <select class="form-select form-select-md" name="gender" id="">
                                                    <option selected>Select one</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Rather not say">Rather not say</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                        <label class="form-label" for="form3Example1">Contact</label>
                                            <input type="text" id="form3Example1" name="contact" class="form-control" />
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                        <label class="form-label" for="form3Example2">Force Number</label>
                                            <input type="number" id="form3Example2" name="fnumber" class="form-control" />
                                          
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                        <label class="form-label" for="form3Example1">Address</label>
                                            <input type="text" id="form3Example1" name="address" class="form-control" />
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                        <label class="form-label" for="form3Example2">Department</label>
                                            <input type="text" id="form3Example2" name="department" class="form-control" />
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                        <label class="form-label" for="form3Example1">Qualification</label>
                                            <input type="text" id="form3Example1" name="qualification" class="form-control" />
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                        <label class="form-label" for="form3Example2">Profile Picture</label>
                                            <input type="file" id="form3Example2" name="image" class="form-control" />
                                          
                                        </div>
                                    </div>
                                </div>


                                <!-- Submit button -->
                                <button type="submit" name="add" class="btn btn-success btn-block mb-4">
                                    Add Employee
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>



</body>

</html>