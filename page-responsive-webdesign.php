<?php get_header(); ?>
<!-- calling the header -->

<!-- service ribbon -->
<div class="ribbon-container accent-one nogutter">
    <ul class="listreset">
        <?php
        $args = array(
            'child_of' => get_top_ancestor_id(),
            'title_li' => ''
        );
        ?>
        <?php wp_list_pages($args); ?>
    </ul>
</div> <!-- // ribbon-container -->

<?php
    if (have_posts()) :
        while (have_posts()) : the_post();
        ?>

        <div class="container">

            <!-- services -->
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <article class="content--heading text-center">
                        <!-- rwd title -->
                        <h2> <?php the_title(); ?> </h2>
                        <!-- rwd content -->
                        <?php the_content(); ?>
                    </article>
                </div> <!--// col -->
            </div> <!-- // row -->

            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <div class="homepage--image">
                        <img src="<?php bloginfo('template_directory'); ?>/resources/img/services.png" alt="">
                    </div> <!-- // homepage-image -->
                </div> <!--// col -->
            </div> <!-- // row -->

        </div> <!-- // container -->

    <?php endwhile; ?>
<?php endif; ?>

<!-- BANNER -->
<article class="accent-one nogutter">
    <?php
        // quotes banner
        get_template_part('banner');
        // talk to us
        get_template_part('banner-talktous');
    ?>
</article> <!-- closing footer banner -->


<!-- footer -->
<?php get_footer(); ?>
