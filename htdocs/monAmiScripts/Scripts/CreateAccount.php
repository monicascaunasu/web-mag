<?php
session_start();
$mysqli = new mysqli("localhost", "root", "toor", "demo");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$telefon=$_POST['telefon'];
$pass=$_POST['password'];
$repass=$_POST['repassword'];
$email=$_POST['email'];

if (strlen($nume)<2) {
     $var_value="Nume prea scurta";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 0;
    header("Location:output.php");
    exit;
} 
if (strlen($prenume)<2) {
     $var_value="Prenume prea scurta";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 0;
    header("Location:output.php");
    exit;
} 
    if (strlen($pass)<4) {
     $var_value="Parola prea scurta";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 0;
    header("Location:output.php");
    exit;
} 
      if ($pass!=$repass){
     $var_value="Parolele nu coincid";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 0;
    header("Location:output.php");
    exit;
} 
     if (strlen($email)<4) {
     $var_value="Email prea scurt";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 0;
    header("Location:output.php");
    exit;
} 

    if ($result = $mysqli->query("select * from loginform where email='".$email."' limit 1")) {

    $row_cnt = $result->num_rows;
        if ($row_cnt==1)
        {
             $var_value="Contul se afla deja in baza de date";
            $_SESSION['varname'] = $var_value;
            $_SESSION['exitcode'] = 0;
              header("Location:output.php");
             $result->close();
             $mysqli->close();
            exit;
        }             
}

if ($mysqli->query("INSERT INTO loginform (nume,prenume,email, telefon,parola,cartquantity,wishlistquantity)
VALUES ('".$nume."', '".$prenume."', '".$email."','".$telefon."','".$pass."','0','0')"))
{
    $var_value="Contul a fost creat cu succes!";
            $_SESSION['varname'] = $var_value;
             $_SESSION['exitcode'] = 1;
     header("Location:output.php");
}
    $result->close();
$mysqli->close();
?>