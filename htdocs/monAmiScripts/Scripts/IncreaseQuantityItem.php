<?php
session_start();
$id=$_POST['orderid'];
$mysqli = new mysqli("localhost", "root", "toor", "demo");
$result = $mysqli->query("select * from cartlist where produs='".$id."'");
$row = mysqli_fetch_array($result);

     $mysqli->query("update cartlist set quantity=quantity+1 where produs='".$id."'");
     $val=(int)$_SESSION['cartquantity']+1;
     $_SESSION['cartquantity']=(string)$val;

              header("Location:../html/ShoppingCart.html");
$result->close();
$mysqli->close();
?>