<?php
session_start();
include 'bd_boutique.php';
$pdo = pdo_connect_mysql();

// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    // Prevent form resubmission...
    header('location: cart.php');
    exit;
}

//remove product from cart

if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}

if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: cart.php');
    exit;
}

if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: placeorder.php');
    exit;
}

$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
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
        
    h2{
    color : white;
    }
    main .featured {
	display: flex;
	flex-direction: column;
	background-image: url(imgs/featured-image.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	height: 500px;
	align-items: center;
	justify-content: center;
	text-align: center;
}
main .featured h2 {
	display: inline-block;
	margin: 0;
	width: 1050px;
	font-family: Rockwell, Courier Bold, Courier, Georgia, Times, Times New Roman, serif;
	font-size: 68px;
	color: #FFFFFF;
	padding-bottom: 10px;
}
main .featured p {
	display: inline-block;
	margin: 0;
	width: 1050px;
	font-size: 24px;
	color: #FFFFFF;
}
main .recentlyadded h2 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
	border-bottom: 1px solid #EEEEEE;
}
main .recentlyadded .products, main .products .products-wrapper {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between;
	padding: 40px 0 0 0;
}
main .recentlyadded .products .product, main .products .products-wrapper .product {
	display: block;
	overflow: hidden;
	text-decoration: none;
	width: 25%;
	padding-bottom: 60px;
}
main .recentlyadded .products .product img, main .products .products-wrapper .product img {
	transform: scale(1);
	transition: transform 1s;
}
main .recentlyadded .products .product .name, main .products .products-wrapper .product .name {
	display: block;
	color: #555555;
	padding: 20px 0 2px 0;
}
main .recentlyadded .products .product .price, main .products .products-wrapper .product .price {
	display: block;
	color: #999999;
}
main .recentlyadded .products .product .rrp, main .products .products-wrapper .product .rrp {
	color: #BBBBBB;
	text-decoration: line-through;
}
main .recentlyadded .products .product:hover img, main .products .products-wrapper .product:hover img {
	transform: scale(1.05);
	transition: transform 1s;
}
main .recentlyadded .products .product:hover .name, main .products .products-wrapper .product:hover .name {
	text-decoration: underline;
}
main > .product {
	display: flex;
	padding: 40px 0;
}
main > .product > div {
	padding-left: 15px;
}
main > .product h1 {
	font-size: 34px;
	font-weight: normal;
	margin: 0;
	padding: 20px 0 10px 0;
}
main > .product .price {
	display: block;
	font-size: 22px;
	color: #999999;
}
main > .product .rrp {
	color: #BBBBBB;
	text-decoration: line-through;
	font-size: 22px;
	padding-left: 5px;
}
main > .product form {
	display: flex;
	flex-flow: column;
	margin: 40px 0;
}
main > .product form input[type="number"] {
	width: 400px;
	padding: 10px;
	margin-bottom: 15px;
	border: 1px solid #ccc;
	color: #555555;
	border-radius: 5px;
}
main > .product form input[type="submit"] {
	background: #4e5c70;
	border: 0;
	color: #FFFFFF;
	width: 400px;
	padding: 12px 0;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: bold;
	border-radius: 5px;
	cursor: pointer;
}
main > .product form input[type="submit"]:hover {
	background: #434f61;
}
main > .products h1 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
}
main > .products .buttons {
	text-align: right;
	padding-bottom: 40px;
}
main > .products .buttons a {
	display: inline-block;
	text-decoration: none;
	margin-left: 5px;
	padding: 12px 20px;
	border: 0;
	background: #4e5c70;
	color: #FFFFFF;
	font-size: 14px;
	font-weight: bold;
	border-radius: 5px;
}
main > .products .buttons a:hover {
	background: #434f61;
}
main .cart h1 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
}
main .cart table {
	width: 100%;
}
main .cart table thead td {
	padding: 30px 0;
	border-bottom: 1px solid #EEEEEE;
}
main .cart table thead td:last-child {
	text-align: right;
}
main .cart table tbody td {
	padding: 20px 0;
	border-bottom: 1px solid #EEEEEE;
}
main .cart table tbody td:last-child {
	text-align: right;
}
main .cart table .img {
	width: 80px;
}
main .cart table .remove {
	color: #777777;
	font-size: 12px;
	padding-top: 3px;
}
main .cart table .remove:hover {
	text-decoration: underline;
}
main .cart table .price {
	color: #999999;
}
main .cart table a {
	text-decoration: none;
	color: #555555;
}
main .cart table input[type="number"] {
	width: 68px;
	padding: 10px;
	border: 1px solid #ccc;
	color: #555555;
	border-radius: 5px;
}
main .cart .subtotal {
	text-align: right;
	padding: 40px 0;
}
main .cart .subtotal .text {
	padding-right: 40px;
	font-size: 18px;
}
main .cart .subtotal .price {
	font-size: 18px;
	color: #999999;
}
main .cart .buttons {
	text-align: right;
	padding-bottom: 40px;
}
main .cart .buttons input[type="submit"] {
	margin-left: 5px;
	padding: 12px 20px;
	border: 0;
	background: #4e5c70;
	color: #FFFFFF;
	font-size: 14px;
	font-weight: bold;
	cursor: pointer;
	border-radius: 5px;
}
main .cart .buttons input[type="submit"]:hover {
	background: #434f61;
}
main .placeorder h1 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
}
main .placeorder p {
	text-align: center;
}
h1, h2, h5 {
    color: red; /* Change heading colors to red */
}

