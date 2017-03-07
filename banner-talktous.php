<!-- Home + Search -->
<?php if(is_page(6)|| is_search()) { ?>
    <section class="banner-container banner-talktous text-center">
        <h3 class="banner-text">
            We can Provide a Complete Web Solution
        </h3>
        <a class="btn btn-success" href="<?php echo get_page_link(14); ?>">Talk to Us</a>
    </section>
<?php } ?>

<!-- Responsive Webdesign -->
<?php if(is_page(33)) { ?>
    <section class="banner-container banner-talktous text-center">
        <h3 class="banner-text">
            We are Specialized in Responsive Websites
        </h3>
        <a class="btn btn-success" href="<?php echo get_page_link(14); ?>">Talk to Us</a>
    </section>
<?php } ?>

<!-- CMS -->
<?php if( is_page(35)) { ?>
    <section class="banner-container banner-talktous text-center">
        <h3 class="banner-text">
            Our Core Development is WordPress
        </h3>
        <a class="btn btn-success" href="<?php echo get_page_link(14); ?>">Talk to Us</a>
    </section>
<?php } ?>

<!-- Website Maintenance -->
<?php if(is_page(37)) { ?>
    <section class="banner-container banner-talktous text-center">
        <h3 class="banner-text">
            We provide full Support with the affordable cost.
        </h3>
        <a class="btn btn-success" href="<?php echo get_page_link(14); ?>">Talk to Us</a>
    </section>
<?php } ?>

<!-- Blog -->
<?php if( is_page(10) || is_single() ) { ?>
    <section class="banner-container banner-talktous text-center">
        <h3 class="banner-text">
            We can Setup a Creative Blog with User-Friendly CMS.
        </h3>
        <a class="btn btn-success" href="<?php echo get_page_link(14); ?>">Talk to Us</a>
    </section>
<?php } ?>

<!-- About -->
<?php if( is_page(12) ) { ?>
    <section class="banner-container banner-talktous text-center">
        <h3 class="banner-text">
            We are Nice People!
        </h3>
        <a class="btn btn-success" href="<?php echo get_page_link(14); ?>">Say Hi!</a>
    </section>
<?php } ?>
