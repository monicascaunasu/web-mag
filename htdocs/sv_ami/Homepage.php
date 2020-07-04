<style>
    img.icon_website1
{
   margin-top: 40px;
    margin-left: 0px;
    width: 20%;
}
    img.icw2
{
   margin-top: 0px;
    margin-left: 0px;
    width: 20%;
}
        img.icw3
{
   margin-top: 20px;
    margin-left: 0px;
    width: 20%;
}
    
    .mySlides {display:none;}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(0, 0, 255);
}
    .quantity{
        position: absolute;
        color:red;
         font-weight: bold;
        right:5%;
        font-size: 30px;
        top:15%;
    }
li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 137px;
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
    <link rel="stylesheet" type="text/css" href="http://localhost/style/style_homepage.css">
    <body>
    <div class="top">
        <p class="b">
            
<?php


session_start();
$mysqli = new mysqli("localhost", "root", "toor", "demo");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}         

            
if (strlen($_SESSION['email'])==0) echo "<a href='http://localhost/html/Login.html'>Hello,Sign In</a>";
    else{
       
     echo "Bun venit, "; echo $_SESSION['printname'];
          if ($_SESSION['email']=='root')
        {
            echo"<br><a href='http://localhost/html/DisplayAccounts.html'>Administrare Conturi</a>";
            
        }
        echo"<br><a href='http://localhost/Scripts/DeleteActiveSession.php'>Logout</a>";
       
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
   
        if (strlen($_SESSION['email'])==0) echo "<img src='images/icon2.jpg' class='icon_website1'>";
        
        else if (strcmp($_SESSION['email'],'root')==0) echo "<img src='images/icon2.jpg' class='icw2'>";
        else echo "<img src='images/icon2.jpg' class='icw3'>";
        
?>
            
        
         <form method="POST" action="html/SearchProduct.html">
            <input type="text"  name="productname" placeholder="Cauta dupa nume" class="c" autocomplete="off">
             <?php 
                if (strlen($_SESSION['email'])==0)
                {
                    echo "<img src='images/av5.png' class='av5'><a href='html/Login.html' class='Contulmeu'>Contul meu</a>";
                    echo "<img src='images/av6.png' class='av6'><a href='html/Login.html' class='Cosulmeu'>Cosul meu</a>";
                }
             else
             {
                  echo "<img src='images/av5.png' class='av5'><a href='html/ContulMeu.php' class='Contulmeu'>Contul meu</a>";
                  echo "<img src='images/av6.png' class='av6'><a href='html/ShoppingCart.html' class='Cosulmeu'>Cosul meu</a>";
             }
             ?>
        </form>         
<br>
    
<ul>
  <li><a class="active" href="Homepage.php">Acasa</a></li>
    <li><a href="html/Category.html">Categorii</a></li>
  <li><a href="html/Contact.html">Contact</a></li> 
  <li><a href="/html/About.html">Despre noi</a></li> 
</ul>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<h2 class="w3-center"><br></h2>

<div class="w3-content w3-section" style="max-width:800px">
  <img class="mySlides" src="images/slides/img_slide1.png" style="width:100%">
  <img class="mySlides" src="images/slides/img_slide2.png" style="width:100%">
  <img class="mySlides" src="images/slides/img_slide3.PNG" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

     <br><br>
        
    </body>
</head>
</html>