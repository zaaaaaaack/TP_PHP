<?php 
    require 'loginFunctions.php';
    checkLoggedIn();
    
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
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">About us</a></li>
                            <li><a href="./schedule.html">Schedule</a></li>
                            <li><a href="./gallery.html">Gallery</a></li>
                            <li><a href="./e-boutique.html">Store</a></li>
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
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Join Us Now</h2>
                                <h1>FITNESS & SPORT</h1>
                                <a href="register.php" class="primary-btn">Join Us</a>
                                <a href="login.php" class="primary-btn">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Join Us Now</h2>
                                <h1>FITNESS & SPORT</h1>
                                <a href="#" class="primary-btn">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Join Us Now</h2>
                                <h1>FITNESS & SPORT</h1>
                                <a href="#" class="primary-btn">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Feature Section Begin -->
    <section class="feature-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-item set-bg" data-setbg="img/feature/feature-1.jpg">
                        <h3>GROUP CLASSES</h3>
                        <p>Join our dynamic group classes led by expert instructors. With options for all levels and interests, there's something for everyone. Reach your fitness goals in our vibrant community.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item set-bg" data-setbg="img/feature/feature-2.jpg">
                        <h3>PERSONAL TRAINING</h3>
                        <p>Experience personalized training at our gym. Our certified trainers create tailored workouts to meet your goals and fitness level. Get expert support and see real results. Join us today.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item set-bg" data-setbg="img/feature/feature-3.jpg">
                        <h3>Sports Nutrition</h3>
                        <p>
                            Elevate your gym experience with our shop offering stylish workout gear and nourishing snacks. Find the essentials you need to look and feel your best during workouts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- About Section Begin -->
    
    <!-- About Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section">
        <div class="class-title set-bg" data-setbg="img/classes-title-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                            <h2>Choose Your Program</h2>
                            <p>Our Crossfit experts can help you discover new training techniques and exercises that offer a dynamic and efficient full-body workout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-1.jpg">
                        <h4>Crossfit Level 1</h4>
                        <p>Dive into the world of functional fitness with our CrossFit Level 1 class, where you'll learn foundational movements and techniques under expert guidance to build strength and improve overall fitness.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-2.jpg">
                        <h4>BootCamp</h4>
                        <p> Get ready to sweat with our Bootcamp class, combining strength training, cardio, and agility drills for a full-body workout that challenges and motivates.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-3.jpg">
                        <h4>Energy Blast</h4>
                        <p> Ignite your energy levels with our high-intensity Energy Blast class, designed to push your limits and boost cardiovascular endurance. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-4.jpg">
                        <h4>CLASSIC BODY BALANCE</h4>
                        <p>Achieve harmony between mind and body with our Classic Body Balance class, focusing on flexibility, strength, and relaxation techniques.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->

    <!-- Class Time Section Begin -->
    <section class="classtime-section class-time-table spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Classtime Table</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timetable-controls">
                        <ul>
                            <li class="active" data-tsfilter="all">all class</li>
                            <li data-tsfilter="crossfit">crossfit</li>
                            <li data-tsfilter="lunge">lunge ball</li>
                            <li data-tsfilter="ppsr">ppsr</li>
                            <li data-tsfilter="walls">walls</li>
                            <li data-tsfilter="candy">candy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="classtime-table">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="workout-time">10.00</td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>10.00 - 14.00</span>
                                <h6>Crossfit lv1</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>10.00 - 15.00</span>
                                <h6>Crossfit lv1</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="lunge">
                                <span>10.00 - 13.00</span>
                                <h6>Lunge Ball Bur</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="lunge">
                                <span>10.00 - 13.30</span>
                                <h6>Lunge Ball Bur</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">14.00</td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="lunge">
                                <span>14.00 - 17.00</span>
                                <h6>Lunge Ball Bur</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>14.00 - 17.00</span>
                                <h6>Crossfit lv1</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="walls">
                                <span>14.00 - 15.30</span>
                                <h6>Walls to Knees</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">16.00</td>
                            <td class="hover-bg ts-item" data-tsmeta="lunge">
                                <span>16.00 - 18.00</span>
                                <h6>Lunge Ball Bur</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="candy">
                                <span>16.00 - 19.00</span>
                                <h6>Candy</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="candy">
                                <span>16.00 - 19.00</span>
                                <h6>Candy</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="ppsr">
                                <span>16.00 - 17.00</span>
                                <h6>Ppsr</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="murph">
                                <span>16.00 - 20.00</span>
                                <h6>murph</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">18.00</td>
                            <td class="hover-bg ts-item" data-tsmeta="walls">
                                <span>18.00 - 20.00</span>
                                <h6>Walls to Knees</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="ppsr">
                                <span>18.00 - 20.00</span>
                                <h6>ppsr</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="chelsea">
                                <span>18.00 - 22.00</span>
                                <h6>Chelsea</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="annie">
                                <span>18.00 - 22.00</span>
                                <h6>annie</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">20.00</td>
                            <td class="hover-bg ts-item" data-tsmeta="lunge">
                                <span>21.00 - 23.00</span>
                                <h6>Lunge Ball Bur</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="walls">
                                <span>20.00 - 22.00</span>
                                <h6>Walls to Knees</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="walls">
                                <span>20.30 - 23.00</span>
                                <h6>Walls to Knees</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>22.00 - 23.00</span>
                                <h6>Crossfit Lv2</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>21.00 - 23.00</span>
                                <h6>Crossfit Lv2</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Class Time Section End -->

    <!-- Price Plan Section Begin -->
    <section class="price-section spad set-bg" data-setbg="img/price-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>CHOOSE YOUR PRICING PLAN</h2>
                        <p>Choose the pricing plan that fits your fitness goals best. We offer flexible options tailored to your needs and budget. Start your journey with us today!</p>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4>Normal</h4>
                        <div class="price-plan">
                            <h2>55 <span>$</span></h2>
                            <p>Monthly</p>
                        </div>
                        <ul>
                            <li>Unlimited access to the gym</li>
                            <li>1 classes per week</li>
                            <li>FREE drinking package</li>
                            <li>1 Free personal training</li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4>Professional</h4>
                        <div class="price-plan">
                            <h2>95 <span>$</span></h2>
                            <p>Monthly</p>
                        </div>
                        <ul>
                            <li>Unlimited access to the gym</li>
                            <li>2 classes per week</li>
                            <li>FREE drinking package</li>
                            <li>2 Free personal training</li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">Get Started</a>
                        <div class="tic-text">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4>Advanced</h4>
                        <div class="price-plan">
                            <h2>165 <span>$</span></h2>
                            <p>Monthly</p>
                        </div>
                        <ul>
                            <li>Unlimited access to the gym</li>
                            <li>6 classes per week</li>
                            <li>FREE drinking package</li>
                            <li>5 Free personal training</li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Price Plan Section End -->

    <!-- Choseus Section Begin -->
    <section class="chooseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Why People Choose Us</h2>
                        <p>Our sport experts and latest sports equipment are the winning combination.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-1.png" alt="">
                        <h5>Support 24/24</h5>
                        <p>Experience unwavering support from our team, available round-the-clock to assist you on your fitness journey, ensuring you never feel alone in your pursuit of wellness. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-2.png" alt="">
                        <h5>Our trainer</h5>
                        <p>Our trainers excel in providing individualized attention, guiding you towards your fitness goals with expertise and dedication.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-3.png" alt="">
                        <h5>Personalized sessions</h5>
                        <p>Experience personalized sessions with our dedicated trainers, guiding you every step of the way.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-4.png" alt="">
                        <h5>Our equipment</h5>
                        <p>Our equipment is top-of-the-line, ensuring a high-quality workout experience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-5.png" alt="">
                        <h5>Classes daily</h5>
                        <p>Enjoy classes daily, offering variety and flexibility to fit your schedule.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-6.png" alt="">
                        <h5>Focus on your health</h5>
                        <p>Focus on your health with our tailored programs designed to meet your individual needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choseus Section End -->

    <!-- Video Section Begin -->
    
    <!-- Video Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>From Our Blog</h2>
                        <p>List of all news and events that take place related to us</p>
                    </div>
                </div>
            </div>
            <div class="row blog-gird">
                <div class="grid-sizer"></div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item set-bg" data-setbg="img/blog/blog-1.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Many people sign up for affiliate programs</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item instagram-item">
                        <a href="#" class="instagram-text">
                            <div class="categories">Gym & Croosfit <i class="fa fa-instagram"></i></div>
                            <h5>Follow Our Classes Gyming on Instagram # BodyBuilding # photo</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item small-item set-bg" data-setbg="img/blog/blog-2.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Does Hydroderm Work</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item xls-large set-bg" data-setbg="img/blog/blog-3.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Many people sign up for affiliate programs</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item set-bg" data-setbg="img/blog/blog-4.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Many people sign up for affiliate programs</h5>
                        </a>
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=X_9VoqR5ojM" class="play-in-btn video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item small-item set-bg" data-setbg="img/blog/blog-5.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Gym & Croosfit</div>
                            <h5>Your Antibiotic One Day To 10 Day Options</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Cta Section Begin -->
    
    <!-- Cta Section End -->

    <!-- Map Section Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d188618.51311104256!2d-71.236572!3d42.381647!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1576756626784!5m2!1sen!2sbd" height="590" style="border: 0" allowfullscreen=""></iframe>
        <div class="map-contact-detalis">
            <div class="open-time">
                <h5>Weekday:</h5>
                <ul>
                    <li>Weekday: <span>06:30 - 11:00</span></li>
                    <li>Saturday: <span>07:00 - 22:00</span></li>
                    <li>Sunday: <span>09:00 - 18:00</span></li>
                </ul>
            </div>
            <div class="map-contact-form">
                <h5>Contact Us</h5>
                <form action="admin-dashboard/contactform/formhandler.php"  method="post">
                    <input type="text" placeholder="Name"  name="name" required />
                    <input type="text" class="email" placeholder="email"  name="email" required />
                    <textarea placeholder="Message"  name="message"  required></textarea>
                    <button type="submit" class="site-btn">Submit Now</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Map Section End -->

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
