<?php
session_start();
$mysqli = new mysqli("localhost", "root", "toor", "demo");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$email=$_SESSION['email'];
if ($result = $mysqli->query("select * from loginform where email='".$email."'")) {

    $row = mysqli_fetch_row($result);
      

    $result->close();
}
 
$mysqli->close();

?>



<style>
    img.icon_website1
{
   margin-top: 60px;
    margin-left: 0px;
    width: 20%;
}
    img.icw2
{
   margin-top: 30px;
    margin-left: 0px;
    width: 20%;
}
        img.icw3
{
   margin-top: 40px;
    margin-left: 0px;
    width: 20%;
}
.quantity{
        position: absolute;
        color:red;
         font-weight: bold;
          right:5.3%;
        font-size: 30px;
        top:21%;
    }
    .asd {
color: black; 
  background-color: transparent; 
    text-decoration: none;
}


.asd:hover {
  color: white;
  text-decoration: underline;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(0, 0, 255);
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 138px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: rgb(0, 0, 165);
}

.active {
  background-color: #4CAF50;
}
</style>



<html>
<head>
    <title> Shopping Website </title>
    <link rel="stylesheet" type="text/css" href="../style/style_contulmeu.css">
    <body>
    <div class="top">
        <p class="b">
          <?php

session_start();
$mysqli = new mysqli("localhost", "root", "toor", "demo");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
        
            
if (strlen($_SESSION['email'])==0) echo "<a href='http://localhost/html/Login.html' class='asd'>Hello,Sign In</a>";
    else{
      echo "Bun venit, "; echo $_SESSION['printname'];
          if ($_SESSION['email']=='root')
        {
            echo"<br><a href='http://localhost/html/DisplayAccounts.html' class='asd'>Administrare Conturi</a>";
            
        }
        echo"<br><a href='http://localhost/Scripts/DeleteActiveSession.php' class='asd'>Logout</a>";
    }

?>   
        </p>
    </div>
         <?php
        if (strlen($_SESSION['cartquantity'])!=0)
        {
        echo "<p class='quantity'>";
        echo $_SESSION['cartquantity'];
        echo "</p>";
        }
        
        ?>
    <div>
               <?php
   
       if (strlen($_SESSION['email'])==0) echo "<img src='../images/icon2.jpg' class='icon_website1'>";
        else if (strcmp($_SESSION['email'],'root')==0) echo "<img src='../images/icon2.jpg' class='icw2'>";
        else echo "<img src='../images/icon2.jpg' class='icw3'>";
        
?>
         <form method="POST" action="SearchProduct.html">
            <input type="text"  placeholder="Cauta dupa nume" class="c" autocomplete="off">
             <img src="../images/av5.png" class="av5"><a href="ContulMeu.php" class="Contulmeu">Contul meu</a>
             <img src="../images/av6.png" class="av6"><a href="ShoppingCart.html" class="Cosulmeu">Cosul meu</a>
        </form>         
<br>
         
<ul class="z">
  <li class="x"><a  href="../Homepage.php">Acasa</a></li>
    <li class="x"><a href="../html/Category.html">Categorii</a></li>
  <li class="x"><a href="../html/Contact.html" >Contact</a></li> 
  <li class="x"><a href="../html/About.html">Despre noi</a></li> 
</ul>
</div>
   <br>
        <hr>
        <br><br>
        
<div class="wrapper">
  <nav class="vertical">
    <ul>
      <li>
        
        <div>
          <ul>
            <li><a href="#" class="active">Informatii cont</a></li>
            <li><a href="#" class="xx">Wishlist</a></li>

          </ul>
        </div>
      </li>
    </ul>
  </nav>
</div>
        
        
         <div class="AccountDetail">
    <form method="POST" action="../Scripts/ChangeDetailsAccount.php">
        <p>Nume</p>
            <input type="text" name="nume" placeholder="<?php echo $row[0];?>" autocomplete="off">
        <p>Prenume</p>
            <input type="text" name="prenume" placeholder="<?php echo $row[1];?>" autocomplete="off">
        <p>Email</p>
            <input type="text" name="emaili" placeholder="<?php echo $row[2];?>" autocomplete="off">
        <p>Telefon</p>
            <input type="text" name="telefon" placeholder="<?php echo $row[3];?>" autocomplete="off">
        <p>Parola</p>
            <input type="password" name="parola" placeholder="Enter Parola" autocomplete="off">
        <p>Confirmati Parola</p>
            <input type="password" name="reparola" placeholder="Enter Parola" autocomplete="off">
          
           <p><br></p>
           <input type="submit" name="" value="Change">
            <br>
           
           
             </form>
        </div>
        
      

    </body>
</head>
</html>