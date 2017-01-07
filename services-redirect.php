<?php
/**
* Template Name: Redirect to RWD
* on: 23 dec 2016
* Purpose: Service page (parent) redirect to its first child.
* Notes: This template is used to redirect the Services page to Responsive Web Design page. By default the code below redirect to the first child.
*/
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $redirect = get_pages("child_of=".$post->ID."&sort_column=menu_order");
            $firstchild = $redirect[0];
            wp_redirect(get_permalink($firstchild->ID));
            }
        }
?>
