<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$settings           = array(
  'menu_title'      => __('Mr:: Theme Options','mr'),
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'Developed By:CodexCoder',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();




//================================================================================================
//------------------------------------------------------------------------------------------------
// Custom Option For Mr /*Banner Settings*/
//------------------------------------------------------------------------------------------------
//================================================================================================

$options[]   = array(
  'name'     => 'banner_section',
  'title'    => 'Banner',
  'icon'     => 'fa fa-user',
  'fields'   => array(

    array(
      'id'    => 'banner_subtitle',
      'type'    => 'text',
      'title'   => 'Banner Subtitle',
    ),
	array(
      'id'    => 'banner_title',
      'type'    => 'text',
      'title'   => 'Banner Title',
    ),
	
	array(
      'id'    => 'banner_icon1',
      'type'    => 'text',
      'title'   => 'Facebook',
    ),
	array(
      'id'    => 'banner_icon2',
      'type'    => 'text',
      'title'   => 'Twitter',
    ),
	array(
      'id'    => 'banner_icon3',
      'type'    => 'text',
      'title'   => 'Linkedin',
    ),
	array(
      'id'    => 'banner_icon4',
      'type'    => 'text',
      'title'   => 'Pinterest',
    ),
	array(
      'id'    => 'banner_icon5',
      'type'    => 'text',
      'title'   => 'Instagram',
    ),
	
	array(
      'id'    => 'banner_bg',
      'type'    => 'image',
      'title'   => 'Banner Background Image',
    ),
  )
);





//-----------------------------
// About Section
//-----------------------------
$options[]   = array(
  'name'     => 'about_section',
  'title'    => 'About',
  'icon'     => 'fa fa-wrench',
  'fields'   => array(

    array(
      'id'    => 'about_title',
      'type'    => 'text',
      'title'   => 'About Title',
    ),
	array(
      'id'    => 'about_subtitle',
      'type'    => 'text',
      'title'   => 'About Sub Title',
    ),
	array(
      'id'    => 'about_image_left',
      'type'    => 'image',
      'title'   => 'About Left Image',
    ),
	
	array(
      'id'    => 'about_desc',
      'type'    => 'wysiwyg',
      'title'   => 'About Content',
    ),
	
	array(
      'id'    => 'name',
      'type'    => 'text',
      'title'   => 'Name:',
    ),
	array(
      'id'    => 'age',
      'type'    => 'text',
      'title'   => 'Age:',
    ),
	array(
      'id'    => 'phone',
      'type'    => 'text',
      'title'   => 'Phone:',
    ),
	array(
      'id'    => 'email',
      'type'    => 'text',
      'title'   => 'Email:',
    ),
	array(
      'id'    => 'web',
      'type'    => 'text',
      'title'   => 'Web:',
    ),
	array(
      'id'    => 'address',
      'type'    => 'textarea',
      'title'   => 'Address:',
    ),
	array(
      'id'    => 'button_text',
      'type'    => 'text',
      'title'   => 'Button Text:',
    ),
	array(
      'id'    => 'button_url',
      'type'    => 'text',
      'title'   => 'Button URL:',
    ),
	
	
  )
);




//-----------------------------
// Counter Section
//-----------------------------
$options[]   = array(
  'name'     => 'counter_section',
  'title'    => 'Counter',
  'icon'     => 'fa fa-wrench',
  'fields'   => array(

		array(
		  'id'        => 'counter_elements',
		  'type'      => 'group',
		  'title'     => 'Group',
		  'button_title' => 'Add New',
		  'fields'    => array(
			array(
			  'id'    => 'conter_icon',
			  'type'  => 'icon',
			  'title' => 'Counter Icon',
			),
			array(
			  'id'    => 'conter_text',
			  'type'  => 'text',
			  'title' => 'Counter Text',
			),
			array(
			  'id'    => 'conter_content',
			  'type'  => 'text',
			  'title' => 'Counter Content',
			),
			array(
			  'id'    => 'counter_bg',
			  'type'  => 'color_picker',
			  'title' => 'Counter Background Color',
			),
		  ),
		),
	
	
  )
);


//-----------------------------
// Counter Section
//-----------------------------
$options[]   = array(
  'name'     => 'skill_section',
  'title'    => 'Skill',
  'icon'     => 'fa fa-html5',
  'fields'   => array(

		array(
		  'id'        => 'skill_elements',
		  'type'      => 'group',
		  'title'     => 'Group',
		  'button_title' => 'Add New Skill',
		  'fields'    => array(
			array(
			  'id'    => 'skill_title',
			  'type'  => 'text',
			  'title' => 'Skill Name',
			),
			array(
			  'id'    => 'skill_percent',
			  'type'  => 'text',
			  'title' => 'Skill Percentage',
			),
			array(
			  'id'    => 'skill_color',
			  'type'  => 'color_picker',
			  'title' => 'Skill Percentage Color',
			),
		  ),
		),
	
	
  )
);


//-----------------------------
// Testimonial Section
//-----------------------------
$options[]   = array(
  'name'     => 'testimonial_section',
  'title'    => 'Testimonial',
  'icon'     => 'fa fa-star',
  'fields'   => array(
		array(
			  'id'    => 'testi_title',
			  'type'  => 'text',
			  'title' => 'Testimonial Title',
			),
			array(
			  'id'    => 'testi_subtitle',
			  'type'  => 'text',
			  'title' => 'Testimonial Subtitle',
			),

		array(
		  'id'        => 'testi_elements',
		  'type'      => 'group',
		  'title'     => 'Group',
		  'button_title' => 'Add New testimonial',
		  'fields'    => array(
			array(
			  'id'    => 'testi_image',
			  'type'  => 'image',
			  'title' => 'Client Image',
			),
			array(
			  'id'    => 'testi_content',
			  'type'  => 'textarea',
			  'title' => 'Review Content',
			),
			array(
			  'id'    => 'client_name',
			  'type'  => 'text',
			  'title' => 'Client Name',
			),
			array(
			  'id'    => 'client_desig',
			  'type'  => 'text',
			  'title' => 'Client Designation',
			),
		  ),
		),
	
	
  )
);
// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => __('You can save your current options. Download a Backup and Import.','mr'),
    ),

    array(
      'type'    => 'backup',
    ),

  )
);










CSFramework::instance( $settings, $options );
