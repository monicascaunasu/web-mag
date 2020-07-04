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

$email=$_POST['email'];
$pass=$_POST['password'];

    if ($result = $mysqli->query("select * from login where email='".$email."' AND parola='".$pass."' limit 1")) {

    /* determine number of rows result set */
    $row_cnt = $result->num_rows;



        
        if ($row_cnt==1)
        {
			
			

          echo "login ok";
            $_SESSION['email']=$email;
		header("Location: ../schedule.php");
           
}
        else   
        {
             echo "login not ok";
        }
       
    /* close result set */
    $result->close();
}
   
/* close connection */
$mysqli->close();
?>
