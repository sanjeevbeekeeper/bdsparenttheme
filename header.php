<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<!-- talk to us background color. -->
<?php
    if( is_page(14) ):
        $bgcolor = array('primary-color');
    else:
        $bgcolor = array();
    endif;
    ?>

<body <?php body_class($bgcolor); ?>>
    <!-- container fluid starts -->
    <div class="container-fluid">
        <header class="text-center nogutter primary-color">
            <div class="container">

                <!-- Navbar -->
                <nav class="navbar navbar-default header-navmenu">
                    <div class="container-fluid nogutter">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand hidden-sm" href="<?php bloginfo('url'); ?>">
                                <img class="headerlogo-home" src="<?php bloginfo('template_directory'); ?>/resources/logo/headerlogo-home.png" alt="">
                            </a>
                            <a class="navbar-brand visible-sm" href="<?php bloginfo('url'); ?>">
                                <img class="headerlogo-home-xs" src="<?php bloginfo('template_directory'); ?>/resources/logo/headerlogo-home-xs.png" alt="">
                            </a>
                        </div>

                        <!-- Bootstrap navwalker classes -->
                        <div class="header-navmenu">
                            <?php
                                wp_nav_menu( array(
                                    'menu'              => 'primary-menu',
                                    'theme_location'    => 'primary',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                    'menu_class'        => 'nav navbar-nav navbar-right',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                                    );
                                    ?>
                        </div>
                    </div><!-- // container-fluid -->
                </nav>

                <!-- Banner -->
                <section class="banner">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">

                            <!-- Home page -->
                            <?php if(is_page(6)) { ?>
                                <h1> <?php bloginfo('description'); ?> </h1>
                                <p>
                                    We create a Design Standard that Builds Awareness, improves credibility, sales and leads; enhances customer experience and reduce costs.
                                </p>
                            <?php } ?>

                            <!-- Services -->
                            <?php if( is_page(33) || is_page(35) || is_page(37)) { ?>
                                <h1> Services </h1>
                            <?php } ?>

                            <!-- About -->
                            <?php if(is_page(12)) { ?>
                                <h1> About </h1>
                            <?php } ?>

                            <!-- Blog -->
                            <?php if(is_home() || is_category() || is_single() ) { ?>
                                <h1> Blog </h1>
                            <?php } ?>

                            <!-- 404 Error -->
                            <?php if( is_404() ) { ?>
                                <h1> 404 Error </h1>
                            <?php } ?>

                            <!-- Contact -->
                            <?php if(is_page(29)) { ?>
                                <h1> Contact </h1>
                            <?php } ?>

                            <!-- Talk to us -->
                            <?php if(is_page(14)) { ?>
                                <h1> Talk to Us </h1>
                            <?php } ?>

                            <!-- Search -->
                            <?php if(is_search() ) { ?>
                                <h1> Search </h1>
                            <?php } ?>

                        </div>
                    </div>
                </section>

            </div> <!-- // container -->
        </header> <!-- // header -->
