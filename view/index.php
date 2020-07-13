<?php
include ROOT . '/View/subview/bootstrap_css_import.php';
?>

<body>
    <?php
    include ROOT . '/View/subview/header.php';
    ?>

    <?php
    include ROOT . '/View/subview/Hero_image.php';
    ?>

    <?php
    include ROOT . '/View/subview/recommendeds_books.php';
    ?>
    <section class="about-sec">
        <div class="about-img">
            <figure style="background:url(./images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About RichField Books,</h2>
            <p>
                Local bookstores in the Seattle area described wariness over the physical presence of richfieldbooks.com, with the University Book Store in the U District noting "different spending patterns" two months after the opening of RichField's store; an RichField spokesperson dismissed the notion that RichField Books would interfere with independent bookstores and their operations, stating that "offline retail is a big space with room for lots of winners."

                The executive vice president of Half Price Books, a national chain of new and used bookstores, saw the interest that RichField is showing in expanding brick-and-mortar bookstores as something good for the industry, stating in February 2016 that it was a sign that the "printed word isn't dead".
            </p>

            <div class="btn-sec">
                <a href="index.php?Controller=Book&action=ShopAllBook" class="btn yellow">shop books</a>
                <a href="login.html" class="btn black">subscriptions</a>
            </div>
        </div>
    </section>
    <?php
    include ROOT . '/View/subview/recently_added_books.php';
    ?>
    <section class="features-sec">
        <div class="container">
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    <h3>SAFE SHOPPING</h3>
                    <h5>Safe Shopping Guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                    <h3>30- DAY RETURN</h3>
                    <h5>Moneyback guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <h3>24/7 SUPPORT</h3>
                    <h5>online Consultations</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
            </ul>
        </div>
    </section>

    <section class="testimonial-sec">
        <div class="container">
            <div id="testimonal" class="owl-carousel owl-theme">
                <div class="item">
                    <h3>This beautiful book quote was beautifully visualized by Risa Rodil. You can get the artwork from Redbubble, on a variety of products. Besides a number of posters, you can have iPad and iPhone cases, mugs, wall clocks, and even a duvet cover! And, yes, apparel is here, too.</h3>
                    <div class="box-user">
                        <h4 class="author">Stephen King</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>I would never read a book if it were possible for me to talk half an hour with the man who wrote it.</h3>
                    <div class="box-user">
                        <h4 class="author">Woodrow Wilson</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>A minimalist design from Instant Quotes features one of the most famous quotes about books. There is no better friend than a book, and there is no better way to express it than on a wall.</h3>
                    <div class="box-user">
                        <h4 class="author">Ernest Hemingway</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Any book that helps a child to form a habit of reading, to make reading one of his deep and continuing needs, is good for him.</h3>
                    <div class="box-user">
                        <h4 class="author">Maya Angelou</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-quote">
            <img src="images/left-quote.png" alt="quote">
        </div>
        <div class="right-quote">
            <img src="images/right-quote.png" alt="quote">
        </div>
    </section>

    <?php
    include ROOT . '/View/subview/footer.php';
    ?>
</body>

</html>