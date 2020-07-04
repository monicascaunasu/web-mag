


<style>
   
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
    
img.gallery{
    width:30%;
    height:40%;
}

.gallery{
    position: absolute;
    left:10%;
    top:80%;
}
</style>



<html>
<head>
    <title> Shopping Website </title>
    <link rel="stylesheet" type="text/css" href="../style/style_category.css">
    <body>
    <div class="top">
        <p class="b">
        <a href="http://localhost/html/Login.html">Hello,Sign In</a>
        </p>
    </div>
        
    <div>
            <img src="../images/icon2.jpg" class="icon_website">
         <form method="POST" action="search.php">
            <input type="text"  placeholder="Cauta dupa nume" class="c" autocomplete="off">
             <img src="../images/av5.png" class="av5"><a href="ContulMeu.html" class="Contulmeu">Contul meu</a>
             <img src="../images/av6.png" class="av6"><a href="CosulMeu.html" class="Cosulmeu">Cosul meu</a>
        </form>         
<br>


            
<ul>
  <li><a  href="../Homepage.html">Acasa</a></li>
    <li><a href="../html/Category.html" class="active">Categorii</a></li>
  <li><a href="../html/Contact.html">Contact</a></li>
  <li><a href="../html/About.html">Despre noi</a></li>
</ul>
</div>
            <br><br>
            <p class="t"><b>Electrocasnice</b></p>
            <hr color="black">
    <br><br>
    <table class="tab">
<?php
$mysqli = new mysqli("localhost", "root", "toor", "demo");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$i=4;
$email=$_SESSION['email'];
$result = $mysqli->query("select * from timages");
        
while ( $row = mysqli_fetch_row($result)) {
     if ($i%4==0) echo "<tr>";
    echo "<td><img src='../uploads/{$row[1]}' class='gallery'>";
    echo"</td>";
    if ($i%1==1) echo "</tr>";
    $i++; 
}     
    
  /* if ($i%4==0) echo "<tr>";
    echo "<td><img src='../uploads/{$row['img']}' alt='{$row['title']}' class='gal'  ></td>";
    if ($i%1==1) echo "</tr>";
    $i++;*/


?>
        </table>   
     <br><br>
    </body>
</head>
</html>