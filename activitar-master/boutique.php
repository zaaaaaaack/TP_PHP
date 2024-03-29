<?php
session_start();
include 'bd_boutique.php';
$pdo = pdo_connect_mysql();


$stmt = $pdo->prepare('SELECT * FROM products');
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitar | Template</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3cssbootstrap.min.css" integrity="sha384MCw98SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
    h2{
    color : white;
    }
    hr {
  color: black;
}
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid" style="display: flex;">
            <div class="logo">
                <a href="./index.html">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">About us</a></li>
                            <li><a href="./schedule.html">Schedule</a></li>
                            <li><a href="./gallery.html">Gallery</a></li>
                            <li  class="active" ><a href="./e-boutique.html">Store</a></li>
                            <li><a href="./blog.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="./about-us.html">About Us</a></li>
                                    <li><a href="./blog-single.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="top-social" style="display: flex;" >
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-cart-arrow-down"></i></a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
   

    <section id="products" >
  
        <?php
        $men_products = [];
        $women_products = [];
        $supplements = [];

        foreach ($products as $product) {
            if ($product['categorie'] == "Men's sportswear") {
                $men_products[] = $product;
            } elseif ($product['categorie'] == "Women's sportswear") {
                $women_products[] = $product;
            } elseif ($product['categorie'] == "Supplements") {
                $supplements[] = $product;
            }
        }

        // Display men's products first
        foreach ($men_products as $product):
        ?>
        <section class="section-p1">
            <hr>
            <h2><?=$product['categorie']?></h2>
            <a href="product.php?id=<?=$product['id']?>" class="product">
                <div class="pro-container">
                    <div class="pro">
                        <div class ="des">
                            <img src="imgs/<?=$product['img']?>" alt="">
                            <span>admiral</span>
                            <h5><?=$product['name']?></h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>&dollar;<?=$product['price']?></h4>
                        </div>
                        
                    </div>
                    <a href="product.php?id=1"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            </a>
        </section>
        <?php
        endforeach;

        // Display women's products next
        foreach ($women_products as $product):
        ?>
        <section class="section-p1">
            <h2><?=$product['categorie']?></h2>
            <a href="product.php?id=<?=$product['id']?>" class="product">
                <div class="pro-container">
                    <div class="pro">
                        <div class ="des">    
                            <img src="imgs/<?=$product['img']?>" alt="">
                            <span>admiral</span>
                            <h5><?=$product['name']?></h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>&dollar;<?=$product['price']?></h4>
                        </div>
                    </div>
                    <a href="product.php?id=1"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            </a>
        </section>
        <?php
        endforeach;

        // Display supplements
        foreach ($supplements as $product):
        ?>
        <section class="section-p1">
            <h2><?=$product['categorie']?></h2>
            <a href="product.php?id=<?=$product['id']?>" class="product">
                <div class="pro-container">
                    <div class="pro">
                        <div class ="des">
                            <img src="imgs/<?=$product['img']?>" alt="">
                            <span>admiral</span>
                            <h5><?=$product['name']?></h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>&dollar;<?=$product['price']?></h4>
                         </div>    
                    </div>
                    <a href="product.php?id=1"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            </a>
        </section>
        <?php
        endforeach;
        ?>
    </div>






 <!-- Footer Section Begin -->
 <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo-item">
                        <div class="f-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Despite growth of the Internet over the past seven years, the use of toll-free phone numbers
                            in television advertising continues.</p>
                        <div class="social-links">
                            <h6>Follow us</h6>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Our Blog</h5>
                        <div class="footer-blog">
                            <a href="#" class="fb-item">
                                <h6>Most people who work</h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>Freelance Design Tricks How </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>have a computer at home have had </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Program</h5>
                        <ul class="workout-program">
                            <li><a href="#">Bodybuilding</a></li>
                            <li><a href="#">Running</a></li>
                            <li><a href="#">Streching</a></li>
                            <li><a href="#">Weight Loss</a></li>
                            <li><a href="#">Gym Fitness</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Get Info</h5>
                        <ul class="footer-info">
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>Phone:</span>
                                (12) 345 6789
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span>Email:</span>
                                Colorlib.info@gmail.com
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Address</span>
                                Iris Watson, Box 283 8562, NY
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ct-inside"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
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