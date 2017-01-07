<?php
	// Boostrap Styles and Scripts. 22 dec 2016
	function bootstrap_style_script() {

		// Order no: 1/3
		// bootstrap script
		wp_enqueue_script(
			'bootstrap-script',
			get_template_directory_uri() . '/lib/vendor/bootstrap/js/bootstrap.min.js',
			array('jquery'),
			'3.3.4',
			true
			);

		// jQuery is removed 2/3

		// Order no: 3/3
		// bootstrap style
		wp_enqueue_style(
			'bootstrap-style',
			get_stylesheet_directory_uri() . '/lib/vendor/bootstrap/css/bootstrap.min.css',
			array(),
			'3.3.4',
			'all'
			);

		}
	add_action( 'wp_enqueue_scripts', 'bootstrap_style_script' );

/* ================================================
	PLUGIN: bootstrap_navwalker.php - 22 dec 2016
=================================================== */
	// Register Custom Navigation Walker.
    require_once('wp_bootstrap_navwalker.php');
    // Register Nav Menu
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'studiowebsite' ),
        'footer-menu' => __( 'Footer Menu', 'studiowebsite' ),
	));

/* ================================================
	DASHBOARD: Disable the visual editor
=================================================== */
	add_filter('user_can_richedit' , create_function('' , 'return false;') , 50);

/* ================================================
	Post format - 22 dec 2016
=================================================== */
	function BeekeeperDesignStudio_setup() {
		add_theme_support('post-formats', array('aside', 'link'));
		}
	add_action('after_setup_theme', 'BeekeeperDesignStudio_setup');

/* ================================================
	Navbar children menu
=================================================== */
	// get top ancestor iD for the services children. 23 dec 2016
	function get_top_ancestor_id() {
		// make the variable available globally
		global $post;
		// return the id of the top ancestor page relative to the current page.
		if ($post->post_parent){
			$ancestors = array_reverse(get_post_ancestors($post->ID));
			// return only the first value [0]
			return $ancestors[0];
			}

		//	if the current page does not have a parent page, return the id.
		return $post->ID;
		}

/* ================================================
	Widgets
=================================================== */
	// Widget -- blog ribbon --
	function beekeeperDesignStudio_widget(){
		register_sidebar(array(
			'name' 			=> 'Blog Ribbon',
			'id' 			=> 'blog-ribbon',
			'class' 		=> 'outline',
			'description' 	=> 'Standard sidebar',
			'before_widget' => '<div class="widget--dropdown">',
			'after_widget' 	=> '</div>',
			));
		}
	add_action ('widgets_init', 'beekeeperDesignStudio_widget');

	// Hide Widget title
	function beekeeperDesignStudio_widget_title($t) {
    	return null;
		}
	add_filter('widget_title','beekeeperDesignStudio_widget_title');

/* ================================================
	Custom excerpt
=================================================== */
	function BeekeeperDesignStudio_excerpt($more) {
	    global $post;
	    	return '<div><a class="btn btn-default" href=" '. get_permalink($post->ID) . '"> Read more </a></div>';
		}
	add_filter('excerpt_more', 'BeekeeperDesignStudio_excerpt');


/* =================================================
    Activate: Featured image
==================================================== */
	add_theme_support( 'post-thumbnails' );

?>
