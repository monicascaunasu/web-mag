<?php
session_start();
$description=$_SESSION['description'];
$codprodus=$_SESSION['codprodus'];
$price=$_SESSION['price'];
$img=$_SESSION['img'];
$email=$_SESSION['email'];
$title=substr($img, 0, -4);

//in loginform am nevoie de un counter pentru produse
 $mysqli = new mysqli("localhost", "root", "toor", "demo");
  
    if ($result = $mysqli->query("select * from cartlist where email='".$email."' AND img='".$img."' limit 1")) {

    $row_cnt = $result->num_rows;
        if ($row_cnt==1)
        {
            $mysqli->query("update cartlist set quantity=quantity+1 where email='".$email."' AND img='".$img."'");
              header("Location:../html/Category.html");
             $result->close();
             $mysqli->close();
            exit;
        }             
}

if ($mysqli->query("INSERT INTO cartlist (title,email,price, codprodus,description,img,quantity)
VALUES ('".$title."', '".$email."', '".$price."','".$codprodus."','".$description."','".$img."','1')"))
{
    header("Location:../html/Category.html");
}
$mysqli->query("update loginform set cartquantity=cartquantity+1 where email='".$email."'");
$x=(int)$_SESSION['cartquantity'];
$x=$x+1;
$_SESSION['cartquantity']=(string)$x;
$result->close();
$mysqli->close();



?>