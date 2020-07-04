<?php
session_start();
$mysqli = new mysqli("localhost", "root", "toor", "demo");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$email="root@toor.com";

if ($result = $mysqli->query("select * from loginform where email='".$email."'")) {

    while ($row = mysqli_fetch_row($result)) {
        printf ("%s (%s)\n%s (%s)\n", $row[0], $row[1],$row[3],$row[4]);
    }

    $result->close();
}
   

 
$mysqli->close();

  // $nume = $mysqli->query("select nume from loginform where email='".$email."' limit 1");
    //$prenume = $mysqli->query("select prenume from loginform where prenume='".$prenume."' limit 1"); 
    //$telefon= $mysqli->query("select telefon from loginform where telefon='".$telefon."' limit 1"); 
    
?>
<html>
<head>
</head>
<body>
    <p>Nume</p>
            <input type="text" name="nume" placeholder="a" autocomplete="off">
    <?php echo $result;?>
   
</body>
</html>