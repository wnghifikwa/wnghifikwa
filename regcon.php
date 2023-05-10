<?php

date_default_timezone_set('Asia/Calcutta');

$conn = mysqli_connect("localhost", "root", "", "salteddb");


    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpassword = $_POST['password1'];
    $date = date('d-m-Y');
    $time = date('H:i:s');

    
  
     
     
    $qry = mysqli_query($conn, "INSERT INTO `salted`(`fname`, `lname`, `age`, `gender`, `email`, `pwd`, `cpwd`, `date`, `time`) VALUES ('$name','$lastname','$age','$gender','$email','$password','$conpassword','$date','$time')");

    if($conn){
        echo "Data loaded successfully";
        header("location:indexi.php");
    }






?>