<?php
$conn = mysqli_connect("localhost", "root", "rootpassword", "bt_php");

if (!$conn) {
  echo "Database not connected";
}

echo "Database connected";
?>