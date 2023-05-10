<?php

$conn = mysqli_connect("localhost", "root", "", "salteddb");

$id = $_GET['del'];

$qry = mysqli_query($conn, "DELETE FROM `salted` WHERE id = '$id'");

if($qry){
    echo "Entry Deleted";
    header("location:trysearch.php");
}





?>