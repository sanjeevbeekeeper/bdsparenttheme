<!--
# This page is used in
# index.php
-->

<?php if (have_posts()) :
    while (have_posts()) : the_post();
    ?>

    <article class="blog--article">
        <!-- title -->
        <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h3>

        <!-- category container -->
        <div class="blog--article__category">
            <!-- date -->
            <time> <?php the_time('d M Y'); ?></time>

            <!-- category -->
            <?php
                $cat = get_the_category();
                $sep = ', ';
                $output = '';
                //
                if ($cat) {
                    foreach ($cat as $category){
                        $output .= '<a href=" ' . get_category_link( $category->term_id ) . ' ">' . $category->cat_name . '</a>' . $sep;
                        }
                    echo trim($output, $sep);
                    }
            ?>
        </div> <!-- // category container -->

        <!-- Featured Image -->
        <div class="featuredimage--container">
            <?php the_post_thumbnail(); ?>
        </div>


        <!-- content -->
        <?php
            if ( is_home() || is_archive() || is_search() ) {
                the_excerpt();
                }
            else {
                the_content();
                }
            ?>
    </article>

<?php endwhile; ?>
<?php endif; ?>
