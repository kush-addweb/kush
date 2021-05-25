<?php
    session_start();
    include("../controller/cart_filter.php");
    include("header.php");
?>

<!-- <script>
    var iprice = document.getElementsByClassName('iprice');
    var iquntity = document.getElementsByClassName('iquntity');
    var itotal = document.getElementsByClassName('itotal');
    function subtotal(){
        for(i=0;i<iprice.length;i++)    {
            itotal[i].innerText = (iprice[i].value)*(iquntity[i].value);
        }
    }
</script> -->
<!-- //     $(document).ready(function(){
//         $(".itemqty").on('change',function(){
//         var $el = $($this).closest('tr');

//         var pid = $el.find(".pid").val();
//         var pprice = $el.find(".pprice").val();
//         var qty = $el.find(".itemqty").val();
//         alert (qty);
//         $.ajax({
//             url:'../controller/update.php',
//             method:'POST',
//             cache: false,
//             data:{qty:qty,pid:pid,pprice:pprice},
//             success:function(response){
//                 // alert(response);
//                 console.log(response);
//             }
//         });
//     });
// //         function subtotal(){
//            var q=document.getElementById("iquntity").value;
//             alert(q);
//             $.ajax({
//             // $('#brand').empty();
//                 url:'../controller/update.php',
//                 data:{'q':q},
//                 type:'POST',
//                 success:function(response)
//                 {
//                     alert(response);

// //                        $('#i').html(response);
//                 }
//             })
    // } -->


        <main>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-125 pb-125" style="background-image:url(assets/img/bg/04.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-wrapper">
                                <div class="breadcrumb-text">
                                    <h2>cart</h2>
                                </div>
                                <ul class="breadcrumb-menu">
                                    <li><a href="index.html">home</a></li>
                                    <li><span>cart</span></li>
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
                        <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="product-price">Unit Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-Update">Update</th>
                                            <th class="product-remove">Remove</th>
                                            <th class="product-buy">Buy</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <!-- <form action="../controller/cart_filter.php" method="post"> -->
                                            <?php
                                            $i=0;
                                            while($row = $result2->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <form action="../controller/cart_filter.php" method="post">
                                                <input name="id" type="hidden" value="<?php echo $row['CART_ID'];?>">
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/img/products/<?php echo $row['CART_IMG'];?>" alt=""></a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#"><?php echo $row['CART_NAME']; ?></a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">Rs. <?php echo $row['CART_PRICE']; ?>.00
                                                        <input class="iprice" name="price" id="price<?php echo $i; ?>" type="hidden" value="<?php echo $row['CART_PRICE'];?>">
                                                    </span>
                                                </td>
                                                <td>
                                                    <!-- <button class="dec qty" onclick="subtotal();" class="dec qtybutton" style="width: 10%;border-radius: 50%; background: #4e97fd;text-decoration-color: #f9fafa; color:white;">-
                                                    </button> -->
                                                    <div class="plus-minus">
                                                        <div class="cart-plus-minus">
                                                            <input type="text" data-id="<?php echo $row['CART_QUANTITY'];?>" name="qty"  id="Quantity<?php echo $i; ?>" class="iquntity" value="<?php echo $row['CART_QUANTITY'];?>">
                                                            <div class="dec qtybutton" id="dq">-</div>
                                                            <div class="inc qtybutton" id="iq">+</div>
                                                        </div>
                                                    </div>
                                                    <!-- <input name="qty" type="number"> -->
                                                </td>
                                                <td class="product-subtotal" class="itotal">
                                                    <span>Rs. <?php echo $row['CART_TOTAL']; ?>.00
                                                        <input class="itotal" name="total" id="total<?php echo $i; ?>" type="hidden" value="<?php echo $row['CART_TOTAL'];?>">
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <button class="c-btn theme-btn-2" type="submit" name="update">Update Cart</button>
                                                </td>
                                                <td class="product-remove"><a href="../controller/cart_filter.php?remove=<?php echo $row['CART_ID']; ?>"><i class="fa fa-times"></i></a>
                                                </td>
                                                </form>
                                                   <!--  <?php 
                                                      // $_SESSION['CART_ID'] = $row['CART_ID'];
                                                    ?> -->
                                                    <td class="product-quantity">
                                                       <a href="../controller/cart_filter.php?id=<?php echo $row['CART_ID']; ?>"><button class="c-btn theme-btn-2" type="submit">Buy Now</button></a>
                                                    </td>
                                                <!-- </form> -->
                                            </tr>
                                            <!-- </form> -->
                                            <?php
                                            $i++;

                                            }
                                            ?>
                                        <!-- </form> -->
                                       <!--  <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="assets/img/products/02.jpg"
                                                        alt=""></a></td>
                                            <td class="product-name"><a href="#">Sujon Chair Set</a></td>
                                            <td class="product-price"><span class="amount">$120.50</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">$120.50</span></td>
                                            <td class="product-quantity">
                                                    <button class="c-btn theme-btn-2" type="submit" name="update">Update Cart</button>
                                                </td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                        </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            // function getvalue(i)
            //     {
            //         var qty = document.getElementById("Quantity"+i).value;
            //         var price = document.getElementById("price"+i).value;
            //         var total = document.getElementById("total"+i).value;
                    
            //         var total = qty * price;
            //         alert (total);
            //         $.ajax({
            //         // $('#brand').empty();
            //             url:'../controller/update.php',
            //             data:{'category':cat},
            //             type:'POST',
            //             success:function(response)
            //             {
            //                 //alert(response);

            //                 $('#brand').html(response);
            //             }
            //         })
            //         // alert (price);
            //     }
        // function getvalue(i)
        // {
        //     // $("#hide").hide();
        //     $("Quantity"+i).change(function()
        //     {
        //         var qty = $("Quantity"+i).val();
        //         alert (qty);
        //     })
        // }
        // function myfunction(){
        //     var qty = document.getElementById("Quantity").value;
        //         alert(qty);
        //     // if(isNAN(qty) || qty<1 || qty > 100){
        //     //     alert ("error");
        //     // }
        // }
        // $(document).ready(function()
        //     // alert("ghhg");
        //     // $('#update_button').click(function(){
        //     //     var qty = $('#Quantity').val();
        //     //     alert(qty);
        //     jQuery("[id=update_button]").on('click',function(e){
        //      e.preventDefault(); 
        //      // alert("test");
        //      // $('#update_button').click(function(){
        //         var qty = e.val();
        //         alert(qty);
        //     });
        //         // var price =$(this).('#price').text();
        //         // alert("qty:"+qty+" proice:"+price);
        //         // var total = qty * price;
        //         // alert(total);
        //         // $(this).('#total').text(total);
        //         // alert("cjhbj");
        //     // });

    // });

        </script>
<?php
include("footer.php");

// function sesss()
// {
//     session_start();
//     $_SESSION['pid']=$_POST['PRO_ID'];
//     $_SESSION['qty']=$_POST['qty'];
//     print_r($_SESSION);

?>
