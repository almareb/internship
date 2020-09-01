<?php 
	// add styles
	add_action('wp_enqueue_scripts','styles');
		function styles(){
			wp_enqueue_style('reset',get_template_directory_uri().'/assets/css/reset.css');
            wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css');
            wp_enqueue_style('fonts',get_template_directory_uri().'/assets/css/fonts.css');
			wp_enqueue_style('reponsive',get_template_directory_uri().'/assets/css/responsive.css');
        }
        
    // load scripts
    add_action('wp_footer','scripts');
    function scripts(){
        wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/code.js');
    }

    // register header nav menu
	add_action('after_setup_theme','header_nav_menu');
    function header_nav_menu(){
        register_nav_menu('primary','header_nav');
    }

    // register widgets for sidebar
	add_action('widgets_init', 'sidebar_widgets');
    function sidebar_widgets(){
        register_sidebar(array(
            'name' => 'sidebar',
            'id' => 'right_sidebar',
            'before_widget' => '<div class=widget %2$s>',
            'after_widget' => '</div>',
        ));
    }

    // add thumbnail, title and format to the post
	add_action('after_setup_theme','add_support');
    function add_support(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails', array('post', 'photo'));
    }

    // register new post type
    add_action( 'init', 'register_post_types' );
    function register_post_types(){
        register_post_type( 'photo', [
            'label'  => null,
            'labels' => [
                'name'               => 'Photo',
                'singular_name'      => 'Photo',
                'add_new'            => 'Add Photo',
                'add_new_item'       => 'Add Photo',
                'edit_item'          => 'Edit Photo',
                'new_item'           => 'New Photo',
                'view_item'          => 'View Photo',
                'search_items'       => 'Find Photo',
                'not_found'          => 'Not found',
                'not_found_in_trash' => 'Not found in trash',
                'parent_item_colon'  => '',
                'menu_name'          => 'Photo',
                'attributes'         => 'Page Attributes'
            ],
            'description'         => 'Our works',
            'public'              => true,
            'show_in_menu'        => true,
            'menu_position'       => 4,
            'menu_icon'           => 'dashicons-format-image',
            'hierarchical'        => True,
            'supports'            => [ 'title', 'editor', 'thumbnail'],
            'taxonomies'          => [''],
            'has_archive'         => false,
            'rewrite'             => true,
            'query_var'           => true,
    
        ] );
    }

    // shortcode for contact
    add_shortcode('location','loc_function');
        function loc_function(){
            return "Georgia, Tbilisi";
        }
    
    add_shortcode('number','num_function');
    function num_function(){
        return "Phone: +995 322 00 00 00";
    }

    add_shortcode('mail','mail_function');
    function mail_function(){
        return "Email: info@gmail.com";
    }    

    // add 'see more'
	add_filter('excerpt_more', 'see_more');
    function see_more($more){
        global $read;
        return '<a href="'.get_permalink($read).'">    Waikitxe meti!</a>';
    }
    
    




















 ?>