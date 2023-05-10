<?php
include("regcon.php");

session_start();

session_unset();
session_destroy();

header("location:trysearch.php");


?>