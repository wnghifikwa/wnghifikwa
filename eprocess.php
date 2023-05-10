<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "emsphpdb");


$email = $_POST['email'];
$password = $_POST['password'];

$qry = mysqli_query($conn, "SELECT * FROM employee WHERE email='$email' and password='$password'");


while($row = mysqli_fetch_assoc($qry)){
    $_SESSION['lname']= $row['lname'];

    $_SESSION['id'] = $row['id'];
    if($row['email']==$email){
        header("location:emdash.php");
    }

}

?>