<?php
session_start();
$id=$_POST['orderid'];
$email=$_SESSION['email'];

$host = getenv('MYSQL_HOST');
$dbUsername = getenv('MYSQL_USER');
$dbPassword = getenv('MYSQL_PASS');
$dbname = getenv('MYSQL_DB');
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$result = $mysqli->query("select * from cos where produs='".$id."' and email='".$email."' ");
$row = mysqli_fetch_array($result);
$val=(int)$row[2];
echo "$val";
if ($val==1)
{
    $mysqli->query("delete from cos where produs='".$id."' and email='".$email."'");
    header("Location:./cos.php");
    
}
else 
{
     $mysqli->query("update cos set cantitate=cantitate-1 where produs='".$id."' and email='".$email."'");

              header("Location:./cos.php");
}
$result->close();
$mysqli->close();
?>
