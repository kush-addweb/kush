<?php
    include("header.php");
    include("../controller/cart_filter.php");
?>
<main>

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area pt-100 pb-100" style="background-image:url(assets/img/bg/04.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-text">
                            <h2>Wishlist</h2>
                        </div>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
                            <li><span>Wishlist</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

<!-- Cart Area Strat-->

<section class="cart-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <!-- <th class="product-subtotal">Total</th> -->
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    while ($row = $obj->fetch_assoc()) {
                                ?>
                                <form action="../controller/cart_filter.php" method="post">
                                <tr>
                                    <td class="product-thumbnail"><a href="#">
                                        <img src="assets/img/products/<?php echo $row['WISH_IMG']; ?>"alt=""></a>
                                        <input type="hidden" name="img" value="<?php echo $row['WISH_IMG']; ?>">
                                        <input type="hidden" name="proid" value="<?php echo $row['PRO_ID']; ?>">
                                    </td>
                                    <td class="product-name">
                                        <a href="# " name="wishname"><?php echo $row['WISH_NAME']; ?></a>
                                        <input type="hidden" name="wishname" value="<?php echo $row['WISH_NAME']; ?>">
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">Rs. <?php echo $row['WISH_PRICE']; ?>.00</span>
                                        <input type="hidden" name="wishprice" value="<?php echo $row['WISH_PRICE']; ?>">
                                    </td>
                                    <td class="product-quantity">
                                        <button class="c-btn theme-btn-2" type="submit" name="wish-but">Add To Cart</button>
                                    </td>
                                    <!-- <td class="product-subtotal"><span class="amount">$130.00</span></td> -->
                                    <td class="product-remove">
                                        <a href="../controller/cart_filter.php?rem_wish=<?php echo $row['WISH_ID']; ?>"><i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                </form>
                                <?php
                                    }      
                                ?>
                                <!-- <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="assets/img/products/02.jpg"alt=""></a></td>
                                    <td class="product-name"><a href="#">Sujon Chair Set</a></td>
                                    <td class="product-price"><span class="amount">$120.50</span></td>
                                    <td class="product-quantity">
                                        <button class="c-btn theme-btn-2" type="submit">Add TO Cart</button>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$120.50</span></td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Cart Area End-->


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

<?php
include("footer.php");
?>