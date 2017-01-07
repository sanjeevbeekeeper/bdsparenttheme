<?php get_header(); ?>
<!-- calling the header -->

<?php
    if (have_posts()) :
    while (have_posts()) : the_post();
    ?>

    <div class="container">
        <!-- services -->
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <article class="content--heading text-center">
                    <!--  about content -->
                    <?php the_content(); ?>
                </article>

            </div> <!-- closing col -->
        </div> <!-- closing row -->
    </div> <!-- closing container -->

<?php endwhile; ?>
<?php endif; ?>

<br>
<br>
<!-- BANNER -->
<article class="accent-one nogutter">
    <?php
        // talk to us
        get_template_part('banner-talktous');
    ?>
</article> <!-- closing footer banner -->


<!-- footer -->
<?php get_footer(); ?>
