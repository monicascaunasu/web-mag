<?php
session_start();
$mysqli = new mysqli("localhost", "root", "toor", "demo");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$email = $_SESSION['email'];
$secretcode=$_POST['secretcode'];
$pass=$_POST['password'];
$repass=$_POST['repassword'];
$code=$_SESSION['code'];
?>


<?php

if (strlen($pass)<4) {
     $var_value="Parola prea scurta";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 2;
    header("Location:output.php");
    exit;
} 

      if ($pass!=$repass){
     $var_value="Parolele nu coincid";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 2;
    header("Location:output.php");
    exit;
} 
        if ($code!=$secretcode){
     $var_value="SecretCode invalid";
    $_SESSION['varname'] = $var_value;
    $_SESSION['exitcode'] = 2;
    header("Location:output.php");
    exit;
} 

if ($mysqli->query("UPDATE loginform set parola='".$pass."' where email='".$email."'"));
{
    $var_value="Parola a fost modificata";
            $_SESSION['varname'] = $var_value;
             $_SESSION['exitcode'] = 1;
     header("Location:output.php");
}
    $profpic = "../images/background/bg6.jpeg";

 $result->close();
$mysqli->close();
?>




<html>
<head>
 <style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
}
</style>

<link rel="stylesheet" type="text/css" href="../style/style_output.css">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
</head>
<body>
   
    <div class="Back">
       
        
        </div>
</body>
</html>