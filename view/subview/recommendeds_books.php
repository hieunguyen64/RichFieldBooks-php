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
                        <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                        <div class="hover">
                            <a href="product-single.html">
                                <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="images/img2.jpg" alt="img">
                    <h3>How to write a book...</h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    <span class="sale">Sale !</span>
                    <div class="hover">
                        <a href="product-single.html">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="images/img3.jpg" alt="img">
                    <h3>7-day self publish...</h3>
                    <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                    <div class="hover">
                        <a href="product-single.html">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="images/img4.jpg" alt="img">
                    <h3>wendy doniger</h3>
                    <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                    <div class="hover">
                        <a href="product-single.html">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>