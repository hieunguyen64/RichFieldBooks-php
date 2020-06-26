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
            <span class="breadcrumb-item active">Login</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>My Account / Login</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
            <div class="form">
                <form action="login_dologin.php" method="post">
                    <div class="row">
                        <div class="col-md-5">
                            <?php
                            if (isset($_SESSION['flash'])) echo $_SESSION['flash'];
                            else 'Nhập thông tin đăng nhập';
                            unset($_SESSION['flash']);
                            ?>
                            <input placeholder="Enter Email Address" name="email" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-md-5">
                            <input type="password" placeholder="Enter Password" name="password" required>
                            <span class="required-star">*</span>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <button class="btn black" type="submit">Login</button>
                            <h5>not Registered? <a href="register.html">REgister here</a></h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php
    include ROOT . '/View/subview/footer.php';
    ?>
</body>

</html>