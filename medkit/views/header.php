<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from www.devsnews.com/template/medibazar/medibazar/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 15:27:21 GMT -->
<?php
session_start();
?>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Medibazar - Medical Equipment Store eCommerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

    </head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.info-bar').on('click', function () {
                $('.extra-info').addClass('info-open');
            })

            $('.close-icon').on('click', function () {
                $('.extra-info').removeClass('info-open');
            })
        });
    </script>
    <body>

        <!-- header-start -->
        <header>
            <div class="header-top-area pl-165 pr-165">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-6">
                            <div class="header-top-wrapper">
                                <div class="header-top-info d-none d-xl-block f-left">
                                    <span><i class="fas fa-heart"></i> Welcome to Medibazae. We provides <a href="#">Covid-19 </a>medical accessories</span>
                                </div>
                                <div class="header-link f-left">
                                    <span><a href="#"><i class="far fa-phone"></i> +123 (456) 7879</a></span>
                                </div>
                            </div>
                        </div>
                           
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="header-top-right text-md-right">
                               <div class="shop-menu">
                                   <ul>
                                       <li><a>
                                       <?php 
                                       if(isset($_SESSION['email']))
                                       {
                                       ?>
                                        <div class="dropdown">
                                          <button style="background: #4e97fd; color: #ffffff; font-size: 15px; font-weight: 700; border-radius: 10px;" class="btn btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="font-weight: 300; " class="fal fa-user-circle"></i>
                                            <?php echo $_SESSION['email']; ?>
                                          </button>
                                          <div  style="width: 100%; border-radius: 10px; border-bottom: 4px solid #4e97fd; border-top: 4px solid #4e97fd;" class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button style="font-weight: 600; font-size: 17px; color: #666666;" class="dropdown-item" onclick="window.location.href='cart.php'" type="submit">Your cart</button>
                                            <button style="font-weight: 600; font-size: 17px; color: #666666;" class="dropdown-item" onclick="window.location.href='wishlist.php'" type="submit">Your wishlist</button>
                                            <button style="font-weight: 600; font-size: 17px; color: #666666;" type="submit" class="dropdown-item" onclick="window.location.href='../controller/logout.php'">Logout</button>
                                          </div>
                                        </div>
                                       <?php
                                        }
                                       else
                                       {
                                        ?>
                                        <div class="dropdown">
                                            <button style="background: #4e97fd; color: #ffffff; font-size: 15px; font-weight: 700; border-radius: 10px;" class="btn btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="font-weight: 300; " class="fal fa-user-circle"></i>My Account
                                            </button>
                                            <div style="width: 100%; border-radius: 10px; border-bottom: 4px solid #4e97fd; border-top: 4px solid #4e97fd;" class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button style="font-weight: 600; font-size: 17px; color: #666666;" class="dropdown-item" onclick="window.location.href='login.php'" type="submit">Sign in</button>
                                            </div>
                                        </div>
                                       <?php
                                        }
                                       ?>
                                       </a></li>
                                       <!-- <li><a href="views/cart.php"><i class="far fa-cart-plus"></i> Cart</a></li>
                                       <li><a href="views/wishlist.php"><i class="far fa-heart"></i> Wishlist</a></li> -->
                                   </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-menu-area menu-01 pl-165 pr-165">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="../index.php"><img src="assets/img/logo/logo1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                            <div class="header-right f-right">
                                <div class="header-lang f-right pos-rel d-none d-md-none d-lg-block">
                                    <div class="lang-icon">
                                        <img src="assets/img/icon/india.png" alt="">
                                        <a href="#"><i class="far fa-angle-down"></i></a>
                                    </div>
                                    <ul class="header-lang-list">
                                        <li><a href="#">USA</a></li>
                                        <li><a href="#">UK</a></li>
                                        <li><a href="#">CA</a></li>
                                        <li><a href="#">AU</a></li>
                                    </ul>
                                </div>
                                <div class="menu-bar info-bar f-right d-none d-md-none d-lg-block">
                                    <a href="#"><i class="fal fa-bars"></i></a>
                                </div>
                                <div class="header-search f-right d-none d-xl-block">
                                    <form class="header-search-form">
                                        <input placeholder="Search" type="text">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="../index.php">home</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="../index.php">home 1</a></li>
                                                <li><a href="index-2.php">home 2</a></li>
                                                <li><a href="index-3.php">home 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.php">Shop</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="shop-grid.php">shop grid</a>
                                                <li><a href="shop-full-width.php">shop full width</a>
                                                <li><a href="shop-04-column.php">shop 04 column</a>
                                                <li><a href="shop-left-02-column.php">shop left 02 column</a>
                                                <li><a href="shop-left-sidebar.php">shop left sidebar</a>
                                                <li><a href="shop-right-sidebar.php">shop right sidebar</a>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.php">Categories </a></li>
                                        <li><a href="blog-grid.php">Blog</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="blog-grid.php">blog grid</a></li>
                                                <li><a href="blog-grid-sidebar.php">blog grid sidebar</a></li>
                                                <li><a href="blog-standard.php">blog standardr</a></li>
                                                <li><a href="blog-details.php">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="about.php">about</a></li>
                                                <li><a href="contact.php">contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="extra-info">
                <div class="close-icon">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.html">
                        <img src="assets/img/logo/white-logo1.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                        <p>example.mail@hum.com</p>
                    </div>
                </div>
                <div class="instagram">
                    <a href="#">
                        <img src="assets/img/portfolio/p1.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/img/portfolio/p2.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/img/portfolio/p3.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/img/portfolio/p4.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/img/portfolio/p5.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/img/portfolio/p6.jpg" alt="">
                    </a>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </header>
        <!-- header-start -->
    </body>
</html>