<?php





$conn = mysqli_connect("localhost", "root", "", "salteddb");

if(isset($_POST['update'])){

    $id = $_GET['id'];

    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpassword = $_POST['password1'];

    
   

    $qry = mysqli_query($conn, "UPDATE `salted` SET `fname`='$name ',`lname`=' $lastname ',`age`=' $age',`gender`=' $gender',`email`=' $email ',`pwp`='$password ',`cpwp`='$conpassword' WHERE id = '$id'");

    if($qry){
        echo "Suceess";
        header("location:trysearch.php");
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="searchconn.php">Try</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>  

  <?php
  
  $conn = mysqli_connect("localhost", "root", "", "salteddb");


  $id = $_GET['id'];
  

  $qry1 = mysqli_query($conn, "SELECT * FROM `salted` WHERE id = '$id'");
 

  while($row= mysqli_fetch_assoc($qry1)){

 
  ?>

  <div class="container w-50 mt-5">

 

  <form  method="post">
    <label class="label-control">First Name</label>
    <input type="text" class="form-control" name="firstname" value=" <?php echo $row['fname']?>" required>

    <label class="label-control">Last Name</label>
    <input type="text" class="form-control" name="lastname" value="<?php echo $row['lname']?>" required>

    <label class="label-control">Age</label>
    <input type="number" name="age" class="form-control" value="<?php echo $row['age']?>">

    <div class="mb-3">
        <label for="" class="form-label">Gender</label>
        <select class="form-select form-select-lg" name="gender">
            <option selected>Select one</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Rather not Answer">Rather not Answer</option>
        </select>
    </div>

    <label class="label-control">Email</label>
    <input type="email" value="<?php echo $row['email']?>" class="form-control" name="email" >

    <label class="label-control">Password</label>
    <input type="password" class="form-control" name="password" >

    <label class="label-control">Confirm Password</label>
    <input type="password" class="form-control" name="password1">

    <button type="submit" name="update" style="background-color: teal; border:none; width:100%; margin-top:14px; padding:14px; border-radius:13px;">Update</button>

  </form>
  </div>
<?php } ?>
</body>
</html>