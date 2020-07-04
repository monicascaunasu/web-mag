<?php
session_start();
$var_value = $_SESSION['varname'];
$exit_code=$_SESSION['exitcode'];
?>
<?php
if ($exit_code==0) {
    $profpic = "../images/background/bg6.jpeg";
    $location="../html/CreateAccount.html";
    $l="Revenire";
}
else if ($exit_code==1){
    $profpic="../images/background/bg7.jpeg";
     $location="../Homepage.php";
     $l="Homepage";
}
else if ($exit_code==2){
    $profpic="../images/background/bg6.jpeg";
     $location="../scripts/ForgotPassword_2.php";
     $l="Revenire";
}
else if ($exit_code==3){
    $profpic="../images/background/bg6.jpeg";
     $location="../html/ForgotPassword.html";
     $l="Revenire";
}
else if ($exit_code==4){
    $profpic="../images/background/bg6.jpeg";
     $location="../html/Login.html";
     $l="Revenire";
}
else if ($exit_code==5){
    $profpic="../images/background/bg7.jpeg";
     $location="../html/Login.html";
     $l="Login";
}
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
<title>Output</title>
</head>
<body>
    <div class="Back">
         <p class="a"><?php echo  $var_value; ?></p>
       <form method="POST" action="<?php echo $location;?>">
           <input type="submit" name="" value="<?php echo $l;?>">
            <br>
        </form>
        </div>
</body>
</html>