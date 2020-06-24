<section class="recomended-sec">
    <div class="container">
        <div class="title">
            <h2>highly recommendes books</h2>
            <hr>
        </div>
        <div class="row">
            <?php
            foreach ($data as $key => $value) {
            ?>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="<?php echo BASE_URL ?>/content/images/<?php echo $value['img'] ?>" alt="img">
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
</section>