
<?php
session_start();
include("controller/fetch.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from www.devsnews.com/template/medibazar/medibazar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 15:24:58 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Medibazar - Medical Equipment Store eCommerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="views/assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="views/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="views/assets/css/animate.min.css">
        <link rel="stylesheet" href="views/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="views/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="views/assets/css/themify-icons.css">
        <link rel="stylesheet" href="views/assets/css/meanmenu.css">
        <link rel="stylesheet" href="views/assets/css/slick.css">
        <link rel="stylesheet" href="views/assets/css/main.css">
        <link rel="stylesheet" href="views/assets/css/responsive.css">

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
                                            <button style="font-weight: 600; font-size: 17px; color: #666666;" class="dropdown-item" onclick="window.location.href='views/cart.php'" type="submit">Your cart</button>
                                            <button style="font-weight: 600; font-size: 17px; color: #666666;" class="dropdown-item" onclick="window.location.href='views/wishlist.php'" type="submit">Your wishlist</button>
                                            <button style="font-weight: 600; font-size: 17px; color: #666666;" type="submit" class="dropdown-item" onclick="window.location.href='controller/logout.php'">Logout</button>
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
                                                <button style="font-weight: 600; font-size: 17px; color: #666666;" class="dropdown-item" onclick="window.location.href='views/login.php'" type="submit">Sign in</button>
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
                                <a href="index.php"><img src="views/assets/img/logo/logo1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                            <div class="header-right f-right">
                                <div class="header-lang f-right pos-rel d-none d-md-none d-lg-block">
                                    <div class="lang-icon">
                                        <img src="views/assets/img/icon/india.png" alt="">
                                        <a href="#"><i class="far fa-angle-down"></i></a>
                                    </div>
                                    <ul class="header-lang-list">
                                        <li><a href="#">INDIA</a></li>
                                        <li><a href="#">USA</a></li>
                                        <li><a href="#">UK</a></li>
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
                                        <li class="active"><a href="index.php">home</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="index.php">home 1</a></li>
                                                <li><a href="views/index-2.php">home 2</a></li>
                                                <li><a href="views/index-3.php">home 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="views/shop-grid.php">Shop</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="views/shop-grid.php">shop grid</a>
                                                <li><a href="views/shop-full-width.php">shop full width</a>
                                                <li><a href="views/shop-04-column.php">shop 04 column</a>
                                                <li><a href="views/shop-left-02-column.php">shop left 02 column</a>
                                                <li><a href="views/shop-left-sidebar.php">shop left sidebar</a>
                                                <li><a href="views/shop-right-sidebar.php">shop right sidebar</a>

                                            </ul>
                                        </li>
                                        <li><a href="views/shop-grid.php">Categories </a></li>
                                        <li><a href="views/blog-grid.php">Blog</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="views/blog-grid.php">blog grid</a></li>
                                                <li><a href="views/blog-grid-sidebar.php">blog grid sidebar</a></li>
                                                <li><a href="views/blog-standard.php">blog standardr</a></li>
                                                <li><a href="views/blog-details.php">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="views/about.php">about</a></li>
                                                <li><a href="views/contact.php">contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="views/contact.php">contact</a></li>
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
                    <a href="index.php">
                        <img src="views/assets/img/logo/white-logo1.png" alt="" />
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
                        <img src="views/assets/img/portfolio/p1.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="views/assets/img/portfolio/p2.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="views/assets/img/portfolio/p3.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="views/assets/img/portfolio/p4.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="views/assets/img/portfolio/p5.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="views/assets/img/portfolio/p6.jpg" alt="">
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

            <!-- hero-area start -->
            <section class="hero-area">
                <div class="hero-slider">
                    <div class="slider-active">
                        <div class="single-slider slider-height d-flex align-items-center"
                            data-background="views/assets/img/slider/01.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6">
                                        <div class="hero-text mt-90">
                                            <div class="hero-slider-caption ">
                                                <span data-animation="fadeInUp" data-delay=".2s">covid -19 products</span>
                                                <h2 data-animation="fadeInUp" data-delay=".4s">Face Mask
                                                    Thermometer</h2>
                                                <p data-animation="fadeInUp" data-delay=".6s">Quis autem vel eum iure reprehenin voluptate
                                                    velit esse quam nihil molestiae conse</p>
                                            </div>
                                            <div class="hero-slider-btn">
                                                <a data-animation="fadeInUp" data-delay=".8s" href="views/contact.php"
                                                    class="c-btn">shop now <i class="far fa-plus"></i></a>
                                                    <div class="b-button" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">
                                                        <a href="views/contact.php" >hot collection <i class="far fa-plus"></i></a>
                                                     </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6">
                                        <div class="slider-img d-none d-lg-block" data-animation="fadeInRight" data-delay=".8s">
                                            <img src="views/assets/img/slider/01.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero-area end -->

            <!-- banner-area-start -->
            <div class="banner-area banner-pb pt-30 pb-70 pl-55 pr-55">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <div class="banner-img pos-rel">
                                    <a href="views/product-details.php"><img src="views/assets/img/banner/01.jpg" alt=""></a>
                                    <div class="banner-text">
                                        <span>Digital Meter</span>
                                        <h2>Thermometer</h2>
                                        <div class="b-button red-b-button">
                                            <a href="views/contact.php">shop now <i class="far fa-plus"></i></a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <div class="banner-img pos-rel">
                                    <a href="views/product-details.php"><img src="views/assets/img/banner/02.jpg" alt=""></a>
                                    <div class="banner-text">
                                        <span>Gun Covid -19</span>
                                        <h2>Temperature</h2>
                                        <div class="b-button red-b-button">
                                            <a href="views/contact.php">shop now <i class="far fa-plus"></i></a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="banner-wrapper mb-30">
                                <div class="banner-img pos-rel">
                                    <a href="views/product-details.php"><img src="views/assets/img/banner/03.jpg" alt=""></a>
                                    <div class="banner-text">
                                        <span>Pulse</span>
                                        <h2>Oximeter</h2>
                                        <div class="b-button red-b-button">
                                            <a href="views/contact.php">shop now <i class="far fa-plus"></i></a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-wrapper mb-30">
                                <div class="banner-img pos-rel">
                                    <a href="views/product-details.php"><img src="views/assets/img/banner/04.jpg" alt=""></a>
                                    <div class="banner-text">
                                        <span>Lab Surgery</span>
                                        <h2>N95 Face Mask</h2>
                                        <div class="b-button red-b-button">
                                            <a href="views/contact.php">shop now <i class="far fa-plus"></i></a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-wrapper mb-30">
                                <div class="banner-img pos-rel">
                                    <a href="views/product-details.php"><img src="views/assets/img/banner/05.jpg" alt=""></a>
                                    <div class="banner-text">
                                        <span>Surgery Lab</span>
                                        <h2>Hand Gloves</h2>
                                        <div class="b-button red-b-button">
                                            <a href="views/contact.php">shop now <i class="far fa-plus"></i></a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner-area-end -->

            <!-- product-area-start -->
            <div class="product-area pb-50">
                <div class="container">
                    <div class="tab-border mb-60">
                        <div class="row">
                            <div class="col-xl-7 col-lg-6">
                                <div class="section-title mb-25">
                                    <h2>Features Products</h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error</p>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="product-tab mb-25">
                                    <ul class="nav justify-content-start justify-content-lg-end product-nav" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                                <i class="far fa-shield-check"></i> Best Seller
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                            <i class="far fa-star"></i>  Top Rated
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                            <i class="far fa-star"></i> Popular
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab-content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <?php
                                        // $obj = new reg();
                                        // $result=$obj->fetch_data();
                                        while($row = $resultnew->fetch_assoc()) {
                                    ?>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/ayurvedic.php">
                                                    <img src="views/assets/img/products/<?php echo $row['CAT_IMG']; ?>" alt="">
                                                    <img style="border-radius: 10px;" class="secondary-img" style="height: 100%" src="views/assets/img/products/<?php echo $row['CAT_BACK_IMG']; ?>" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="views/ayurvedic.php?cat=<?php echo $row['CAT_ID']; ?>"> view Products <i class="far fa-plus"></i></a>
                                                    
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <!-- <h5>accessories</h5> -->
                                                <h4><a href="views/ayurvedic.php?cat=<?php echo $row['CAT_ID']; ?>"><?php echo $row['CAT_NAME']; ?></a></h4>
                                                <!-- <span>$250.99</span> -->
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>
                                   <!--  <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/04.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/05.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="views/product-details.php">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>accessories</h5>
                                                <h4><a href="views/product-details.php">Lab N95 Face Mask</a></h4>
                                                <span>Rs. 100.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/05.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/06.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>hand gloves</h5>
                                                <h4><a href="views/product-details.php">Covid -19 Hand Gloves</a></h4>
                                                <span>Rs. 250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/06.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/01.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>medical equipment</h5>
                                                <h4><a href="views/product-details.php">New Temperature Gun</a></h4>
                                                <span>Rs. 150.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/01.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/02.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>accessories</h5>
                                                <h4><a href="views/product-details.php">Medical Microscope</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/03.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/04.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>home accessories</h5>
                                                <h4><a href="views/product-details.php">Medical Thermometer</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/02.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/03.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>hand sanitizer</h5>
                                                <h4><a href="views/product-details.php">Hand Sanitizer Covid -19</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/04.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/05.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>accessories</h5>
                                                <h4><a href="views/product-details.php">Lab N95 Face Mask</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/05.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/06.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>hand gloves</h5>
                                                <h4><a href="views/product-details.php">Covid -19 Hand Gloves</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/06.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/01.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>medical equipment</h5>
                                                $password </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/01.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/02.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>accessories</h5>
                                                <h4><a href="views/product-details.php">Medical Microscope</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/02.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/03.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>hand sanitizer</h5>
                                                <h4><a href="views/product-details.php">Hand Sanitizer Covid -19</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/03.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/04.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>home accessories</h5>
                                                <h4><a href="views/product-details.php">Medical Thermometer</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/04.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/05.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>accessories</h5>
                                                <h4><a href="views/product-details.php">Lab N95 Face Mask</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/06.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/01.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>medical equipment</h5>
                                                <h4><a href="views/product-details.php">New Temperature Gun</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 cl-lg-4 col-md-6">
                                        <div class="product-wrapper text-center mb-45">
                                            <div class="product-img pos-rel">
                                                <a href="views/product-details.php">
                                                    <img src="views/assets/img/products/05.jpg" alt="">
                                                    <img class="secondary-img" src="views/assets/img/products/06.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                    <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5>hand gloves</h5>
                                                <h4><a href="views/product-details.php">Covid -19 Hand Gloves</a></h4>
                                                <span>$250.99</span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- product-area-end -->

            <!-- deal-area-start -->
            <div class="deal-area pb-50 pt-95">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-65">
                                <h2>Deal Of This Week</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                            <div class="deal-wrapper text-center">
                                <div class="deal-count">
                                    <div class="deal-time" data-countdown="2020/9/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- deal-area-end -->

            <!-- banner-area-start -->
            <div class="banner-02-area pb-70 pl-165 pr-165">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner-02-wrapper text-center mb-30" data-bg-color="#edf7fb">
                                <div class="banner-02-text">
                                    <span>Digital Meter</span>
                                    <h2>Blood Pressure Meter</h2>
                                </div>
                                <div class="banner-02-img pos-rel">
                                    <a href="#"><img src="views/assets/img/banner/b-01.png" alt=""></a>
                                     <span class="banner-tag">hot</span>
                                </div>
                                <div class="banner-price">
                                    <span class="old-price">Rs. 250.99</span>
                                    <span class="new-price">Rs. 239.99</span>
                                </div>
                                <div class="banner-button">
                                    <a class="c-btn" href="#">buy now <i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner-02-wrapper text-center mb-30" data-bg-color="#f8f8f8">
                                <div class="banner-02-text">
                                    <span>Digital Meter</span>
                                    <h2>Blood Pressure Meter</h2>
                                </div>
                                <div class="banner-02-img pos-rel">
                                    <a href="#"><img src="views/assets/img/banner/b-02.png" alt=""></a>
                                     <span class="banner-tag">hot</span>
                                </div>
                                <div class="banner-price">
                                    <span class="old-price">Rs. 250.99</span>
                                    <span class="new-price">Rs. 239.99</span>
                                </div>
                                <div class="banner-button">
                                    <a class="c-btn" href="#">buy now <i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner-02-wrapper text-center mb-30" data-bg-color="#f3f8ff">
                                <div class="banner-02-text">
                                    <span>Digital Meter</span>
                                    <h2>Blood Pressure Meter</h2>
                                </div>
                                <div class="banner-02-img pos-rel">
                                    <a href="#"><img src="views/assets/img/banner/b-03.png" alt=""></a>
                                     <span class="banner-tag">hot</span>
                                </div>
                                <div class="banner-price">
                                    <span class="old-price">Rs. 250.99</span>
                                    <span class="new-price">Rs. 239.99</span>
                                </div>
                                <div class="banner-button">
                                    <a class="c-btn" href="#">buy now <i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner-area-end -->

            <!-- product-area-start -->
            <div class="product-area pb-70">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div class="section-title mb-30">
                                <h2>Features Products</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="b-button shop-btn s-btn text-md-right mb-30">
                                <a href="views/shop-grid.php">view all product <i class="fal fa-long-arrow-right"></i></a>
                             </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-02-wrapper pos-rel text-center mb-30">
                                <div class="product-02-img pos-rel">
                                    <a href="views/product-details.php">
                                        <img src="views/assets/img/products/p-08.png" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <h5>face mask</h5>
                                    <h4><a href="views/product-details.php">Lab N98 Face Mask</a></h4>
                                    <span>Rs. 250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-02-wrapper pos-rel text-center mb-30">
                                <div class="product-02-img pos-rel">
                                    <a href="views/product-details.php">
                                        <img src="views/assets/img/products/p-01.png" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <span class="product-tag hot-1">Hot</span>
                                <div class="product-text">
                                    <h5>sanitizer</h5>
                                    <h4><a href="views/product-details.php">Hand Sanitizer</a></h4>
                                    <span>Rs. 250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-02-wrapper pos-rel text-center mb-30">
                                <div class="product-02-img pos-rel">
                                    <a href="views/product-details.php">
                                        <img src="views/assets/img/products/p-02.png" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <h5>home accessories</h5>
                                    <h4><a href="views/product-details.php">Inhaler Pressure Drop</a></h4>
                                    <span>Rs. 250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-02-wrapper pos-rel text-center mb-30">
                                <div class="product-02-img pos-rel">
                                    <a href="views/product-details.php">
                                        <img src="views/assets/img/products/p-03.png" alt="">
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
                                    <h4><a href="views/product-details.php">Temperature Gun</a></h4>
                                    <span>Rs. 250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-02-wrapper pos-rel text-center mb-30">
                                <div class="product-02-img pos-rel">
                                    <a href="views/product-details.php">
                                        <img src="views/assets/img/products/p-04.png" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <span class="product-tag hot-2">new</span>
                                <div class="product-text">
                                    <h5>hand gloves</h5>
                                    <h4><a href="views/product-details.php">Lab Hand Gloves</a></h4>
                                    <span>Rs. 250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-02-wrapper pos-rel text-center mb-30">
                                <div class="product-02-img pos-rel">
                                    <a href="views/product-details.php">
                                        <img src="views/assets/img/products/p-05.png" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <span class="product-tag hot-1">new</span>
                                <div class="product-text">
                                    <h5>medical meter</h5>
                                    <h4><a href="views/product-details.php">Digital Thermometer</a></h4>
                                    <span>Rs. 250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-02-wrapper pos-rel text-center mb-30">
                                <div class="product-02-img pos-rel">
                                    <a href="views/product-details.php">
                                        <img src="views/assets/img/products/p-06.png" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <h5>hand sanitizer</h5>
                                    <h4><a href="views/product-details.php">hand sanitizer</a></h4>
                                    <span>Rs. 250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-02-wrapper pos-rel text-center mb-30">
                                <div class="product-02-img pos-rel">
                                    <a href="views/product-details.php">
                                        <img src="views/assets/img/products/p-07.png" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <span class="product-tag hot-3">-30%</span>
                                <div class="product-text">
                                    <h5>personal</h5>
                                    <h4><a href="views/product-details.php">Health Medicine</a></h4>
                                    <span>Rs. 250.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-area-end -->

            <!-- testimonial-area-start -->
            <div class="testimonial-area pt-100 pb-175" data-background="views/assets/img/bg/test.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-65">
                                <h2>What Our Client’s Say</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error</p>
                            </div>
                        </div>
                    </div>
                    <div class="row test-active">
                        <div class="col-xl-6">
                            <div class="testimonial-wrapper">
                                <div class="inner-test d-flex justify-content-between align-items-center">
                                    <div class="test-img">
                                        <img src="views/assets/img/testimonial/01.png" alt="">
                                    </div>
                                    <div class="test-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="test-text">
                                    <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <h4>Sebastian Barry</h4>
                                    <span>Business Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-wrapper">
                                <div class="inner-test d-flex justify-content-between align-items-center">
                                    <div class="test-img">
                                        <img src="views/assets/img/testimonial/02.png" alt="">
                                    </div>
                                    <div class="test-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="test-text">
                                    <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <h4>Oliver Greenwood</h4>
                                    <span>Business Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-wrapper">
                                <div class="inner-test d-flex justify-content-between align-items-center">
                                    <div class="test-img">
                                        <img src="views/assets/img/testimonial/01.png" alt="">
                                    </div>
                                    <div class="test-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="test-text">
                                    <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <h4>Sebastian Barry</h4>
                                    <span>Business Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-wrapper">
                                <div class="inner-test d-flex justify-content-between align-items-center">
                                    <div class="test-img">
                                        <img src="views/assets/img/testimonial/02.png" alt="">
                                    </div>
                                    <div class="test-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="test-text">
                                    <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <h4>Oliver Greenwood</h4>
                                    <span>Business Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial-area-end -->

            <!-- blog-area-start -->
            <div class="blog-area pt-105 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-65">
                                <h2>Latest News & Blog</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="blog-wrapper mb-30">
                                <div class="blog-img pos-rel">
                                    <a href="views/blog-details.php"><img src="views/assets/img/blog/01.jpg" alt=""></a>
                                    <span class="blog-tag color-1">covid -19</span>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i> <a href="views/blog-details.php">25 Aug 2020</a></span>
                                    </div>
                                    <h4><a href="views/blog-details.php">Mirage Deep Dive Under anding Timin Response</a></h4>
                                    <p>Sedut perspiciatis unde omnis natus error sit voluptatem accusantium </p>
                                    <div class="b-button gray-b-button">
                                        <a href="views/blog-details.php">read more <i class="far fa-plus"></i></a>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="blog-wrapper mb-30">
                                <div class="blog-img pos-rel">
                                    <a href="views/blog-details.php"><img src="views/assets/img/blog/02.jpg" alt=""></a>
                                    <span class="blog-tag color-2">sanitizer</span>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i> <a href="views/blog-details.php">25 Aug 2020</a></span>
                                    </div>
                                    <h4><a href="blog-details.html">How To Feel More Energe Even You’re Stuck</a></h4>
                                    <p>Sedut perspiciatis unde omnis natus error sit voluptatem accusantium </p>
                                    <div class="b-button gray-b-button">
                                        <a href="views/blog-details.php">read more <i class="far fa-plus"></i></a>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="blog-wrapper mb-30">
                                <div class="blog-img pos-rel">
                                    <a href="views/blog-details.php"><img src="views/assets/img/blog/03.jpg" alt=""></a>
                                    <span class="blog-tag color-1">medical</span>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i> <a href="views/blog-details.php">25 Aug 2020</a></span>
                                    </div>
                                    <h4><a href="views/blog-details.php">Learning Resourc Challe
                                        Ging Online Work</a></h4>
                                    <p>Sedut perspiciatis unde omnis natus error sit voluptatem accusantium </p>
                                    <div class="b-button gray-b-button">
                                        <a href="views/blog-details.php">read more <i class="far fa-plus"></i></a>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-area-end -->

            <!-- brand-area-start -->
            <div class="brand-area pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/01.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/02.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/03.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/04.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/05.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/06.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/07.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/08.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/09.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/10.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/11.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                            <div class="single-brand mb-60">
                                <img src="views/assets/img/brand/12.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- features-area-start -->
            <div class="features-area pt-60 pb-30 grey-2-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="features-wrapper mb-30">
                                <div class="features-icon fe-1 f-left">
                                    <i class="fal fa-ship"></i>
                                </div>
                                <div class="features-text">
                                    <h3>Free Shipping</h3>
                                    <p>Sed perspicia unde omnis iste
                                    nat error voluptate accus</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="features-wrapper mb-30">
                                <div class="features-icon fe-2 f-left">
                                     <i class="fal fa-usd-circle"></i>
                                </div>
                                <div class="features-text">
                                    <h3>Money Back</h3>
                                    <p>Sed perspicia unde omnis iste
                                    nat error voluptate accus</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="features-wrapper mb-30">
                                <div class="features-icon fe-3 f-left">
                                    <i class="fal fa-unlock-alt"></i>
                                </div>
                                <div class="features-text">
                                    <h3>100% Secure</h3>
                                    <p>Sed perspicia unde omnis iste
                                    nat error voluptate accus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features-area-end -->

            <!-- instagram-area-start -->
            <div class="instagram-area pl-130 pr-130">
                <div class="container-fluid">
                    <div class="row instagram-active">
                        <div class="col-xl-2 p-0">
                            <div class="instagram-wrapper">
                                <div class="instagram-img">
                                    <a href="#"><img src="views/assets/img/instagram/01.jpg" alt="">
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
                                    <a href="#"><img src="views/assets/img/instagram/02.jpg" alt="">
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
                                    <a href="#"><img src="views/assets/img/instagram/03.jpg" alt="">
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
                                    <a href="#"><img src="views/assets/img/instagram/04.jpg" alt="">
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
                                    <a href="#"><img src="views/assets/img/instagram/05.jpg" alt="">
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
                                    <a href="#"><img src="views/assets/img/instagram/06.jpg" alt="">
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
                                    <a href="#"><img src="views/assets/img/instagram/01.jpg" alt="">
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
                                        <li><a href="views/about.php">Shipping Options</a></li>
                                        <li><a href="views/our-history.php">My Wishlist</a></li>
                                        <li><a href="views/about.php">My Account</a></li>
                                        <li><a href="views/team.php">Return Policy</a></li>
                                        <li><a href="views/about.php">Shopping FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper ml-80 mb-30">
                                <h3 class="footer-title">Product</h3>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="views/about.php">Thermometer</a></li>
                                        <li><a href="views/our-history.php">Vitamins & Supplements</a></li>
                                        <li><a href="views/about.php">Temperature Gun</a></li>
                                        <li><a href="views/team.php">Oxygen Mmeter & Mask</a></li>
                                        <li><a href="views/about.php">Shipping & Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper ml-130 mb-30">
                                <h3 class="footer-title">Payment</h3>
                                <div class="footer-img">
                                    <img src="views/assets/img/footer/footer.png" alt="">
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
        <script src="views/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="views/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="views/assets/js/popper.min.js"></script>
        <script src="views/assets/js/bootstrap.min.js"></script>
        <script src="views/assets/js/owl.carousel.min.js"></script>
        <script src="views/assets/js/isotope.pkgd.min.js"></script>
        <script src="views/assets/js/slick.min.js"></script>
        <script src="views/assets/js/jquery.meanmenu.min.js"></script>
        <script src="views/assets/js/ajax-form.js"></script>
        <script src="views/assets/js/wow.min.js"></script>
        <script src="views/assets/js/waypoints.min.js"></script>
        <script src="views/assets/js/jquery.appear.js"></script>
        <script src="views/assets/js/jquery.countdown.min.js"></script>
        <script src="views/assets/js/jquery.knob.js"></script>
        <script src="views/assets/js/jquery.counterup.min.js"></script>
        <script src="views/assets/js/jquery.scrollUp.min.js"></script>
        <script src="views/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="views/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="views/assets/js/plugins.js"></script>
        <script src="views/assets/js/main.js"></script>
    </body>

<!-- Mirrored from www.devsnews.com/template/medibazar/medibazar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 15:25:41 GMT -->
</html>