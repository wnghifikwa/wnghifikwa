<?php
  $conn = mysqli_connect("localhost", "root", "", "salteddb");
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($password) || empty($email)){
    echo "please enter valid password or Email address";
  }

  else{
  
  $qry = "SELECT * FROM salted WHERE email ='$email' AND pwd ='$password'";
 //echo $qry;
  $result=$conn->query($qry);
$count=mysqli_num_rows($result);
//echo $count;
if($count==1)
{

  while($row = mysqli_fetch_assoc($result))
  {
    session_start();

        $_SESSION['fname'] = $row['fname'];
        $_SESSION['id']= $row ['id'];
        if($row['email']== $email)
        {
           echo "<script> alert ('welcome')</script>";
            header("location:indexi.php");
        }
        else{
          echo "something went wrong";
        }
    }
  }
  
}
  ?>