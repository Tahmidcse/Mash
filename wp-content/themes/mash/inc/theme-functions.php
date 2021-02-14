<?php
/**
 * Pricing Table Post Type
 */

if( ! class_exists( 'Mash_Pricing_Plan' ) ) :
class Mash_Pricing_Plan {
	public static $post_type 		= 'pricing';
	public static $menu_position	= 7;
    public static $taxonomy 		= 'pricing_category';

	public static function register() {

		// Title
		$labels = array(
			'name'					=> esc_html__( 'Pricing Plans', 'Mash' ),
			'singular_name'			=> esc_html__( 'Pricing', 'Mash' ),
			'add_new'				=> esc_html__( 'Add New', 'Mash' ),
			'add_new_item'			=> esc_html__( 'Add New pricing', 'Mash' ),
			'edit_item'				=> esc_html__( 'Edit pricing', 'Mash' ),
			'new_item'				=> esc_html__( 'New pricing', 'Mash' ),
			'view_item'				=> esc_html__( 'View pricing', 'Mash' ),
			'search_items'			=> esc_html__( 'Search pricing', 'Mash' ),
			'not_found'				=> esc_html__( 'No pricing found', 'Mash' ),
			'not_found_in_trash'	=> esc_html__( 'No pricing found in trash', 'Mash' ),
			'parent_item_color'		=> '',
			'menu_name'				=> esc_html__( 'Pricing Plan', 'Mash' )
		);

		// Options
		$args = array(
			'labels'				=> $labels,
			'public'				=> false,
			'public_queryable'		=> true,
			'show_ui'				=> true,
			'show_in_menu'			=> true,
			'query_var'				=> true,
			'rewrite'				=> array( 'slug' => self::$post_type ),
			'capability_type'		=> 'post',
			'has_archive'			=> false,
			'hierarchical'			=> false,
			'menu_position'			=> self::$menu_position,
			'menu_icon'				=> 'dashicons-welcome-learn-more',
			'supports'				=> array( 'title')
		);

		$labels = apply_filters( 'presscore_post_type_' . self::$post_type . '_labels', $labels );
		$args = apply_filters( 'presscore_post_type_' . self::$post_type . '_args', $args );

		register_post_type( self::$post_type, $args );
		flush_rewrite_rules();

        /* setup taxonomy */

        // titles
        $texanomy_labels = array(
	        'name'             => esc_html__( 'Pricing Categories',        'Mash' ),
	        'singular_name'    => esc_html__( 'Pricing Category',          'Mash' ),
	        'all_items'        => esc_html__( 'Pricing Categories',        'Mash' ),
	        'parent_item'      => esc_html__( 'Parent Pricing Category',   'Mash' ),
	        'parent_item_colon'=> esc_html__( 'Parent Pricing Category:',  'Mash' ),
	        'edit_item'        => esc_html__( 'Edit Category',             'Mash' ),
	        'update_item'      => esc_html__( 'Update Category',           'Mash' ),
	        'add_new_item'     => esc_html__( 'Add New Pricing Category',  'Mash' ),
	        'new_item_name'    => esc_html__( 'New Pricing Name',          'Mash' ),
	        'menu_name'        => esc_html__( 'Pricing Categories',        'Mash' )
        );

        $taxonomy_args = array(
            'hierarchical'          => true,
            'public'                => true,
            'labels'                => $texanomy_labels,
            'show_ui'               => true,
            'rewrite'               => array('slug' => 'pricing_category'),
            'show_admin_column'	=> true,
        );

        $taxonomy_args = apply_filters( 'presscore_taxonomy_' . self::$taxonomy . '_args', $taxonomy_args );

        register_taxonomy( self::$taxonomy, array( self::$post_type ), $taxonomy_args );

	}
}
endif;

if( ! function_exists( 'Mash_Pricing_Plan' ) ) :
	function Mash_Pricing_Plan() {
		Mash_Pricing_Plan::register();
	}
endif;
add_action( 'init', 'Mash_Pricing_Plan', 10 );






/**
 * Team Member Post Type
 */

if( ! class_exists( 'Mash_Team_Member' ) ) :
class Mash_Team_Member {
	public static $post_type 		= 'team';
	public static $menu_position	= 7;
  public static $taxonomy 		= 'team_member';

