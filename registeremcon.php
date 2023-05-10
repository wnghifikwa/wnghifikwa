<?php

$conn = mysqli_connect("localhost", "root", "", "emsphpdb");

if(isset($_POST['add'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $fnumber = $_POST['fnumber'];
    $address = $_POST['address'];
    $dep = $_POST['department'];
    $qualification = $_POST['qualification'];
    $filename = $_FILES['image']['name'];
    $target="uploads/";
    $target_file=$target . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png","gif");

    if( in_array($imageFileType,$extensions_arr) ){
        $qry = mysqli_query($conn, "INSERT INTO `employee`(`fname`, `lname`, `email`, `password`, `birthday`, `gender`, `contact`, `fnum`, `adress`, `dept`, `qualification`, `photo`) VALUES ('$fname','$lname','$email','$password','$dob','$gender','$contact','$fnumber','$address','$dep','$qualification','$filename')");
        move_uploaded_file($_FILES["image"]["tmp_name"],$target.$filename);

        echo "<script>alert ('')</script>";
        header("location:admindash.php");
    }
    }
    else{
       
    
}

?>