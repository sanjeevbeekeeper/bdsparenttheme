<?php get_header(); ?>
<!-- header -->

<div class="container">
        <!-- services -->
        <div class="row">
           <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 homepage--services text-center">
               <article class="homepage--services__intro">
                   <h2> Services </h2>
                   <p> Whether it is a template or custom design from scratch, We tailor specifically to your business needs and develop with your requirements in mind. </p>
               </article>
           </div> <!--// col -->
       </div> <!-- // row -->

       <div class="row">
           <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
               <div class="homepage--image">
                   <img src="<?php bloginfo('template_directory'); ?>/resources/img/display-image.png" alt="">
               </div> <!-- // homepage-image -->
           </div> <!--// col -->
       </div> <!-- // row -->


       <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 homepage--services text-center">
               <!-- list of service  -->
               <article class="homepage--services__lists">
                   <!-- responsive web design -->
                   <section class="homepage--services__lists-section">
                       <h3>
                            <ul class="listreset">
                               <?php
                                   wp_list_pages( array(
                                       'include' => array(33), // responsive web design
                                       'title_li'  => ''
                                       ));
                                   ?>
                            </ul>
                       </h3>
                       <p>
                            Designing a professional website can be taunting process; a good design shows credibility and expertise. We ensure that your site will look professional and also intuitive for the user to deliver the best online user experience.
                       </p>
                   </section>
                   <!-- content management system -->
                   <section class="homepage--services__lists-section">
                       <h3>
                           <ul class="listreset">
                               <?php
                                   wp_list_pages( array(
                                       'include' => array(35), // content management system
                                       'title_li'  => ''
                                       ));
                                   ?>
                           </ul>
                      </h3>
                       <p>
                         We will set up a complete solution where you take care of your website in your leisure time. With an easy to use Content Management System, we can set up a simple and secure website.
                       </p>
                   </section>
                   <!-- website maintenance -->
                   <section class="homepage--services__lists-section">
                       <h3>
                           <ul class="listreset">
                               <?php
                                   wp_list_pages( array(
                                       'include' => array(37), // website maintenance
                                       'title_li'  => ''
                                       ));
                                   ?>
                           </ul>
                      </h3>
                       <p>
                           Keeping your website up-to date tells the user that you care about the content and are in tune with the current technology.
                       </p>
                   </section>
               </article> <!-- // services list -->
           </div> <!--// col -->
        </div> <!--// row -->

        <!-- Blog content in the Homepage  -->
        <?php get_template_part('blog-content'); ?>
    </div>

    <!-- BANNER -->
    <article class="accent-one nogutter">
        <?php
            // talk to us
            get_template_part('banner-talktous');
        ?>
    </article> <!-- closing footer banner -->

<!-- footer -->
<?php get_footer(); ?>
