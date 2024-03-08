<?php

include 'config/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query9 = "SELECT * FROM siswa WHERE username='$username' AND password='$password'";
$result = mysqli_query($is_connect, $query9);

if (mysqli_num_rows($result)> 0){
  session_start();
  $_SESSION['username'] = $username;
  header("Location: index.php");
} else {
  echo 'gagal';
}