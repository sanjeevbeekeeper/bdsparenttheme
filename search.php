<?php get_header(); ?>
<!-- calling the header -->

    <!-- ribbon -->
    <!-- searchform.php -->
    <div class="row ribbon-container accent-one">
        <?php get_search_form(); ?>
    </div>

    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

                <!-- Search alert -->
                <div class="alert alert-info">
                    Search results for: <strong><?php the_search_query(); ?></strong>
                </div>

                <!-- LOOP -->
                <?php if (have_posts()) :
                    while (have_posts()) : the_post();
                    ?>

                    <!-- content.php -->
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

        <!-- post-pagination.php -->
        <?php get_template_part('post-pagination'); ?>

    </div> <!-- // container -->

    <!-- BANNER -->
    <article class="accent-one nogutter">
        <!-- talk to us -->
        <?php get_template_part('banner-talktous'); ?>
    </article> <!-- closing footer banner -->

<!-- footer -->
<?php get_footer(); ?>
