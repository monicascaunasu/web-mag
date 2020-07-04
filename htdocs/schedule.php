<!DOCTYPE html>
<html lang="zxx">
<?php 
session_start(); $email=$_SESSION['email'];

?>
<head>
<body background="img/gallery/gallery-3.jpg">
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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
                <a href="./index.html">
                    <img src="img/logo.png" alt="">
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
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">Login</a></li>
                            <li class="active"><a href="./schedule.php">Shop</a></li>
<!--                             <li><a href="./gallery.html">Tiredful Api</a></li> -->
                            <li><a href="./blog.html">General</a>
                                <ul class="dropdown">
                                    <li><a href="./about-us.html">Login</a></li>
                                    <li><a href="./blog-single.html">About Docker</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
	
	
	<div class="produs">
	
 <div class="prod" >
        <div class="prod-img">
        <img align="right-side" src="img/gallery/gallery-1.jpg" alt=""></div>
        <div class="prod-info">
            <p style="font-family: 'Dancing Script',cursive;"><font color="black">Calculator performant</font></p>
        <font color="black">Pret:1500 euro</font>
        <!--    <form action='#' method='POST'><button type='submit' name='orderid' value='product1' class='btn-link' formaction='scripts/addToCart.php'>Adauga in cos</button></form>-->
           
		</div>
			<div class="produs">
 <div class="prod" >
        <div class="prod-img">
        <img align="left-side" src="img/gallery/gallery-2.jpg" alt=""></div>
        <div class="prod-info">
            <p style="font-family: 'Dancing Script',cursive;"><font color="black">CYBER special PC</font></p>
        <font color="black">Pret:2000 euro</font>
        <!--    <form action='#' method='POST'><button type='submit' name='orderid' value='product2' class='btn-link' formaction='scripts/addToCart.php'>Adauga in cos</button></form>-->
		</div>
              
      
       
    
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
    
     <script>
                function validare1()
{
 alert('<?php  ;$_SESSION['item']="product1"; $_SESSION['pret']="1500"; $_SESSION['imgloc']="img/gallery/gallery-1.jpg"; echo "Produsul a fost adaugat in cos";?>');
                    window.location = 'scripts/AddToCart.php';

}
                    function validare2()
{
  alert('<?php $_SESSION['item']="product2"; $_SESSION['pret']="2000"; $_SESSION['imgloc']="img/gallery/gallery-2.jpg"; echo "Produsul a fost adaugat in cos";?>');
        
   
    window.location = 'scripts/AddToCart.php';
    
}
		
             
		
</script>
