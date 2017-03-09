</div>
<footer class="text-center">
    <?php
    if (is_page ('talk-to-us')) { ?>
        <div class="footer_container_talktous">
    <?php    }
    else { ?>
        <div class="footer_container">
        <?php }
     ?>

        <?php
        if (is_page ('talk-to-us')) { ?>
            <div>
                <img class="footerlogo-home" src="<?php bloginfo('template_directory'); ?>/resources/logo/footerlogo-white.png" alt="">
            </div>

            <!-- // footer menu -->
            <div class="footer-navmenu footer-navmenu-talk-to-us">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'footer-menu',
                        'theme_location'    => 'footer',
                        'depth'             => 2,
                        'container'         => 'nav',
                        'container_class'   => 'footer-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                        );
                ?>
            </div> <!-- // footer-navmenu -->

            <!-- social icons -->
            <div class="social-icons">
                <a href="https://twitter.com/BeekeeperStudio" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/resources/socialicons/twitter-white.png" alt="Beekeeper on Twitter">
                </a>
                <a href="https://www.behance.net/beekeeperstudio" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/resources/socialicons/behance-white.png" alt="Beekeeper on Behance">
                </a>
            </div>

            <!-- copyright info -->
            <div class="copyright-info">
                <small style="color: white;"> Copyright &copy; 2015-<?php echo date('Y'); ?> <?php bloginfo('name'); ?> </small>
            </div>
        <?php }

        // else - other pages
        else { ?>
            <div class="">
                <img class="footerlogo-home" src="<?php bloginfo('template_directory'); ?>/resources/logo/footerlogo-blue.png" alt="">
            </div>

            <!-- // footer menu -->
            <div class="footer-navmenu" style="color: #fff;">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'footer-menu',
                        'theme_location'    => 'footer',
                        'depth'             => 2,
                        'container'         => 'nav',
                        'container_class'   => 'footer-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                        );
                ?>
            </div> <!-- // footer-navmenu -->

            <!-- social icons -->
            <div class="social-icons">
                <a href="https://twitter.com/BeekeeperStudio" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/resources/socialicons/twitter-blue.png" alt="Beekeeper on Twitter">
                </a>
                <a href="https://www.behance.net/beekeeperstudio" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/resources/socialicons/behance-blue.png" alt="Beekeeper on Behance">
                </a>
            </div>

            <!-- copyright info -->
            <div class="copyright-info">
                <small> Copyright &copy; 2015-<?php echo date('Y'); ?> <?php bloginfo('name'); ?> </small>
            </div>
        <?php } ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
