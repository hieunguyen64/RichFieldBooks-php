<?php
include ROOT . '/View/subview/bootstrap_css_import.php';
?>

<body>
    <?php
    include ROOT . '/View/subview/header.php';
    ?>

    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.html">Home</a>
            <span class="breadcrumb-item active">Register</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>My Account / REgister</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
            <div class="form">
                <form method="post" action="index.php?controller=Register&action=doregister">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="email" name="user_email" placeholder="Enter your email" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-4">
                            <input type="password"  name="user_password" placeholder="Password" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-4">
                            <input type="text"  name="user_name" placeholder="Enter your name" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-4">
                            <input type="text"  name="user_address" placeholder="Enter your address" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-4">
                            <input type="number"  name="user_phone" placeholder="Enter your phone number" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <button type="submit" name="do_register" class="btn black">Register</button>
                            <h5>not Registered? <a href="login.html">Login here</a></h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="address">
                        <h4>Our Address</h4>
                        <h6>The BookStore Theme, 4th Store
                        Beside that building, USA</h6>
                        <h6>Call : 800 1234 5678</h6>
                        <h6>Email : info@bookstore.com</h6>
                    </div>
                    <div class="timing">
                        <h4>Timing</h4>
                        <h6>Mon - Fri: 7am - 10pm</h6>
                        <h6>​​Saturday: 8am - 10pm</h6>
                        <h6>​Sunday: 8am - 11pm</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="navigation">
                        <h4>Navigation</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms-conditions.html">Terms</a></li>
                            <li><a href="products.html">Products</a></li>
                        </ul>
                    </div>
                    <div class="navigation">
                        <h4>Help</h4>
                        <ul>
                            <li><a href="">Shipping & Returns</a></li>
                            <li><a href="privacy-policy.html">Privacy</a></li>
                            <li><a href="faq.html">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form">
                        <h3>Quick Contact us</h3>
                        <h6>We are now offering some good discount 
                            on selected books go and shop them</h6>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input placeholder="Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea placeholder="Messege"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn black">Alright, Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2017. All Rights Reserved. BookStore Wordpress Theme</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
                            <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../content/styles/js/jquery.min.js"></script>
    <script src="../content/styles/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../content/styles/js/owl.carousel.min.js"></script>
    <script src="../content/styles/js/custom.js"></script>
</body>

</html>