<!--
This page is displayed in the front-page.php
-->
<article class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1 homepage--blog">
       <!-- Title -->
       <h2 class="text-center"> Blog </h2>
       <div class="row">

           <!-- blog 1 -->
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
               <section class="homepage--blog__section">
                   <!-- Loop start -->
                   <?php
                       // using variable for wp_query
                       $col1 = array(
                           'category_name'     => 'wordpress',   // uncategory
                           'orderby'           => 'rand',  // random
                           'posts_per_page'    => '1'  // display only one post
                           );

                        $var_wp = new WP_Query($col1);
                        if ($var_wp->have_posts()) :
                        while ($var_wp->have_posts()) : $var_wp->the_post();
                        ?>

                       <h3><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                       <time datetime="<?php the_time('d-m-y')?>"> <?php the_time('d M Y'); ?> </time>
                       <!-- Featured Image -->
                       <div class="featuredimage--container">
                           <?php the_post_thumbnail(); ?>
                       </div>
                       <p><?php the_excerpt(); ?></p>

                   <?php endwhile; ?>
                   <?php endif; ?>
                   <!--  resetting wp_query -->
                   <?php wp_reset_postdata(); ?>
                   <!-- Loop ends -->
               </section>
           </div>

           <!-- blog 2 -->
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
               <section class="homepage--blog__section">
                   <!-- Loop start -->
                   <?php
                       // using variable for wp_query
                       $col2 = array(
                           'category_name'    => 'grunt',   // uncategory
                           'orderby'           => 'rand',  // random
                           'posts_per_page'    => '1'  // display only one post
                           );

                        $var_grunt = new WP_Query($col2);
                        if ($var_grunt->have_posts()) :
                        while ($var_grunt->have_posts()) : $var_grunt->the_post();
                        ?>

                       <h3><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                       <time datetime="<?php the_time('d-m-y')?>"> <?php the_time('d M Y'); ?> </time>
                       <!-- Featured Image -->
                       <div class="featuredimage--container">
                           <?php the_post_thumbnail(); ?>
                       </div>
                       <p><?php the_excerpt(); ?></p>

                   <?php endwhile; ?>
                   <?php endif; ?>
                   <!--  resetting wp_query -->
                   <?php wp_reset_postdata(); ?>
                   <!-- Loop ends -->
               </section>
           </div>

           <!-- blog 3 -->
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
               <section class="homepage--blog__section">
                   <!-- Loop start -->
                   <?php
                       // using variable for wp_query
                       $col3 = array(
                           'category_name'     => 'sass',   // uncategory
                           'orderby'           => 'rand',  // random
                           'posts_per_page'    => '1'  // display only one post
                           );

                        $var_sass = new WP_Query($col3);
                        if ($var_sass->have_posts()) :
                        while ($var_sass->have_posts()) : $var_sass->the_post();
                        ?>

                       <h3><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                       <time datetime="<?php the_time('d-m-y')?>"> <?php the_time('d M Y'); ?> </time>
                       <!-- Featured Image -->
                       <div class="featuredimage--container">
                           <?php the_post_thumbnail(); ?>
                       </div>
                       <p><?php the_excerpt(); ?></p>

                   <?php endwhile; ?>
                   <?php endif; ?>
                   <!--  resetting wp_query -->
                   <?php wp_reset_postdata(); ?>
                   <!-- Loop ends -->
               </section>
               
           </div>
       </div> <!-- closing row -->

       <!-- See all -->
       <h4 class="homepage--blog__seeall text-center">
           <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">See all</a>
       </h4>
</article> <!-- closing in our blog article -->
