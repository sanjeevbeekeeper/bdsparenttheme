<?php get_header(); ?>
<!-- calling the header -->

<div class="container">
    <div class="error--page text-center">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h1 class="secondary-color"> 404 </h1>
                <h3>Sorry! Something Went Wrong</h3>
                <p class="accent-one-nobg">
                    The Page you are looking for was moved, renamed, or removed or might never existed.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- BANNER -->
<article class="accent-one nogutter">
    <?php
        // quotes banner
        get_template_part('banner-quotes');
        // talk to us
        get_template_part('banner-talktous');
    ?>
</article> <!-- closing footer banner -->

<!-- footer -->
<?php get_footer(); ?>
