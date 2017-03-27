<!--
# Used in
# index.php
# archive.php
# search.php
# single.php
-->

<article class="blog--article">
    <?php
        // only for single page
        if ( is_single() ) { ?>
            <h3 class="blog_single">
                <?php the_title(); ?>
            </h3>
        <?php
            }
        // for other pages (blog main page)
        else {
            ?>
            <a class="blog--article__title-date" href="<?php the_permalink(); ?>">
                <h3>
                    <div class="truncate"><?php the_title(); ?></div>
                    <time> <?php the_time('d M Y'); ?></time>
                </h3>
            </a>
            <?php }
        ?>


    <!-- content -->
    <?php
        if ( is_home() || is_archive() || is_search() ) {
            // the_excerpt();
            }
        else { ?>
            <div class="blog_para">
                <?php the_content(); ?>
            </div>
            <?php }
        ?>
</article>
