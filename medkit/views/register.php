<?php
    include("../controller/reg.php");
    include("header.php");
?>
    <script type="text/javascript">
    $(document).ready(function()
    {
        $("#sub").on("click",function()
        {
                var a=$("#pass1").val();
                var b=$("#pass2").val();
                if(a!=b)
                {
                    $("#error").html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong></strong>Your Password Is Not Matched<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                        return false;
                }
                else
                {
                    return true;
                }    
            });
        });
    </script>

<main>

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area pt-100 pb-100" style="background-image:url(assets/img/bg/04.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-text">
                            <h2>register</h2>
                        </div>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
                            <li><span>register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

<!-- login Area Strat-->
<section class="login-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                    <h3 class="text-center mb-60">Signup From Here</h3>
                    <form action="../controller/reg.php" method="POST" class="row g-3">
                        <div id="error"></div>
                        <div class="col-auto" style="width: 50%; margin-bottom: 20px;">
                            <label for="staticEmail2" class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" id="inputAddress" placeholder="kush" required>
                        </div>
                        <div class="col-auto" style="width: 50%; margin-bottom: 20px;">
                            <label for="staticEmail2" class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control" id="inputPassword2" placeholder="bhatt" required>
                        </div>
                        <div class="col-auto" style="width: 1000%; margin-bottom: 20px;">
                            <label for="staticEmail2" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputPassword2" placeholder="email@example.com" required>
                        </div>
                        <div class="col-auto" style="width: 50%; margin-bottom: 20px;">
                            <label for="inputPassword2" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" id="pass1" placeholder="Password" required>
                        </div>
                        <div class="col-auto" style="width: 50%; margin-bottom: 20px;">
                            <label for="inputPassword2" class="form-label">Confirm password</label>
                            <input type="password" name="con_pass" class="form-control" id="pass2" placeholder="Confirm password" required>
                        </div>
                        <div class="col-12" style="margin-bottom: 20px;">
                            <label for="inputAddress" class="form-label" >Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
                        </div>
                        <div class="col-auto" style="width: 50%;">
                            <label for="staticEmail2" class="form-label">State</label>
                            <select class="form-control" id="exampleSelect1" name="state" style="height: 60px; border: 2px solid #eaedff; margin-bottom: 20px; height: 40px; border: 1px solid #ced4da">
                                <option>Gujarat</option>
                                <option>Pune</option>
                                <option>Delhi</option>
                            </select>
                        </div>
                        <div class="col-auto" style="width: 50%;">
                            <label for="staticEmail2" class="form-label">Gender</label>
                            <select class="form-control" id="exampleSelect1" name="gender" style="height: 60px; border: 2px solid #eaedff; margin-bottom: 20px; height: 40px; border: 1px solid #ced4da">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="col-auto" style="width: 50%; margin-bottom: 30px;">
                            <label for="staticEmail2" class="form-label">Date of Birth</label>
                            <input class="form-control" type="date" value="2011-08-19" name="dob" id="inputAddress">
                        </div>  
                        <div class="col-auto" style="width: 50%; margin-bottom: 30px;">
                            <label for="staticEmail2" class="form-label">Phone no.</label>
                            <input class="form-control" type="tel" placeholder="+91 1234-5678" name="ph_no" id="example-tel-input">
                        </div>
                        <div class="col-auto" style="width: 100%;">
                            <button type="submit" name="register" id="sub" class="c-btn theme-btn-2 w-100">Register Now</button>
                            <div class="or-divide" style="margin: 20px 0;"><span>or</span></div>
                            <a class="c-btn theme-btn w-100" href="login.php">Login Now</a>
                        </div>
                        <div class='modal' tabindex='-1'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title'>Modal title</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <p></p>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                        <button type='button' class='btn btn-primary'>Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login Area End-->


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