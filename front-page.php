<?php get_header(); ?>
<!-- header -->

<div class="container">

    <!-- slideshow -->
    <div class="row">
        <div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1">
            <div id="slideshow">
                <img class="slide" src="<?php bloginfo('template_directory'); ?>/resources/slideshow/01.png" alt="">
                <img class="slide" src="<?php bloginfo('template_directory'); ?>/resources/slideshow/02.png" alt="">
                <img class="slide" src="<?php bloginfo('template_directory'); ?>/resources/slideshow/03.png" alt="">
                <img class="slide" src="<?php bloginfo('template_directory'); ?>/resources/slideshow/04.png" alt="">
                <img class="slide" src="<?php bloginfo('template_directory'); ?>/resources/slideshow/05.png" alt="">
            </div> <!-- // homepage-image -->
        </div> <!--// col -->
    </div> <!-- // row -->

    <!-- services -->
    <div class="row">
       <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 homepage--services text-center">
           <article class="homepage--services__intro">
               <h2> Services </h2>
               <p> Whether it is a template or custom design from scratch, We tailor specifically to your business needs and develop with your requirements in mind. </p>
           </article>
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

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-mg-10 col-mg-offset-1 col-sm-12 col-xs-12">
            <div class="language_container">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/html5.png" alt="HTML 5">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/css3.png" alt="CSS 3">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/javascript.png" alt="JavaScript">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/jquery.png" alt="jQuery">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/ajax.png" alt="Ajax">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/php.png" alt="PHP">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/sass.png" alt="Sass">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/bootstrap.png" alt="Bootstrap">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/sketch.png" alt="Sketch">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/wordpress.png" alt="WordPress">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/grunt.png" alt="Grunt">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/github.png" alt="Github">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/atom.png" alt="Atom">
                <img src="<?php bloginfo('template_directory'); ?>/resources/languages/git.png" alt="Git">
            </div> <!-- // .language_container -->
        </div> <!-- // .col -->
    </div> <!-- // .row -->
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