	public static function register() {

		// Title
		$labels = array(
			'name'					=> esc_html__( 'Team Members', 'Mash' ),
			'singular_name'			=> esc_html__( 'Team Member', 'Mash' ),
			'add_new'				=> esc_html__( 'Add New', 'Mash' ),
			'add_new_item'			=> esc_html__( 'Add New team member', 'Mash' ),
			'edit_item'				=> esc_html__( 'Edit team member', 'Mash' ),
			'new_item'				=> esc_html__( 'New team member', 'Mash' ),
			'view_item'				=> esc_html__( 'View team member', 'Mash' ),
			'search_items'			=> esc_html__( 'Search team member', 'Mash' ),
			'not_found'				=> esc_html__( 'No team member found', 'Mash' ),
			'not_found_in_trash'	=> esc_html__( 'No team member found in trash', 'Mash' ),
			'parent_item_color'		=> '',
			'menu_name'				=> esc_html__( 'Team Member', 'Mash' )
		);

		// Options
		$args = array(
			'labels'				=> $labels,
			'public'				=> false,
			'public_queryable'		=> true,
			'show_ui'				=> true,
			'show_in_menu'			=> true,
			'query_var'				=> true,
			'rewrite'				=> array( 'slug' => self::$post_type ),
			'capability_type'		=> 'post',
			'has_archive'			=> false,
			'hierarchical'			=> false,
			'menu_position'			=> self::$menu_position,
			'menu_icon'				=> 'dashicons-welcome-learn-more',
			'supports'				=> array( 'thumbnail')
		);

		$labels = apply_filters( 'presscore_post_type_' . self::$post_type . '_labels', $labels );
		$args = apply_filters( 'presscore_post_type_' . self::$post_type . '_args', $args );

		register_post_type( self::$post_type, $args );
		flush_rewrite_rules();

        /* setup taxonomy */

        // titles
        $texanomy_labels = array(
	        'name'             => esc_html__( 'Team Members',        'Mash' ),
	        'singular_name'    => esc_html__( 'Team Member',          'Mash' ),
	        'all_items'        => esc_html__( 'Team Members',        'Mash' ),
	        'parent_item'      => esc_html__( 'Parent Team Member',   'Mash' ),
	        'parent_item_colon'=> esc_html__( 'Parent Team Member:',  'Mash' ),
	        'edit_item'        => esc_html__( 'Edit Member',          'Mash' ),
	        'update_item'      => esc_html__( 'Update Member',        'Mash' ),
	        'add_new_item'     => esc_html__( 'Add New Team Member',  'Mash' ),
	        'new_item_name'    => esc_html__( 'New Member Name',      'Mash' ),
	        'menu_name'        => esc_html__( 'Team Members',        'Mash' )
        );

        $taxonomy_args = array(
            'hierarchical'          => true,
            'public'                => true,
            'labels'                => $texanomy_labels,
            'show_ui'               => true,
            'rewrite'               => array('slug' => 'team_member'),
            'show_admin_column'	=> true,
        );

        $taxonomy_args = apply_filters( 'presscore_taxonomy_' . self::$taxonomy . '_args', $taxonomy_args );

        register_taxonomy( self::$taxonomy, array( self::$post_type ), $taxonomy_args );

	}
}
endif;

if( ! function_exists( 'Mash_Team_Member' ) ) :
	function Mash_Team_Member() {
		Mash_Team_Member::register();
	}
endif;
add_action( 'init', 'Mash_Team_Member', 10 );


/**
 * Protfolio Section  Post Type
 */

 # Register Custom Post
function mash_protfolio_post() {
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Portfolio' ),
                'edit_item' => __( 'Edit Portfolio' ),
                'new_item' => __( 'New Portfolio' ),
                'view_item' => __('portfolio'),
                'not_found' => __( 'Sorry, we couldnt find the Portfolio you are looking for.' )
            ),
        'public' => true,
				'menu_position' => 2,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'hierarchical' => false,
        'capability_type' => 'page',
        'rewrite' => array( 'slug' => 'portfolio' ),
        'supports' => array( 'title', 'editor', 'custom-fields','thumbnail')
        )
    );
}
add_action( 'init', 'mash_protfolio_post' );


# Register Custom Taxonomy For Portfolio

function mash_post_taxonomy() {
    register_taxonomy(
        'portfolio_category',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'portfolio',                  //post type name
        array(
            'hierarchical'          => true,
            'label'                 => 'Portfolio Category',  //Display name
            'query_var'             => true,
            'show_admin_column'     => true,
            'rewrite'               => array(
            'slug'                  => 'portfolio-category', // This controls the base slug that will display before each term
            'with_front'            => true // Don't display the category base before
                )
            )
    );
}
add_action( 'init', 'mash_post_taxonomy');
