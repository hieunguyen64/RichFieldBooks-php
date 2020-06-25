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
            <span class="breadcrumb-item active">Product detail</span>
        </div>
    </div>

    <section class="product-sec">
        <div class="container">
            <h1><?php echo $data['book_name'] ?></h1>
            <div class="row">
                <div class="col-md-6 slider-sec">
                    <!-- main slider carousel -->
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="<?php echo BASE_URL ?>/content/images/<?php echo $data['img'] ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 slider-content">
                    <p><?php echo $data['description'] ?>
                    </p>
                    <ul>
                        <li>
                            <span class="name">Kindle Price</span><span class="clm">:</span>
                            <span class="price final"><?php echo $data['price'] ?>VNĐ</span>
                        </li>
                        <li><span class="save-cost">Save (69%)</span></li>
                    </ul>
                    <div class="btn-sec">
                        <button class="btn ">Add To cart</button>
                        <button class="btn black">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related-books">
        <div class="container">
            <h2>You may also like these book</h2>
            <div class="recomended-sec">
                <div class="row">
                    <?php
                    foreach ($data_getRecommendedBook as $key => $value) {
                    ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="item">
                                <img class="also-liked-book-img" src="<?php echo BASE_URL ?>/content/images/<?php echo $value['img'] ?>" alt="img">
                                <h3><?php echo $value['book_name'] ?></h3>
                                <h6><span class="price"><?php echo $value['price'] ?>VNĐ</span> / <a href="#">Buy Now</a></h6>
                                <div class="hover">
                                    <a href="detail-<?php echo chuanHoaChuoi($value['book_name']) ?>-<?php echo $value['book_id'] ?>.html">
                                        <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    include ROOT . '/View/subview/footer.php';
    ?>
</body>

</html>