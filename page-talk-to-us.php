<?php get_header(); ?>
<!-- calling the header -->

    <div class="primary-color nogutter">
        <div class="container">

            <!-- services -->
            <div class="row">

                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <div class="talktous_intro text-center">
                        You can reach us on <span class="bld">+91 43514211</span> <br>
                        Email: <span class="bld">info@beekeeperstudio.com</span>
                    </div>
                </div>

                <!-- talk to us form -->
                <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <div class="talktous_form">

                        <!-- Loop start -->
                        <?php
                            if (have_posts()) :
                            while (have_posts()) : the_post();
                            ?>

                            <!-- Content -->
                            <?php the_content(); ?>

                        <?php endwhile; ?>
                        <?php endif; ?>
                        <!-- Loop Ends -->

                        <!-- Contact Form 7 -->
                        <!-- note: WP-MAIL-SMTP plugin is required along with Contact Form 7 -->
                        <form class="form-horizontal" action="" method="post">
                            <?php echo do_shortcode( '[contact-form-7 id="128" title="Talk to Us"]' ); ?>
                        </form>

                    </div>

                    <!-- timing -->
                    <section class="below-the-tab">
                        <strong>Business Hours</strong>
                        <p class="workingdays">
                            Monday - Friday: <time>09:00 - 17:00</time> IST
                        </p>
                    </section>

                </div> <!-- closing col -->
            </div> <!-- closing row -->
        </div> <!-- closing container -->
    </div> <!-- closing container -->

<!-- footer -->
<?php get_footer(); ?>
