<!DOCTYPE html>
<?php session_start();  ?>
<html lang="zxx">

<head>
<body background="./img/gallery/gallery-3.jpg">
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laborator</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="logo">
                <a href="../index.html">
                    <img src="../img/logo.png" alt="">
                </a>
            </div>
            <div class="top-social">
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="../about-us.html">Login</a></li>
                            <li class="active"><a href="./scripts/schedule.php">Shop</a></li>
<!--                             <li><a href="./gallery.html">Tiredful Api</a></li> -->
                            <li><a href="./blog.html">General</a>
                                <ul class="dropdown">
                                    <li><a href="./scripts/about-us.html">Login</a></li>
                                    <li><a href="../blog-single.html">About Docker</a></li>
                                </ul>
                            </li>
                            <li><a href="../contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
	
	

      
       
    
            </div> 
        </div>
        <div class="copyright-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ct-inside"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
            </div>
        </div>
    
      <table border='1' class="tablee">
  <tr>
    <td class='tdd' width=60%>Produs</td>
    <td class='tdd'><center>Cantitate</center></td>
    <td class='tdd'><center>Pret Unitar</center></td>
    <td class='tdd'><center>Subtotal</center></td>
  </tr>
  <tr>
<?php 
$email=$_SESSION['email'];
$mysqli = new mysqli("localhost", "root", "", "laborator");
$result = $mysqli->query("select * from cos where email='".$email."'");
$row_cnt = $result->num_rows;
$total=0;
while($row = mysqli_fetch_array($result))
{
echo "<td class='tdd'><img src='$row[4]' width='60' height='60'>&nbsp;&nbsp;{$row[3]}</td><td class='tdd' width='200'><center>{$row[2]}<br>";
echo "<form action='#' method='POST'><button type='submit' name='orderid' value='{$row[3]}' class='btn-link' formaction='scripts/IncreaseQuantityItem.php'>+</button>";
echo " <button type='submit' name='orderid' value='{$row[3]}' class='btn-link' formaction='scripts/DecreaseQuantityItem.php'>-</button></form></center></td>";
    $unitprice=$row[1];
  echo "<td class='tdd'>";
echo "<font color='red'>$unitprice Lei</font> </td>";
$valfloat=$unitprice*$row[2];
 echo "<td class='tdd'>";
echo "$valfloat Lei</td>";
echo"</tr>";
$total=$total+$valfloat;
}
echo "<tr><td></td><td></td><td></td><td>$total Lei</td><br class='tabspace'>"

?>
  
</table>
    
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
