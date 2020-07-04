<?php
session_start();
$mysqli = new mysqli("localhost", "root", "toor", "demo");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$email=$_POST['email'];
$pass=$_POST['password'];

    if ($result = $mysqli->query("select * from loginform where email='".$email."' AND parola='".$pass."' limit 1")) {

    /* determine number of rows result set */
    $row_cnt = $result->num_rows;

        $data1=$mysqli->query("select nume from loginform where email='".$email."'");
        $data2=$mysqli->query("select prenume from loginform where email='".$email."'");
        
        if ($row_cnt==1)
        {
			$_SESSION['email']=$email;
            $dbc = new mysqli("localhost", "root", "toor", "demo");
            $sql1="Select * from loginform where email='".$email."' AND parola='".$pass."'";
            $result1=mysqli_query($dbc,$sql1) or die("error");
            $row1=mysqli_fetch_assoc($result1);
			
			$_SESSION['printname']=$row1['prenume'] ." " . $row1['nume'];
			
            $_SESSION['cartquantity']=$row1['cartquantity'];
             header("Location:../Homepage.php");
            //add session element for carrying 
}
        else   
        {
            $_SESSION['varname'] ="Contul nu se afla in baza de date";
            $_SESSION['exitcode'] = 4;
              header("Location:output.php");   
        }
       
    /* close result set */
    $result->close();
}
   
/* close connection */
$mysqli->close();
?>