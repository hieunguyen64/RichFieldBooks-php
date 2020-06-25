<section class="recent-book-sec">
    <div class="container">
        <div class="title">
            <h2>recently added books</h2>
            <hr>
        </div>
        <div class="row">
            <?php
            foreach ($data_recentlyaddedbook as $key => $value) {
            ?>
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="<?php echo BASE_URL ?>/content/images/<?php echo $value['img'] ?>" alt="img">
                        <h3>
                            <a href="detail-<?php echo chuanHoaChuoi($value['book_name']) ?>-<?php echo $value['book_id'] ?>.html"><?php echo $value['book_name'] ?></a>
                        </h3>
                        <h6><span class="price"><?php echo $value['price'] ?>VNĐ</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>