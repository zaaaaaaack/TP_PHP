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
   * {
	box-sizing: border-box;
	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
	font-size: 16px;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
html {
	height: 100%;
}
body {
	position: relative;
	min-height: 100%;
	color: #555555;
	background-color: #FFFFFF;
	margin: 0;
	padding-bottom: 100px; /* Same height as footer */
}
h1, h2, h3, h4, h5 {
	color: #394352;
}
.content-wrapper {
	width: 1050px;
	margin: 0 auto;
}
header {
	border-bottom: 1px solid #EEEEEE;
}
header .content-wrapper {
	display: flex;
}
header h1 {
	display: flex;
	flex-grow: 1;
	flex-basis: 0;
	font-size: 20px;
	margin: 0;
	padding: 24px 0;
}
header nav {
	display: flex;
	flex-grow: 1;
	flex-basis: 0;
	justify-content: center;
	align-items: center;
}
header nav a {
	text-decoration: none;
	color: #555555;
	padding: 10px 10px;
	margin: 0 10px;
}
header nav a:hover {
	border-bottom: 1px solid #aaa;
}
header .link-icons {
	display: flex;
	flex-grow: 1;
	flex-basis: 0;
	justify-content: flex-end;
	align-items: center;
	position: relative;
}
header .link-icons a {
	text-decoration: none;
	color: #394352;
	padding: 0 10px;
}
header .link-icons a:hover {
	color: #4e5c70;
}
header .link-icons a i {
	font-size: 18px;
}
header .link-icons a span {
	display: inline-block;
	text-align: center;
	background-color: #63748e;
	border-radius: 50%;
	color: #FFFFFF;
	font-size: 12px;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-weight: bold;
	position: absolute;
	top: 22px;
	right: 0;
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
footer {
	position: absolute;
	bottom: 0;
	border-top: 1px solid #EEEEEE;
	padding: 20px 0;
	width: 100%;
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

    <!-- Header End -->
    <div class="placeorder content-wrapper">
        <h1>Your Order Has Been Placed</h1>
        <p>Thank you for ordering with us! We'll contact you by email with your order details.</p>
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