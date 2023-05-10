
<?php
$conn = mysqli_connect("localhost", "root", "", "salteddb");
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
    <title>search me</title>
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
          <a class="nav-link" href="#">Try</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>  






  <div class="container mt-5">
    <form action="" method="post">
        <input type="text" name="search" class="form-control w-25">
        <button type="submit" name="submit" class="btn btn-success mt-2">Search</button>
    </form>
  </div>

  <div class="container w-75 mt-4">
<table class="table">
  <?php


if(isset($_POST['submit']));{
    $search = $_POST['search'];

    $qry = mysqli_query($conn, "SELECT * FROM `salted` WHERE id LIKE '%$search%' OR fname LIKE '%$search%' OR gender LIKE '%$search%' OR lname LIKE '%$search%'");

    if(mysqli_num_rows($qry)>0){
        echo "
        <thead>
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
        </tr>
        </thead>
        ";

        while($row = mysqli_fetch_assoc($qry)){
            echo '
            
            <tbody>
            <tr>
            <td>'.$row ['id'].'</td>
            <td>'.$row ['fname'].'</td>
            <td>'.$row ['lname'].'</td>
            <td>'.$row ['age'].'</td>
            <td>'.$row ['gender'].'</td>
            <td>'.$row ['email'].'</td>';
?>
            <td> <button type="submit" name="update" class="btn btn-success">  <a style="text-decoration: none;" href="update.php?id=<?php echo $row['id'];?>">  Update</a></button> </td>
            <td> <button type="submit" name="delete" class="btn btn-danger"> <a style="text-decoration: none;" href="delete.php?del=<?php echo $row['id'];  ?>">Delete</a> </button> </td>

<?php

echo
            "</tr>
            </tbody>";
        }
    }
}



?>
    
    </table>
  </div>

</body>
</html>