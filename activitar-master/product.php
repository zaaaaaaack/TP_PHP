    <?php
    // Check to make sure the id parameter is specified in the URL
    include './admin-dashboard/classes/ConnexionBD.php';
    $pdo = ConnexionBD::getInstance();

    if (isset($_GET['id'])) {
        // Prepare statement and execute, prevents SQL injection
        $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        // Fetch the product from the database and return the result as an Array
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        // Check if the product exists (array is not empty)
        if (!$product) {
            // Simple error to display if the id for the product doesn't exists (array is empty)
            exit('Product does not exist!');
        }
    } else {
        // Simple error to display if the id wasn't specified
        exit('Product does not exist!');
    }
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

    



    body {
        background: #151515;
        height: 100%;
        font-family: "Nunito Sans", sans-serif;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    }
    /* Apply styles to the container */
        .containerrr {
            padding-top: 160px; /* Add padding to the top of the container */
        }
        h2{
        color : black;
        }
        hr {
    color: black;
    }
        /* Apply styles to the product box */
                .product {
                display: flex;
                padding: 20px;
                border-radius: 15px;
                background-color: #333;
                color: #fff;
                border: 4px solid #e4381C; /* Set the border size and color */
            }

            /* Apply styles to the product image */
            .product img {
                margin-right: 20px;
                border-radius: 5px;
            }

            /* Apply styles to the product name */
            .product .name {
                font-size: 24px;
                margin-bottom: 10px;
            }

            /* Apply styles to the product price */
            .product .price {
                font-size: 20px;
                margin-bottom: 20px;
                color: #e4381C;
            }

            /* Apply styles to the Add to Cart button */
            .product input[type="submit"] {
                background-color: #e4381C;
                border: none;
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            /* Apply styles to the Add to Cart button on hover */
            .product input[type="submit"]:hover {
                background-color: #ff6600;
            }

            /* Apply styles to the product description */
            .product .description {
                font-size: 16px;
            }

            /* Apply styles to the quantity input */
            .product input[type="number"] {
                width: 400px;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        color: #555555;
        border-radius: 5px;
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
            <div style="display: flex;">
                <div class="logo">
                    <a href="./index.php">
                    <?php 
                        if(isset($_SESSION['username'])){
                            echo "<h4 style='color:white;'>".$_SESSION['username']."<i class='fa fa-user'></i></h4>";
                        }
                        else{
                    ?>
                    <img src="img/logo.png" alt="">
                    <?php } ?>
                    </a>
                </div>
                <div class="container">
                    <div class="nav-menu">
                        <nav class="mainmenu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./about-us.html">About us</a></li>
                                <li><a href="./schedule.html">Schedule</a></li>
                                <li><a href="./gallery.html">Gallery</a></li>
                                <li  ><a href="./boutique.php">Store</a></li>
                                <li><a href="./blog.html">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="./about-us.html">About Us</a></li>
                                        <li><a href="./blog-single.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contacts</a></li>
                                <?php 
                                if(isset($_SESSION['username'])){
                                    echo "<li><a href='./cart.php'>Cart</a></li>";
                                    echo "<li><a href='deconnexion.php'>Logout</a></li>";
                                    
                                }else{
                                    echo "<li><a href='login.php'>Login</a></li>";
                                
                                } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="top-social" style="display: flex;" >
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="deconnexion.php"><i class="fa fa-user"></i></a>
                    <a href="boutique.php"><i class="fa fa-cart-arrow-down"></i></a>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </header>
        <!-- Header Section End -->

        <div class="containerrr">
            <div class="product content-wrapper">
                <img src="<?=$product['img']?>" width="250" height="250" alt="<?=$product['name']?>">
                <div>
                    <h1 class="name"><?=$product['name']?></h1>
                    <span class="price">
                        &dollar;<?=$product['price']?>
                    </span>
                    <form action="cart.php" method="post">
                        <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                        <input type="hidden" name="product_id" value="<?=$product['id']?>">
                        <input type="submit" value="Add To Cart">
                    </form>
                    <div class="description">
                        <?=$product['description']?>
                    </div>
                </div>
            </div>
        </div>
    </body>




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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>


    </body>
    </html>