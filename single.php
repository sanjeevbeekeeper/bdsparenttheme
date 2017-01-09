<?php get_header(); ?>
<!-- calling the header -->

<!-- ribbon -->
<!-- searchform.php -->
<div class="row ribbon-container accent-one">
    <?php get_search_form(); ?>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

            <!-- Back btn -->
            <div class="blog-single-backbtn">
                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Back</a>
            </div>

            <!-- LOOP -->
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
                ?>

                <!-- Content -->
                <?php get_template_part('content'); ?>

                <?php endwhile; else : ?>
                    <p class="text-center alert alert-warning">
                        <?php _e( 'Sorry, no posts matches your criteria.' ); ?>
                    </p>
                    <br>
            <?php endif; ?>
            <!-- // LOOP -->

        </div> <!-- // col -->
    </div> <!-- // row -->

    <!-- Pagination -->
    <div class="blog--bottom__navigation">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <div class="col-xs-6 col-xs-offset-0 col-sm-6 col-md-5 col-md-offset-1 col-lg-6 col-lg-offset-0 blog-nav-left">
                    <?php previous_post_link('%link', '&#171; Previous'); ?>
                </div>
                <div class="col-xs-6 col-xs-offset-0 col-sm-6 col-md-5 col-md-offset-0 col-lg-6 col-lg-offset-0 blog-nav-right">
                    <?php next_post_link('%link' , 'Next &#187;'); ?>
                </div> <!-- // blog-bottom_navigation -->
            </div> <!-- // column closing -->
        </div> <!-- // row closing -->
    </div> <!-- // blog-bottom__navigation -->

</div> <!-- // container -->

<!-- BANNER -->
<article class="accent-one nogutter">
    <!-- talk to us -->
    <?php get_template_part('banner-talktous'); ?>
</article> <!-- closing footer banner -->

<!-- footer -->
<?php get_footer(); ?>
