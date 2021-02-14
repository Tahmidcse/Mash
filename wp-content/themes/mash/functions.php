<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

include_once('inc/portfolio-shortcode.php');
include_once('inc\wp_bootstrap_navwalker.php');
require get_template_directory(). '/tgm-plugins-activation/class-tgm-plugin-activation.php';
require get_template_directory(). '/tgm-plugins-activation/tgm-plugins.php';
require get_template_directory(). '/inc/theme-functions.php';


//Enqueues scripts and styles

function mash_scripts(){

	//Theme stylesheet.
	wp_enqueue_style('mash-style',get_stylesheet_uri() );
	wp_enqueue_style('custom-css',get_template_directory_uri().'/assets/css/custom.css');
	wp_enqueue_style('swiper',get_template_directory_uri().'/assets/css/swiper.min.css');
	wp_enqueue_style('lightcase',get_template_directory_uri().'/assets/css/lightcase.css');
	// <!-- Animate -->
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('main-style',get_template_directory_uri().'/assets/css/style.css');

	wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css');





	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.js', array('jquery'), null, true );
	wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'masonry-js', get_template_directory_uri() . '/assets/js/isotope.masonry.js', array('jquery'), null, true );
	wp_enqueue_script( 'lightcase-js', get_template_directory_uri() . '/assets/js/lightcase.js', array('jquery'), null, true );
	wp_enqueue_script( 'swiper-jquery-js', get_template_directory_uri() . '/assets/js/swiper.jquery.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'google-js', get_template_directory_uri() . '/assets/js/google-map.js', array('jquery'), null, true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true );

}

add_action('wp_enqueue_scripts', 'mash_scripts');

//register menu
register_nav_menus(array(
	'header_menu'=>'Header Menu',
	'footer_menu'=>'Footer Menu',

));



//register sidebar
register_sidebar(array(

	'name' => __('Main Sidebar','textdomain'),
	'id' => 'sidebar-1',
	'description' => __('Widgets is this area will be shown on all posts and pages.', 'textdomain'),
	// 'before_widget' => '<li id="1$s" class="widget %2$s">',
	'before_widget' => '<div class="blogpage-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widgettitle">',
	'after-title' => '</h2>',


));

//creating the widget
class mash_widget_one extends WP_Widget{
function __construct(){

	parent::__construct(
	'mash_widget_one',
	__('Mash::: Widget one', 'mash'),
	array('description' => __('This is widget one for mash','mash'),)
	);

}
function form($instance){
			$title = $instance['title'];
			$limit = $instance['limit'];
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title');?>"><?php esc_html_e('Title:','mash');?></label>
			<input id="<?php echo $this->get_field_id('title');?>" class="widefat" name="<?php echo $this->get_field_name('title');?>" value="<?php echo esc_attr($title);?>" type="text">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('limit');?>"><?php esc_html_e('Limit:','mash');?></label>
			<input id="<?php echo $this->get_field_id('limit');?>" class="widefat" name="<?php echo $this->get_field_name('limit');?>" value="<?php echo esc_attr($limit);?>" type="number">
		</p>
		<?php

	}
	function widget($args,$instance){
		$title=$instance['title'];
		$limit=$instance['limit'];
	?>
		<div class="blogpage-widget">
		    <div class="widget-heading">
		        <h5><?php echo $title;?></h5>
		    </div>
		    <div class="widget-content">
		    	<?php

		    		$rpost = new WP_Query(array(

		    			'post_type' => 'post',
		    			'posts_per_page' =>$limit
		    		));

		    	 if($rpost->have_posts()):while($rpost ->have_posts()): $rpost->the_post();?>
		        <div class="widget-post-thumb">
		            <div class="widget-thumb">
		                <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?> <alt="widget"></a>
		            </div>
		            <div class="widget-post">
		                <a href="<?php the_permalink();?>"><p><?php the_title();?></p></a>
		                 <ul class="post-meta">
		                    <li><i class="fa fa-clock-o"></i><?php the_time('d M Y');?></li>
		                </ul>
		            </div>
		        </div>
		        <?php endwhile;endif;?>
		    </div>
		</div>

		<?php
	}
}

function our_load_widget(){
	register_widget('mash_widget_one');
}
add_action('widgets_init','our_load_widget');


// comment form
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom');

// Add placeholder for Name and Email
function modify_comment_form_fields($fields){
    $fields['author'] = '<p class="comment-form-author">' . '<input id="author" placeholder="Your Name *" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                '<label for="author">' . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' )  .
                '</p>';
    $fields['email'] = '<p class="comment-form-email">' . '<input id="email" placeholder="your-real-email@example.com *" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />'  .
                '<label for="email">'  . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' )
                 .
                '</p>';
    $fields['url'] = '<p class="comment-form-url">' .
             '<input id="url" name="url" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
            '<label for="url">' . '</label>' .
               '</p>';

    return $fields;
}
add_filter('comment_form_default_fields','modify_comment_form_fields');
/**
* Comment Form Placeholder Comment Field
 */
 function placeholder_comment_form_field($fields) {
    $replace_comment = __('Your Comment', 'mash');

    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' .
    '</label><textarea id="comment" name="comment" cols="100" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';

    return $fields;
 }
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field' );
