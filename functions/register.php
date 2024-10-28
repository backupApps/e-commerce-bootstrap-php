<?php
session_start();

require "connected.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $phone = $_POST['phone'];
// $address = $_POST['address'];
// $city = $_POST['city'];
// $zip = $_POST['zip'];
// $state = $_POST['state'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
$result = mysqli_query($conn, $sql);
if ($result) {
   
   header("location: ../login.php");
   
}

mysqli_close($conn);