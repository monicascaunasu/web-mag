



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
</style>



<html>
<head>
    <title> Shopping Website </title>
    <link rel="stylesheet" type="text/css" href="../style/style_contulmeu.css">
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
         
<ul class="z">
  <li class="x"><a  href="../Homepage.html">Acasa</a></li>
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
            <li><a href="#" class="xx">Wishlist</a></li>s

          </ul>
        </div>
      </li>
    </ul>
  </nav>
</div>
         <div class="AccountDetail">
       
        
        <p>Nume</p>
            <input type="text" name="email" placeholder="Enter Email" autocomplete="off">
        <p>Prenume</p>
            <input type="password" name="password" placeholder="Enter Password">
             <?php 
echo "salut";
?>
           <p><br></p>
           <input type="submit" name="" value="Login">
            <br>
           
           
       
        </div>
        
      

    </body>
</head>
</html>