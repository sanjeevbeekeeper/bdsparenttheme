<?php get_header(); ?>
<!-- calling the header -->

<!-- ribbon -->
<div class="row ribbon-container accent-one">
    <!-- searchform.php -->
    <?php get_search_form(); ?>
</div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

                <!-- content.php -->
                <?php get_template_part('content'); ?>

            </div> <!-- // col closing -->
        </div> <!-- // row -->

        <!-- Pagination -->
        <div class="blog--bottom__navigation">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="col-xs-6 col-xs-offset-0 col-sm-6 col-md-5 col-md-offset-1 col-lg-6 col-lg-offset-0 blog-nav-left">
                        <?php previous_posts_link(); ?>
                    </div>
                    <div class="col-xs-6 col-xs-offset-0 col-sm-6 col-md-5 col-md-offset-0 col-lg-6 col-lg-offset-0 blog-nav-right">
                        <?php next_posts_link(); ?>
                    </div> <!-- // blog-bottom_navigation -->
                </div> <!-- // column closing -->
            </div> <!-- // row closing -->
        </div> <!-- // blog-bottom__navigation -->

    </div> <!-- // container -->

    <!-- BANNER -->
    <article class="accent-one nogutter">
        <?php
            // talk to us
            get_template_part('banner');
            // talk to us
            get_template_part('banner-talktous');
        ?>
    </article> <!-- closing footer banner -->

<!-- footer -->
<?php get_footer(); ?>
