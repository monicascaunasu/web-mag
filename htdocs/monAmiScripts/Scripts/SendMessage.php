<?php
session_start();
$name = $_POST['nume'];
$prenume=$_POST['prenume'];
$telefon = $_POST['telefon'];
$email=$_POST['email'];
$message=$_POST['mesaj'];
echo  "$name $prenume $telefon $email $message";
$mysqli = new mysqli("localhost", "root", "toor", "demo");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

<?php
//trebuie sa introduc mesajul intr un table, sa generez output specific 
//trebuie sa fac si mesajul prin elemtul de textare 

    if ($mysqli->query("INSERT INTO messages (nume, prenume,telefon,email,mesaj)
VALUES ('".$name."', '".$prenume."', '".$telefon."', '".$email."', '".$message."')"))
{
    $var_value="Mesajul a fost trimis cu succes!";
            $_SESSION['varname'] = $var_value;
             $_SESSION['exitcode'] = 1;
     header("Location:output.php");
}
    $result->close();
$mysqli->close();
?>
