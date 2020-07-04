<?php
session_start();
$email=$_POST['email'];
echo $email;
$mysqli = new mysqli("localhost", "root", "toor", "demo");
$mysqli->query("delete from loginform where email='".$email."'");
$mysqli->query("delete from cartlist where email='".$email."'");
header("Location:../html/DisplayAccounts.html");
$result->close();
$mysqli->close();
?>