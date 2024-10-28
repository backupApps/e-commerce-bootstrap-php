<?php
session_start();

require "connected.php";

$email = $_POST['email'];
$password = $_POST['password'];

// Query database untuk verifikasi user
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

// Cek apakah username ditemukan
if ($result && mysqli_num_rows($result) > 0) {
   $user = mysqli_fetch_assoc($result);

   // Cek apakah password sesuai
   if ($password == $user['password']) {
      // Set session
      $_SESSION['email'] = $user['email'];
      header("location: ../index.php");
      exit;
   } else {
      $error = "Password salah.";
   }
} else {
   $error = "Username tidak ditemukan.";
}