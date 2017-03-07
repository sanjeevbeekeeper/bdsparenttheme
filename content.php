<!--
# Used in
# index.php
# archive.php
# search.php
# single.php
-->
<article class="blog--article">

    <a class="blog--article__title-date" href="<?php the_permalink(); ?>">
        <h3>
            <div class="truncate"><?php the_title(); ?></div>
            <time> <?php the_time('d M Y'); ?></time>
        </h3>
    </a>

    <!-- content -->
    <?php
        if ( is_home() || is_archive() || is_search() ) {
            // the_excerpt();
            }
        else {
            the_content();
            }
        ?>
</article>