body {
    background-color: #333; /* Change background color to dark */
    color: #fff; /* Change text color to white */
}

/* Style for buttons */
input[type="submit"] {
    background: #000; /* Black background */
    border: 0;
    color: #fff;
    width: auto; /* Auto width for button */
    padding: 12px 25px; /* Padding for button */
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
    border-radius: 25px; /* Rounded corners */
    cursor: pointer;
    transition: background 0.3s ease; /* Smooth transition */
}

input[type="submit"]:hover {
    background: #555; /* Darker color on hover */
}

/* Table styles */
table {
    background-color: #222; /* Dark background for table */
}

table th, table td {
    border: 1px solid #444; /* Borders for table cells */
    padding: 10px;
}

/* Remove default styling for links */
a {
    color: #fff; /* White color for links */
    text-decoration: none; /* Remove underline */
}

a:hover {
    color: #f00; /* Red color on hover */
}

.table-container {
    margin: 0 auto; /* Auto margin to center horizontally */
    max-width: 800px; /* Adjust the max-width as needed */
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
                <a href="./index.php">
                    <img src="img/logo.png" alt="">
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




  
<div class="cart content-wrapper">
    <form action="cart.php?page=cart" method="post">
        <div class="table-container">
        <section>
        <table>
            <thead>
                <tr>
                    <td colspan="2">Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td class="img">
                        <a href="product.php?page=product&id=<?=$product['id']?>">
                            <img src="<?=$product['img']?>"  width="50" height="50" alt="<?=$product['name']?>">
                        </a>
                    </td>
                    <td>
                        <a href="product.php?page=product&id=<?=$product['id']?>"><?=$product['name']?></a>
                        <br>
                        <a href="cart.php?page=cart&remove=<?=$product['id']?>" class="remove">Remove</a>
                    </td>
                    <td class="price">&dollar;<?=$product['price']?></td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product['id']?>" value="<?=$products_in_cart[$product['id']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    </td>
                    <td class="price">&dollar;<?=$product['price'] * $products_in_cart[$product['id']]?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        </section>
        </div>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">&dollar;<?=$subtotal?></span>
        </div>
        <div class="buttons">
            <input type="submit" value="Update" name="update">
            <input type="submit" value="Place Order" name="placeorder">
        </div>
    </form>
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


