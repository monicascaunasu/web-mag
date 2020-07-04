<?php
session_start();
$_SESSION['email']="";
$_SESSION['cartquantity']="";
$_SESSION['wishlistquantity']="";
 header("Location:../Homepage.php");
?>