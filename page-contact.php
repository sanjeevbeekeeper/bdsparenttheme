<?php get_header(); ?>
<!-- calling the header -->

<?php
    if (have_posts()) :
    while (have_posts()) : the_post();
    ?>

    <div class="container">
        <!-- services -->
        <div class="row">
            <div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <article class="contact_container text-center">
                    <!--  title -->
                    <h2> Main Office </h2>

                    <!--  contact content -->
                     <address class="bds_address">
                         <?php the_content(); ?>
                     </address>

                     <!--  phone and email -->
                     <p>
                         <a href="#" data-toggle="modal" data-target="#phoneno"> +91 044 4351 421</a> <br>
                         <a href="mailto:info@beekeeperstudio.com"> info@beekeeperstudio.com </a>
                     </p>
                </article>

                <!-- Modal for Phone no. -->
                 <div class="modal" id="phoneno" role="dialog">
                   <div class="modal-dialog">

                     <!-- Modal content-->
                     <div class="modal-content">
                         <div class="modal-body text-center">
                             +91 43514211
                         </div>
                     </div>

                   </div>
                 </div>

                 <!-- Google map -->
                <div class="bds_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15550.221473824577!2d80.253582!3d13.000266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd374eb2136fbd6ee!2sBeekeeper+Design+Studio!5e0!3m2!1sen!2sin!4v1482302114655" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div> <!-- closing col -->
        </div> <!-- closing row -->
    </div> <!-- closing container -->

<?php endwhile; ?>
<?php endif; ?>

<!-- footer -->
<?php get_footer(); ?>
