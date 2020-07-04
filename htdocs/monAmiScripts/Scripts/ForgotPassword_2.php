<?php
session_start();
$email = $_SESSION['email'];
$code=rand(1000,9999);
$_SESSION['code']=$code;
?>






<html>
<head>
    <title> Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="../style/style_forgotpassword.css">
    <body>
    <div class="loginbox">
       <form method="POST" action="../Scripts/ChangePassword.php">
        <h1 style="text-align: left">Change Password</h1><br>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" autocomplete="off">
             <p>Confirm Password</p>
            <input type="password" name="repassword" placeholder="Re-Enter Password" autocomplete="off">
             <p>SecretCode: <?php echo $code;?></p>
            <input type="text" name="secretcode" placeholder="Enter SecretCode" autocomplete="off">
           <p><br></p>
           <input type="submit" name="" value="Change Password">
            <br>
        </form>
        </div>
    </body>
</head>
</html>