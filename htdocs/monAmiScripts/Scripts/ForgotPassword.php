<?php
session_start();
$mysqli = new mysqli("localhost", "root", "toor", "demo");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$nume=$_POST['nume'];
$email=$_POST['email'];
    if ($result = $mysqli->query("select * from loginform where nume='".$nume."' and email='".$email."' limit 1")) {

    $row_cnt = $result->num_rows;
        if ($row_cnt==1)
        {
             
            $_SESSION['email'] = $email;
              header("Location:ForgotPassword_2.php");
             $result->close();
             $mysqli->close();
            exit;
        }
        else 
        {
            $var_value="Date incorecte";
            $_SESSION['varname'] = $var_value;
              $_SESSION['exitcode'] = 3;
             header("Location:output.php");
        }
 
}

    $result->close();
$mysqli->close();
?>