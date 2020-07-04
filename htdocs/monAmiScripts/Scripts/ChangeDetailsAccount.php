<?php
session_start();
$mysqli = new mysqli("localhost", "root", "toor", "demo");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$email = $_SESSION['email'];
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$telefon=$_POST['telefon'];
$parola=$_POST['parola'];
$reparola=$_POST['reparola'];
$newemail=$_POST['emaili'];





if (strlen($parola)<4 && strlen($parola)!=0) {
     $var_value="Parola prea scurta";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 2;
    header("Location:output.php");
    exit;
} 

      if ($parola!=$reparola && strlen($parola)!=0){
     $var_value="Parolele nu coincid";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 2;
    header("Location:output.php");
    exit;
} 
   
if (strlen($nume)!=0)
{
    $mysqli->query("UPDATE loginform set nume='".$nume."' where email='".$email."'");
}
if (strlen($prenume)!=0)
{
     $mysqli->query("UPDATE loginform set prenume='".$prenume."' where email='".$email."'");
}
if (strlen($telefon)!=0)
{
    $mysqli->query("UPDATE loginform set telefon='".$telefon."' where email='".$email."'");
}
if (strlen($parola)!=0)
{
    $mysqli->query("UPDATE loginform set parola='".$parola."' where email='".$email."'");
}
if (strlen($newemail)!=0)
{
    $mysqli->query("UPDATE loginform set email='".$newemail."' where email='".$email."'");
}


    $var_value="Datele au fost modificate";
            $_SESSION['varname'] = $var_value;
            $_SESSION['email']="";
             $_SESSION['exitcode'] = 5;
     header("Location:output.php");
//scot elementul de transport-sesiune

 $result->close();
$mysqli->close();
?>