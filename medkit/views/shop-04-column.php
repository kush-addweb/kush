<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from www.devsnews.com/template/medibazar/medibazar/shop-04-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 15:27:09 GMT -->
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
                                <a href="index.html"><img src="assets/img/logo/logo1.png" alt="" /></a>
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

        <main>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-100 pb-100" style="background-image:url(assets/img/bg/04.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-wrapper">
                                <div class="breadcrumb-text">
                                    <h2>Shop ful</h2>
                                </div>
                                <ul class="breadcrumb-menu">
                                    <li><a href="index.html">home</a></li>
                                    <li><span>shop</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- shop-full-area-start -->
            <div class="sh0p-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="pro-ful-tab">
                                <div class="row mb-20">
                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="product-02-tab mb-20">
                                            <ul class="nav justify-content-start product-nav" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                                        aria-controls="home" aria-selected="true">
                                                        <i class="fas fa-th-large"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                                        aria-controls="profile" aria-selected="false">
                                                        <i class="fas fa-bars"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="pro-tab1-content pt-15 mb-20 text-md-center">
                                            <h4>Showing 20 Results Of 50 Products</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="pro-filter mb-20 f-right">
                                            <form action="#">
                                                <select name="pro-filter" id="pro-filter">
                                                    <option value="1">Default Type </option>
                                                    <option value="2">Top Sales </option>
                                                    <option value="3">New Product </option>
                                                    <option value="4">A to Z Product </option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-content">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-xl-3 cl-lg-3 col-md-6">
                                                    <div class="product-02-wrapper product-single pos-rel text-center mb-30">
                                                        <div class="product-02-img pos-rel">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/p-09.png" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <span class="product-tag hot-1">Hot</span>
                                                        <div class="product-text">
                                                            <h5>face mask</h5>
                                                            <h4><a href="product-details.html">Lab N98 Face Mask</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 cl-lg-3 col-md-6">
                                                    <div class="product-02-wrapper product-single pos-rel text-center mb-30">
                                                        <div class="product-02-img pos-rel">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/p-10.png" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <h5>sanitizer</h5>
                                                            <h4><a href="product-details.html">Hand Sanitizer</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 cl-lg-3 col-md-6">
                                                    <div class="product-02-wrapper product-single pos-rel text-center mb-30">
                                                        <div class="product-02-img pos-rel">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/p-11.png" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <span class="product-tag hot-1 hot-2">new</span>
                                                        <div class="product-text">
                                                            <h5>home accessories</h5>
                                                            <h4><a href="product-details.html">Inhaler Pressure Drop</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 cl-lg-3 col-md-6">
                                                    <div class="product-02-wrapper product-single pos-rel text-center mb-30">
                                                        <div class="product-02-img pos-rel">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/p-12.png" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <span class="product-tag hot-2">new</span>
                                                        <div class="product-text">
                                                            <h5>medical meter</h5>
                                                            <h4><a href="product-details.html">Temperature Gun</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 cl-lg-3 col-md-6">
                                                    <div class="product-02-wrapper product-single pos-rel text-center mb-30">
                                                        <div class="product-02-img pos-rel">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/p-13.png" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <h5>hand gloves</h5>
                                                            <h4><a href="product-details.html">Lab Hand Gloves</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 cl-lg-3 col-md-6">
                                                    <div class="product-02-wrapper product-single pos-rel text-center mb-30">
                                                        <div class="product-02-img pos-rel">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/p-14.png" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <span class="product-tag hot-1">hot</span>
                                                        <div class="product-text">
                                                            <h5>medical meter</h5>
                                                            <h4><a href="product-details.html">Digital Thermometer</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 cl-lg-3 col-md-6">
                                                    <div class="product-02-wrapper product-single pos-rel text-center mb-30">
                                                        <div class="product-02-img pos-rel">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/p-01.png" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <h5>hand gloves</h5>
                                                            <h4><a href="product-details.html">Lab Hand Gloves</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 cl-lg-3 col-md-6">
                                                    <div class="product-02-wrapper product-single pos-rel text-center mb-30">
                                                        <div class="product-02-img pos-rel">
                                                            <a href="product-details.html">
                                                                <img src="assets/img/products/p-02.png" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <span class="product-tag hot-1">hot</span>
                                                        <div class="product-text">
                                                            <h5>medical meter</h5>
                                                            <h4><a href="product-details.html">Digital Thermometer</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="product mb-30">
                                                        <div class="product-img">
                                                            <a href="porduct-details.html"><img src="assets/img/products/01.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-8">
                                                    <div class="product-list-content mb-30">
                                                        <div class="product-text">
                                                            <h5>hand sanitizer</h5>
                                                            <h4><a href="#">Hand Sanitizer Covid -19</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                            ut
                                                            aliquip ex ea commodo consequat.
                                                            Duis aute irure dolor in reprehenderit in voluptate.</p>
                                                        <div class="product-action product-02-action">
                                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="product mb-30">
                                                        <div class="product-img">
                                                            <a href="porduct-details.html"><img src="assets/img/products/02.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-8">
                                                    <div class="product-list-content mb-30">
                                                        <div class="product-text">
                                                            <h5>hand sanitizer</h5>
                                                            <h4><a href="#">Hand Sanitizer Covid -19</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                            ut
                                                            aliquip ex ea commodo consequat.
                                                            Duis aute irure dolor in reprehenderit in voluptate.</p>
                                                        <div class="product-action product-02-action">
                                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="product mb-30">
                                                        <div class="product-img">
                                                            <a href="porduct-details.html"><img src="assets/img/products/03.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-8">
                                                    <div class="product-list-content mb-30">
                                                        <div class="product-text">
                                                            <h5>hand sanitizer</h5>
                                                            <h4><a href="#">Hand Sanitizer Covid -19</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                            ut
                                                            aliquip ex ea commodo consequat.
                                                            Duis aute irure dolor in reprehenderit in voluptate.</p>
                                                        <div class="product-action product-02-action">
                                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="product mb-30">
                                                        <div class="product-img">
                                                            <a href="porduct-details.html"><img src="assets/img/products/04.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-8">
                                                    <div class="product-list-content mb-30">
                                                        <div class="product-text">
                                                            <h5>hand sanitizer</h5>
                                                            <h4><a href="#">Hand Sanitizer Covid -19</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                            ut
                                                            aliquip ex ea commodo consequat.
                                                            Duis aute irure dolor in reprehenderit in voluptate.</p>
                                                        <div class="product-action product-02-action">
                                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="product mb-30">
                                                        <div class="product-img">
                                                            <a href="porduct-details.html"><img src="assets/img/products/05.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-8">
                                                    <div class="product-list-content mb-30">
                                                        <div class="product-text">
                                                            <h5>hand sanitizer</h5>
                                                            <h4><a href="#">Hand Sanitizer Covid -19</a></h4>
                                                            <span>$250.99</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna
                                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                            ut
                                                            aliquip ex ea commodo consequat.
                                                            Duis aute irure dolor in reprehenderit in voluptate.</p>
                                                        <div class="product-action product-02-action">
                                                            <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                            <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                            <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="basic-pagination mt-20 basic-pagination-2 text-center">
                                            <ul>
                                                <li><a href="#"><i class="far fa-angle-left"></i></a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="far fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop-full-area-area -->

            <!-- brand-area-start -->
            <div class="brand-area pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/01.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/02.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/03.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/04.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/05.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/06.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/07.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/08.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/09.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/10.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/11.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="assets/img/brand/12.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- instagram-area-start -->
            <div class="instagram-area pl-130 pr-130">
                <div class="container-fluid">
                    <div class="row instagram-active">
                        <div class="col-xl-2 p-0">
                            <div class="instagram-wrapper">
                                <div class="instagram-img">
                                    <a href="#"><img src="assets/img/instagram/01.jpg" alt="">
                                        <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 p-0">
                            <div class="instagram-wrapper">
                                <div class="instagram-img">
                                    <a href="#"><img src="assets/img/instagram/02.jpg" alt="">
                                        <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 p-0">
                            <div class="instagram-wrapper">
                                <div class="instagram-img">
                                    <a href="#"><img src="assets/img/instagram/03.jpg" alt="">
                                        <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 p-0">
                            <div class="instagram-wrapper">
                                <div class="instagram-img">
                                    <a href="#"><img src="assets/img/instagram/04.jpg" alt="">
                                        <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 p-0">
                            <div class="instagram-wrapper">
                                <div class="instagram-img">
                                    <a href="#"><img src="assets/img/instagram/05.jpg" alt="">
                                        <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 p-0">
                            <div class="instagram-wrapper">
                                <div class="instagram-img">
                                    <a href="#"><img src="assets/img/instagram/06.jpg" alt="">
                                        <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 p-0">
                            <div class="instagram-wrapper">
                                <div class="instagram-img">
                                    <a href="#"><img src="assets/img/instagram/01.jpg" alt="">
                                        <div class="instagram-icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- instagram-area-end -->

        </main>

        <!-- footer-area-start -->
        <footer>
          <div class="footer-area pt-80 pb-45">
              <div class="container">
                  <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper mb-30">
                                <h3 class="footer-title">About Company</h3>
                                <div class="footer-text">
                                    <p>But must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born </p>
                                </div>
                                <div class="footer-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper ml-80 mb-30">
                                <h3 class="footer-title">Useful Links</h3>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="about.html">Shipping Options</a></li>
                                        <li><a href="our-history.html">My Wishlist</a></li>
                                        <li><a href="about.html">My Account</a></li>
                                        <li><a href="team.html">Return Policy</a></li>
                                        <li><a href="about.html">Shopping FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper ml-80 mb-30">
                                <h3 class="footer-title">Product</h3>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="about.html">Thermometer</a></li>
                                        <li><a href="our-history.html">Vitamins & Supplements</a></li>
                                        <li><a href="about.html">Temperature Gun</a></li>
                                        <li><a href="team.html">Oxygen Mmeter & Mask</a></li>
                                        <li><a href="about.html">Shipping & Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper ml-130 mb-30">
                                <h3 class="footer-title">Payment</h3>
                                <div class="footer-img">
                                    <img src="assets/img/footer/footer.png" alt="">
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
        <div class="footer-bottom-area mr-70 ml-70 pt-25 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>Copyright <i class="far fa-copyright"></i> 2020 <a href="#">Medibazar</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link f-right">
                            <ul>
                                <li><a href="#">Home </a></li>
                                <li><a href="#"> About Us</a></li>
                                <li><a href="#">Our Product</a></li>
                                <li><a href="#">Service </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>
        <!-- footer-area-end -->



		<!-- JS here -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.knob.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from www.devsnews.com/template/medibazar/medibazar/shop-04-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 15:27:09 GMT -->
</html>