<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><a href="#" class="web-url">www.richfieldbooks.com</a></div>
                <div class="col-md-6">
                    <h5>Free Shipping Over $99 + 3 Free Samples With Every Order</h5>
                </div>
                <div class="col-md-3">
                    <span class="ph-number">Call : 800 1234 5678</span>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light mx-md-5">
                <a class="navbar-brand w-25 w-md-100" href="index.html"><img src="<?php echo BASE_URL ?>/content/images/mylogo.png" alt="logo">RichField Books</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item active">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a href="index.php?Controller=Book&action=ShopAllBook" class="nav-link">Shop</a>
                        </li>
                        <li class="navbar-item">
                            <a href="about.html" class="nav-link">About</a>
                        </li>
                        <?php
                        if (isset($_SESSION['user_login'])) {
                        ?>
                            <li class="navbar-item">
                                <a class="nav-link" href="">
                                    Hello: <?php echo $_SESSION['user_login']['user_email'] ?>
                                </a>
                            </li>
                            <li class="navbar-item">
                                <a class="nav-link" href="logout.html">Logout</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="navbar-item">
                                <a class="nav-link" href="login.html">Login</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <div class="cart my-2 my-lg-0">
                        <span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                        <span class="quntity">3</span>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                        <span class="fa fa-search"></span>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</header>