<?php
session_start();
$id=$_POST['orderid'];
$mysqli = new mysqli("localhost", "root", "toor", "demo");
$result = $mysqli->query("select * from cartlist where id='".$id."'");
$row = mysqli_fetch_array($result);
$val=(int)$row[6];
if ($val==1)
{
    $mysqli->query("delete from cartlist where id='".$id."'");
     $val=(int)$_SESSION['cartquantity']-1;
     $_SESSION['cartquantity']=(string)$val;
    header("Location:../html/ShoppingCart.html");
    
}
else 
{
     $mysqli->query("update cartlist set quantity=quantity-1 where id='".$id."'");
     $val=(int)$_SESSION['cartquantity']-1;
     $_SESSION['cartquantity']=(string)$val;
              header("Location:../html/ShoppingCart.html");
}
$result->close();
$mysqli->close();
?>