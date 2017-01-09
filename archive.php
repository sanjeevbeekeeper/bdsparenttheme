<?php get_header(); ?>
<!-- calling the header -->

    <!-- ribbon -->
    <div class="row ribbon-container accent-one">
        <!-- searchform.php -->
        <?php get_search_form( ); ?>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

                <?php
                    if (have_posts()) :
                    ?>

                <!-- Search notification -->
                <div class="alert alert-info">
                    <?php
                        if ( is_category() ){ ?>
                            Filtered by the Category: <strong> <?php echo single_cat_title( '', false); ?> </strong>
                            <!-- single_cat_title( 'Filtered by the Category: '); -->
                        <?php }
                        elseif ( is_search() ) {
                            echo 'Search Result';
                            }
                        else {
                            echo 'Archive';
                        }
                     ?>
                 </div> <!-- // alert -->

                 <!-- Content -->
                <?php
                    while (have_posts()) : the_post(); ?>

                        <?php get_template_part('content'); ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div> <!-- // container -->
        </div> <!-- // row -->

        <!-- post-pagination.php -->
        <?php get_template_part('post-pagination'); ?>

    </div> <!-- // container -->

<!-- footer -->
<?php get_footer(); ?>
