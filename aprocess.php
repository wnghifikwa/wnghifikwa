<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "emsphpdb");



    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){

        echo "Hi";
    }

    else{
        $qry = mysqli_query($conn, "SELECT * FROM adminlog where email = '$email' and password='$password'");

        while($row=mysqli_fetch_assoc($qry)){
          
            $_SESSION['id'] =$row['id'];
            if($row['email']==$email){
                echo "Successfully login";
                header("location:admindash.php");
            }
        }
    }
   




?>