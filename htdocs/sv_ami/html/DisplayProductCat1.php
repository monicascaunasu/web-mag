

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
 .quantity{
        position: absolute;
        color:red;
         font-weight: bold;
        right:5.3%;
        font-size: 30px;
        top:16%;
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
    table.tab1{
             position: absolute;
    left:5%;
    top:130%;
}
     table.tab2{
            position: absolute;
    right:7%;
    top:130%;
}
    table.tab3{
    position: absolute;
    right:24%;
    top:150%;
}
     table.tab4{
    position: absolute;
    right:21%;
    top:170%;
}

    p.p1{
    position: absolute;
    left:5%;
    top:123%;
}
    p.p2{
        position: absolute;
        
    right:40%;
    top:120%;
}
    p.p3{
        position: absolute;
    right:41.5%;
    top:140%;
}
      p.p4{
        position: absolute;
    right:33%;
    top:162%;
}
  .centerr {
  display: block;
  margin-left: auto;
  margin-right: auto;
   width: 30%;
    height: 40%;
}
    
    p.pelem{
        font-size: 30px;
        text-align: center;
    }
    p.cod{
         font-size: 20px;
        text-align: center;
    }
    .button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  position: absolute;
  left:70%;
  top:80%;
  width: 200px;
  height: 50px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    p.price{
        color:red;
        position: absolute;
        left:70%;
        top:70%;
        font-size: 30px;
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
    <link rel="stylesheet" type="text/css" href="../style/style_DisplayProductCat.css">
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
            <?php 
                if (strlen($_SESSION['email'])==0)
                {
                    echo "<img src='../images/av5.png' class='av5'><a href='Login.html' class='Contulmeu'>Contul meu</a>";
                    echo "<img src='../images/av6.png' class='av6'><a href='Login.html' class='Cosulmeu'>Cosul meu</a>";
                }
             else
             {
                  echo "<img src='../images/av5.png' class='av5'><a href='ContulMeu.php' class='Contulmeu'>Contul meu</a>";
                  echo "<img src='../images/av6.png' class='av6'><a href='ShoppingCart.html' class='Cosulmeu'>Cosul meu</a>";
             }
             ?>
        </form>
<br>
           
<ul>
  <li><a  href="../Homepage.php">Acasa</a></li>
    <li><a href="../html/Category.html" class="active">Categorii</a></li>
  <li><a href="../html/Contact.html">Contact</a></li>
  <li><a href="../html/About.html">Despre noi</a></li>
</ul>
</div>
           <br>

        
<?php
session_start();
$product = $_POST['product'];
$dbc = new mysqli("localhost", "root", "toor", "demo");
$sql1="Select * from timages where title='".$product."'";
$result1=mysqli_query($dbc,$sql1) or die("error");
$sql2="Select * from cat1 where title='".$product."'";
$result2=mysqli_query($dbc,$sql2) or die("error");
$i=0;
$row1=mysqli_fetch_assoc($result1);
$row2=mysqli_fetch_assoc($result2);
    
        
        $_SESSION['description']=$row1['description'];
        $_SESSION['codprodus']=$row2['codprodus'];
        $_SESSION['price']=$row1['price'];
        $_SESSION['img']=$row1['img'];
        echo "<p class='pelem'><b>{$row1['description']}</b></p>";
        echo "<p class='cod'>Cod Produs: {$row2['codprodus']}</p>";
        echo "<img src='../uploads/{$row1['img']}' alt='Product' class='centerr'>";
        echo "<b><p class='price'>{$row1['price']}</p></b>";
        
        
        echo"";
        echo "<a id='mylink'  onclick='validare();'><button class='button'><span>Adauga in cos </span></button></a>";
        echo "<br><br>";
?>
       
        
        <b><p class="p1">Caracteristici generale</p><b><p class="p2">Garantie</p></b>
        </b><br>
        <table class="tab1" border="1">
  <tr>
    <td>Capacitate de spalare (kg)</td>
    <td><?php echo "${row2['capacitatespalare']}";?></td>
  </tr>
  <tr>
    <td height="50%">Functii / Optiuni</td>
    <td  width="200px"><?php echo "${row2['functii']}";?></td>
  </tr>
  <tr>
    <td>Viteza de centrifugare (rpm)</td>
    <td><?php echo "${row2['vitezacentrifugare']}";?></td>
  </tr>
  <tr>
    <td>Clasa eficienta energetica</td>
    <td>A+++</td>
  </tr>
</table>
        <table class="tab2" border="1">
  <tr>
    <td  width="300px">Garantie comerciala</td>
    <td  width="200px"><?php echo "${row2['garantie']} luni";?></td>
  </tr>
  <tr>
    <td  width="300px">Garantie de conformitate</td>
    <td  width="200px"><?php echo "${row2['garantie']} luni";?></td>
  </tr>
</table>


     <br><br>
<script>
function validare()
{
   alert('Produsul a fost adaugat in cos');
    window.location = '../Scripts/AddToCart.php';
   
}
</script>
    </body>
</head>
</html>

<b><p class="p3">Altele</p><b>
<table class="tab3" border="1">
  <tr>
    <td>Greutate (Kg)</td>
    <td><?php echo "${row2['greutate']}";?></td>
  </tr>
  <tr>
    <td>Culoare</td>
    <td><?php echo "${row2['culoare']}";?></td>
  </tr>
  <tr>
    <td>Dimensiuni (L x A x I cm)</td>
    <td><?php echo "${row2['dimensiune']}";?></td>
  </tr>
</table>
    
    <b><p class="p4">Caracteristici tehnice</p><b>
    <table class="tab4" border="1">
  <tr>
    <td>Consum energetic (kWh)</td>
    <td><?php echo "${row2['consumenergetic']}";?></td>
  </tr>
  <tr>
    <td>Consum de apa (l)</td>
    <td><?php echo "${row2['consumapa']}";?></td>
  </tr>
  <tr>
    <td>Nivel de zgomot la spalare (dB)</td>
    <td><?php echo "${row2['nivelzgomot']}";?></td>
  </tr>
</table>
    <Br><br>