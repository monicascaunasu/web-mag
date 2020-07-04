<?php
session_start();
$item=$_POST['orderid'];
$email=$_SESSION['email'];
if ($item=="product1")
{
    $pret="1500";
    $imgloc="./img/gallery/gallery-1.jpg";
}
else 
{
     $pret="2000";
    $imgloc="./img/gallery/gallery-2.jpg";
}
$cant="1";



 $host = getenv('MYSQL_HOST');
$dbUsername = getenv('MYSQL_USER');
$dbPassword = getenv('MYSQL_PASS');
$dbname = getenv('MYSQL_DB');
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  
    if ($result = $mysqli->query("select * from cos where email='".$email."' AND produs='".$item."' limit 1")) {

    $row_cnt = $result->num_rows;
        if ($row_cnt==1)
        {
            echo "update";
            $mysqli->query("update cos set cantitate=cantitate+1 where email='".$email."' AND produs='".$item."'");
              header("Location: ./cos.php");
             $result->close();
             $mysqli->close();
            exit;
        }             
}
echo "ok ?"; 

if ($mysqli->query("INSERT INTO cos (email,pret,cantitate, produs,imgloc)
VALUES ('".$email."', '".$pret."', '".$cant."','".$item."','".$imgloc."')"))
{
    header("Location: ./cos.php");
}

$result->close();
$mysqli->close();



?>
