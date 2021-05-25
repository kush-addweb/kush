<?php 
session_start();
?>
<!doctype html> 
<html class="no-js" lang="zxx">
<!-- Mirrored from www.devsnews.com/template/medibazar/medibazar/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 15:27:09 GMT -->
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

        <main>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-100 pb-100" style="background-image:url(assets/img/bg/04.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-wrapper">
                                <div class="breadcrumb-text">
                                    <h2>product details</h2>
                                </div>
                                <ul class="breadcrumb-menu">
                                    <li><a href="index.html">home</a></li>
                                    <li><span>product details</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- shop-banner-area start -->
            <?php
            include("../controller/pro_details.php");
            ?>
            <form action="../controller/cart_filter.php" method="post">
            <?php
            while($row = $sub_data->fetch_assoc()){
            ?>
            <section class="shop-banner-area pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="shop-thumb-tab">
                                <ul class="nav" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                            aria-selected="true"><img src="assets/img/products/<?php echo $row['PRO_IMG']; ?>" alt=""> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                            aria-selected="false"><img src="assets/img/products/<?php echo $row['PRO_BACK_IMG']; ?>" alt=""></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile1" role="tab"
                                            aria-selected="false"><img src="assets/img/products/<?php echo $row['PRO_BACK_IMG2']; ?>" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details-img mb-30">
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                                        <div class="product-large-img">
                                            <img src="assets/img/products/<?php echo $row['PRO_IMG']; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel">
                                        <div class="product-large-img">
                                            <img src="assets/img/products/<?php echo $row['PRO_BACK_IMG']; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile1" role="tabpanel">
                                        <div class="product-large-img">
                                            <img src="assets/img/products/<?php echo $row['PRO_BACK_IMG2']; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="product-details-wrapper mb-30">
                                <div class="product-text">
                                    <h5><?php echo $row['PRO_COMPANY'];?></h5>
                                    <h4><?php echo $row['PRO_NAME'];?></h4>
                                    <input type="hidden" name="pro_ID" value="<?php echo $row['PRO_ID']; ?>">
                                    <input type="hidden" name="proname" value="<?php echo $row['PRO_NAME'];?>">
                                    <input type="hidden" name="com" value="<?php echo $row['PRO_COMPANY'];?>">
                                    <input type="hidden" name="img" value="<?php echo $row['PRO_IMG']; ?>">
                                    <input type="hidden" name="pri" value="<?php echo $row['PRO_PRICE']; ?>">
                                    <div class="pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fad fa-star-half-alt"></i>
                                        <span>(05 Reviews)</span>
                                    </div>
                                    <span>Rs. <?php echo $row['PRO_PRICE']; ?>.00</span>
                                </div>
                                <div class="product-variant">
                                    <div class="product-desc">
                                        <p><?php echo $row['PRO_DESCRIPTION'];?></p>
                                    </div>
                                    <!-- <div class="product-info-list">
                                        <span>Size</span>
                                        <a href="#">l</a>
                                        <a href="#">m</a>
                                        <a href="#">s</a>
                                        <a href="#">x1</a>
                                    </div>
                                    <div class="product2-info-list">
                                        <span>color</span>
                                        <a class="p--1" href="#"></a>
                                        <a class="p--2" href="#"></a>
                                        <a class="p--3" href="#"></a>
                                        <a class="p--4" href="#"></a>
                                    </div> -->
                                    <span class="stock">50 In Stock</span>
                                    <div class="product-action-details ">
                                        <div class="product-details-action">
                                            <!-- <form action="#" method="POST"> -->
                                                <!-- <div class="plus-minus">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" name="qty" value="1">
                                                        <div class="dec qtybutton">-</div>
                                                        <div class="inc qtybutton">+</div>
                                                    </div>
                                                </div> -->
                                                <!-- <input type="hidden" name="qty" value="1"> -->
                                                <div class="details-cart-btn">
                                                    <button type="submit" name="but" class="c-btn red-btn">add to cart <i class="far fa-plus"></i></button>
                                                </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                    <div class="pro-details-icon">
                                        <button style="font-size: 15px; border: 2px solid #e9e9e9; height: 50px; width: 50px; line-height: 50px; display: inline-block; text-align: center; margin-right: 7px; transition: 0.3s; outline: medium none; background: white; " name="wish" href="#"><i class="far fa-heart"></i></button>
                                        <a href="#"><i class="far fa-search"></i></a>
                                        <a href="#"><i class="far fa-exchange"></i></a>
                                    </div>
                                    <div class="product-02-list">
                                        <ul>
                                            <li>
                                                <div class="pro-02-list-info f-left">
                                                    <span>Quantity :</span>
                                                </div>
                                                <div class="pro-02-list-text">
                                                    <span><?php echo $row['PRO_Quantity']; ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pro-02-list-info f-left">
                                                    <span>Ideal For :</span>
                                                </div>
                                                <div class="pro-02-list-text">
                                                    <span><?php echo $row['Ideal_For'] ?></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pro-02-list-info f-left">
                                                    <span class="pro11">Share Now :</span>
                                                </div>
                                                <div class="pro-02-list-icon">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- <section class="shop-banner-area pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="shop-thumb-tab">
                                <ul class="nav" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                            aria-selected="true"><img src="assets/img/products/pr-11.png" alt=""> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                            aria-selected="false"><img src="assets/img/products/pr-22.png" alt=""></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile1" role="tab"
                                            aria-selected="false"><img src="assets/img/products/pr-33.png" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-details-img mb-30">
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                                        <div class="product-large-img">
                                            <img src="assets/img/products/pr-11.png" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel">
                                        <div class="product-large-img">
                                            <img src="assets/img/products/pr-22.png" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile1" role="tabpanel">
                                        <div class="product-large-img">
                                            <img src="assets/img/products/pr-33.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="product-details-wrapper mb-30">
                                <div class="product-text">
                                    <h5>face mask</h5>
                                    <h4>Lab N98 Face Mask</h4>
                                    <div class="pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fad fa-star-half-alt"></i>
                                        <span>(05 Reviews)</span>
                                    </div>
                                    <span>$250.99</span>
                                </div>
                                <div class="product-variant">
                                    <div class="product-desc">
                                        <p>On the other hand, we denounce with righteous indigna <br>
                                        tion and dislike men who are so beguiled and demor</p>
                                    </div>
                                    <div class="product-info-list">
                                        <span>Size</span>
                                        <a href="#">l</a>
                                        <a href="#">m</a>
                                        <a href="#">s</a>
                                        <a href="#">x1</a>
                                    </div>
                                    <div class="product2-info-list">
                                        <span>color</span>
                                        <a class="p--1" href="#"></a>
                                        <a class="p--2" href="#"></a>
                                        <a class="p--3" href="#"></a>
                                        <a class="p--4" href="#"></a>
                                    </div>
                                    <span class="stock">50 In Stock</span>
                                    <div class="product-action-details ">
                                        <div class="product-details-action">
                                            <form action="#">
                                                <div class="plus-minus">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="1">
                                                        <div class="dec qtybutton">-</div>
                                                        <div class="inc qtybutton">+</div>
                                                    </div>
                                                </div>
                                                <div class="details-cart-btn">
                                                    <button class="c-btn red-btn">add to cart <i class="far fa-plus"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="pro-details-icon">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="far fa-search"></i></a>
                                        <a href="#"><i class="far fa-exchange"></i></a>
                                    </div>
                                    <div class="product-02-list">
                                        <ul>
                                            <li>
                                                <div class="pro-02-list-info f-left">
                                                    <span>Categories :</span>
                                                </div>
                                                <div class="pro-02-list-text">
                                                    <span>Mask, Covid -19, Sanitizer, Facemask</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pro-02-list-info f-left">
                                                    <span>SKU :</span>
                                                </div>
                                                <div class="pro-02-list-text">
                                                    <span>012345</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pro-02-list-info f-left">
                                                    <span class="pro11">Share Now :</span>
                                                </div>
                                                <div class="pro-02-list-icon">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- shop-banner-area end -->

            <!-- product-desc-area start -->
            <section class="product-desc-area pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 mb-30">
                            <div class="bakix-details-tab">
                                <ul class="nav text-center pb-30 mb-50" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#id-desc" role="tab"
                                            aria-controls="home" aria-selected="true">Description </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="id-add-in" data-toggle="tab" href="#id-add" role="tab"
                                            aria-controls="profile" aria-selected="false">Additional Information</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="id-desc" role="tabpanel" aria-labelledby="desc-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="event-text">
                                                <p><?php echo $row['PRO_DESCRIPTION']; ?><br/>
                                                   <?php echo $row['PRO_ADI_DESCRIPTION']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="id-add" role="tabpanel" aria-labelledby="id-add-in">
                                    <div class="additional-info">
                                        <div class="table-responsive">
                                            <h4>Additional information</h4>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Maximum Shelf Life</th>
                                                        <td class="product_dimensions"><?php echo $row['Maximum_Shelf_Life'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Product Type</th>
                                                        <td class="product_weight"><?php echo $row['Face_Wash_Type']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Expiry Date</th>
                                                        <td class="product_weight"><?php echo $row['PRO_EX']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Size</th>
                                                        <td class="product_dimensions">XL, XXL, LG, SM, MD</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="product-desc-imgmb-30">
                                <img src="assets/img/products/pr-banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-desc-area end -->
            <?php
            }
            ?>
            </form>
            <!-- product-area-start -->
            <div class="product-area pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-65">
                                <h2>Features Products</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error</p>
                            </div>
                        </div>
                    </div>
                    <div class="row pro-active">
                        <div class="col-xl-4">
                            <div class="product-wrapper text-center">
                                <div class="product-img pos-rel">
                                    <a href="#">
                                        <img src="assets/img/products/01.jpg" alt="">
                                        <img class="secondary-img" src="assets/img/products/02.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <h5>accessories</h5>
                                    <h4><a href="#">Medical Microscope</a></h4>
                                    <span>$250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="product-wrapper text-center">
                                <div class="product-img pos-rel">
                                    <a href="#">
                                        <img src="assets/img/products/02.jpg" alt="">
                                        <img class="secondary-img" src="assets/img/products/03.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <h5>hand sanitizer</h5>
                                    <h4><a href="#">Hand Sanitizer Covid -19</a></h4>
                                    <span>$250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="product-wrapper text-center">
                                <div class="product-img pos-rel">
                                    <a href="#">
                                        <img src="assets/img/products/03.jpg" alt="">
                                        <img class="secondary-img" src="assets/img/products/04.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <h5>home accessories</h5>
                                    <h4><a href="#">Medical Thermometer</a></h4>
                                    <span>$250.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="product-wrapper text-center">
                                <div class="product-img pos-rel">
                                    <a href="#">
                                        <img src="assets/img/products/01.jpg" alt="">
                                        <img class="secondary-img" src="assets/img/products/02.jpg" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                        <a class="c-btn" href="#">add to cart <i class="far fa-plus"></i></a>
                                        <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <h5>accessories</h5>
                                    <h4><a href="#">Medical Microscope</a></h4>
                                    <span>$250.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-area-end -->

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

<!-- Mirrored from www.devsnews.com/template/medibazar/medibazar/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 15:27:10 GMT -->
</html>