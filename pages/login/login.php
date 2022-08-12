<?php
require_once 'config.php';
error_reporting(0);
session_start();
if(isset($_SESSION['username'])){
  echo "<script>window.location.href='index.php?page=login-successful'</script>";
}

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysql_query($pdo_conn)
}
?>