<!-- home -->
<?php if(is_page(6)) { ?>
    <a href="<?php echo get_page_link(14); ?>"> Talk to Us</a>
    <section class="banner-container primary-color text-center">
        <h3 class="banner-text">
            We can provide a Complete Website solution? ss
        </h3>
        <button type="button" class="btn btn-secondary btn-lg">
            <a href="<?php echo get_page_link(14); ?>"> Talk to Us</a>
        </button>
    </section>
<?php } ?>

<!-- Responsive Webdesign -->
<?php if(is_page(33)) { ?>
    <a href="<?php echo get_page_link(14); ?>"> Talk to Us Responsive</a>
    <section class="banner-container primary-color text-center">
        <h3 class="banner-text">
            Looking for a Visually Stunning Responsive Website?
        </h3>
        <button type="button" name="button" class="btn btn-secondary btn-lg">
            <a href="<?php get_permalink( get_page_by_path( 'talk-to-us' ) ); ?>"> Talk to Us</a>
        </button>
    </section>
<?php } ?>

<!-- CMS -->
<?php if( is_page(35)) { ?>
    <section class="banner-container primary-color text-center">
        <h3 class="banner-text">
            Yes, We also Build Responsive WordPress sites
        </h3>
        <button type="button" name="button" class="btn btn-secondary btn-lg">
            <a href="<?php get_permalink( get_page_by_path( 'talk-to-us' ) ); ?>"> Talk to Us</a>
        </button>
    </section>
<?php } ?>

<!-- Website Maintenance -->
<?php if(is_page(37)) { ?>
    <section class="banner-container primary-color text-center">
        <h3 class="banner-text">
            We provide Backup, Update, and New Features with an affordable cost.
        </h3>
        <button type="button" name="button" class="btn btn-secondary btn-lg">
            <a href="<?php get_permalink( get_page_by_path( 'talk-to-us' ) ); ?>"> Talk to Us</a>
        </button>
    </section>
<?php } ?>

<!-- Blog -->
<?php if( is_home() ) { ?>
    <section class="banner-container primary-color text-center">
        <h3 class="banner-text">
            We can Setup a Creative Blog with User-Friendly CMS.
        </h3>
        <button type="button" name="button" class="btn btn-secondary btn-lg">
            <a href="<?php get_permalink( get_page_by_path( 'talk-to-us' ) ); ?>"> Talk to Us</a>
        </button>
    </section>
<?php } ?>

<!-- About -->
<?php if( is_page(12) ) { ?>
    <section class="banner-container primary-color text-center">
        <h3 class="banner-text">
            We are Nice People!
        </h3>
        <button type="button" name="button" class="btn btn-secondary btn-lg">
            <a href="<?php get_permalink( get_page_by_path( 'talk-to-us' ) ); ?>"> Talk to Us</a>
        </button>
    </section>
<?php } ?>
