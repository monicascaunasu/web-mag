<?php
session_start();

$host = getenv('MYSQL_HOST');
$dbUsername = getenv('MYSQL_USER');
$dbPassword = getenv('MYSQL_PASS');
$dbname = getenv('MYSQL_DB');
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbname);

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
     echo "Nume prea scurta";
   
    exit;
} 
if (strlen($prenume)<2) {
     echo "Prenume prea scurta";
   

    exit;
} 
    if (strlen($pass)<4) {
     echo "Parola prea scurta";
  

    exit;
} 
      if ($pass!=$repass){
    echo "Parolele nu coincid";
       exit;
} 
     if (strlen($email)<4) {
     echo"Email prea scurt";
    exit;
} 

    if ($result = $mysqli->query("select * from login where email='".$email."' limit 1")) {

    $row_cnt = $result->num_rows;
        if ($row_cnt==1)
        {
             echo"Contul se afla deja in baza de date";
             $result->close();
             $mysqli->close();
            exit;
        }             
}

if ($mysqli->query("INSERT INTO login (nume,prenume,email, telefon,parola)
VALUES ('".$nume."', '".$prenume."', '".$email."','".$telefon."','".$pass."')"))
{
   echo"Contul a fost creat cu succes!";

}
    $result->close();
$mysqli->close();
?>
