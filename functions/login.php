<?php
session_start();

require "connected.php";

$email = $_POST['email'];
$password = $_POST['password'];

// Query database untuk verifikasi user
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

// Cek apakah field berisi atau kosong
if ($email == '') {
   $_SESSION['msg-field-user'] = "Email tidak boleh kosong";
}

if ($password == '') {
   $_SESSION['msg-field-pass'] = "Password tidak boleh kosong";
}

if(isset($_SESSION['msg-field-user']) || isset($_SESSION['msg-field-pass'])){
   header('location: ../login_form.php');
   exit();
}

// Cek apakah username ditemukan
if ($result && mysqli_num_rows($result) > 0) {
   $user = mysqli_fetch_assoc($result);

   // Cek apakah password sesuai
   if ($password == $user['password']) {
      // Set session
      $_SESSION['email'] = $user['email'];
      header("location: ../index.php");
      exit();
      
   } else {
      $_SESSION['msg'] = "Email atau Password Anda Salah.";
      $_SESSION['msg-user'] = "Username tidak ditemukan.";
      header("location: ../login_form.php");
   }
} 