<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Page Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_hh_custom_page_options',
  'title'     => esc_html__('Custom Page Options', 'heaven-hands'),
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
        'name'  => 'page_header',
        'icon'  => 'fa fa-eye',
        'fields' => array(
            array(
                'id'    => 'hh_custom_page_settings',
                'type'  => 'switcher',
                'title' => __('Custom Page Settings', 'heaven-hands'),
                'label' => __('if you want custom settings for this page please switch "on" to this button','heaven-hands'),
                'default' => false
            ),
            array(
                'id'         => 'hh_header_style',
                'type'       => 'radio',
                'title'      => esc_html__('Header Style', 'heaven-hands'),
                'class'      => 'horizontal',
                'options'    => array(
                    '1'    => esc_html__('Header 1', 'heaven-hands'),
                    '2'    => esc_html__('Header 2', 'heaven-hands'),
                    '3'    => esc_html__('Header 3', 'heaven-hands'),                    
                    '4'    => esc_html__('Header 4', 'heaven-hands'),                    
                ),
                'default'    => '1',
                'dependency' => array( 'hh_custom_page_settings', '==', 'true' ),                
            ),  
            array(
                'id'    => 'hh_is_page_header',
                'type'  => 'switcher',
                'title' => esc_html__('Page Header', 'heaven-hands'),
                'label' => esc_html__('If you want to disable page header for this page switch "off" to this button', 'heaven-hands'),
                'default' => true,
                'dependency' => array( 'hh_custom_page_settings', '==', 'true' ),
            ),
            array(
                'id'    => 'hh_page_header_bg',
                'type'  => 'upload',
                'title' => esc_html__('Page Header Background', 'heaven-hands'),
                'dependency' => array( 'hh_custom_page_settings|hh_is_page_header', '==|==', 'true|true' ),
            ),
			
			
			array(
				'id'    => 'hh_is_slider',
				'type'  => 'switcher',
				'title' => esc_html__('Slider on/off', 'heaven-hands'),
				'label' => esc_html__('If you want to disable slider for this page switch "off" to this button', 'heaven-hands'),
				'default' => true
			),
			
            array(
                'id'         => 'hh_slider_style',
                'type'       => 'radio',
                'title'      => esc_html__('Slider Style', 'heaven-hands'),
                'class'      => 'horizontal',
                'options'    => array(
                    '1'    	 => esc_html__('Slider One', 'heaven-hands'),
                    '2'    => esc_html__('Slider Two', 'heaven-hands'),                    
                    '3'    => esc_html__('Slider Three', 'heaven-hands'),                    
                ),
                'default'    => '1',
                'dependency' => array( 'hh_custom_page_settings', '==', 'true' ),                
            ),
			  array(
            'id'         => 'hh_footer_style',
            'type'       => 'radio',
            'title'      => esc_html__('Footer Style', 'heaven-hands'),
            'class'      => 'horizontal',
            'options'    => array(
                '1'    => esc_html__('Footer Style 1', 'heaven-hands'),
                '2'    => esc_html__('Footer Style 2', 'heaven-hands'),
            ),
            'default' => cs_get_option('hh_footer_style'),
        ),
			
            
        ),
    ),
    // end: a section
    
  ),
);


// -----------------------------------------
// Testimonial Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_hh_custom_testimonial_options',
  'title'     => esc_html__('Custom Post Options', 'heaven-hands'),  
  'post_type' => 'testimonial',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
      'name'  => 'client',
      'icon'  => 'fa fa-eye',
      'fields' => array(
        array(
          'id'      => 'hh_client_image',
          'type'    => 'upload',
          'title'   => esc_html__('Client Image (recommended size 150*150)', 'heaven-hands'),          
        ),          

      ),
    ),
    // end: a section
    
  ),
);


// -----------------------------------------
// Volunteer Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_hh_custom_volunteer_options',
  'title'     => esc_html__('Volunteer Info', 'heaven-hands'),
  'post_type' => 'volunteer',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(    
    // begin: a section
    array(
      'name'  => 'volunteer_contact_info',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(
        array(
          'id'    => 'hh_volunteer_designation',
          'type'  => 'text',
          'title' => esc_html__('Designation', 'heaven-hands'),
        ),
        array(
          'id'    => 'hh_volunteer_facebook',
          'type'  => 'text',
          'title' => esc_html__('Facebook', 'heaven-hands'),
        ),
        array(
          'id'    => 'hh_volunteer_twitter',
          'type'  => 'text',
          'title' => esc_html__('Twitter', 'heaven-hands'),
        ),
        array(
          'id'    => 'hh_volunteer_google',
          'type'  => 'text',
          'title' => esc_html__('Google Plus', 'heaven-hands'),
        ),
        array(
          'id'    => 'hh_volunteer_instagram',
          'type'  => 'text',
          'title' => esc_html__('Instagram', 'heaven-hands'),
        ),
        array(
          'id'    => 'hh_volunteer_behance',
          'type'  => 'text',
          'title' => esc_html__('Behance', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_volunteer_address',
          'type'  => 'text',
          'title' => esc_html__('Volunteer Address', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_volunteer_phone',
          'type'  => 'text',
          'title' => esc_html__('Volunteer Phone', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_volunteer_email',
          'type'  => 'text',
          'title' => esc_html__('Volunteer Email', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_volunteer_website',
          'type'  => 'text',
          'title' => esc_html__('Volunteer Website', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_volunteer_statement_title',
          'type'  => 'text',
          'title' => esc_html__('Volunteer Statement Title', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_volunteer_statement',
          'type'  => 'textarea',
          'title' => esc_html__('Volunteer Statement', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_volunteer_experties',
          'type'  => 'text',
          'title' => esc_html__('Expertness Text', 'heaven-hands'),
        ),
		
		array(
            'id'                => 'hh_volunteer_skills',
            'type'              => 'group',
            'title'             => esc_html__('Volunteer\'s Skills', 'heaven-hands'),
            'button_title'      => esc_html__('Add New', 'heaven-hands'),
            'accordian_title'   => esc_html__('Add new Volunteer', 'heaven-hands'),
            'fields'            => array(
                
                array(
                    'id'        => 'hh_skill_name',
                    'type'      => 'text',
                    'title'     => esc_html__('Add skill name:', 'heaven-hands'),
                ),
                array(
                    'id'        => 'hh_skill_value',
                    'type'      => 'number',
                    'title'     => esc_html__('Skill Value:', 'heaven-hands'),
                ),
               
			),
		), 
	  
	  array(
          'id'    => 'hh_volunteer_prize_text',
          'type'  => 'text',
          'title' => esc_html__('Prize Text', 'heaven-hands'),
        ),
		
		array(
            'id'                => 'hh_volunteer_prizes',
            'type'              => 'group',
            'title'             => esc_html__('Volunteer\'s Prize', 'heaven-hands'),
            'button_title'      => esc_html__('Add New', 'heaven-hands'),
            'accordian_title'   => esc_html__('Add new Prize', 'heaven-hands'),
            'fields'            => array(
                
                array(
                    'id'        => 'hh_prize_name',
                    'type'      => 'text',
                    'title'     => esc_html__('Add Prize Year:', 'heaven-hands'),
                ),
                array(
                    'id'        => 'hh_prize_image',
                    'type'      => 'upload',
                    'title'     => esc_html__('Prize Image:', 'heaven-hands'),
                ),
               
        ),
      ), // end: fields
	  
    ), // end: a section
    

  ),
),
);


// -----------------------------------------
// Events Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_hh_custom_events_options',
  'title'     => esc_html__('Events Info', 'heaven-hands'),
  'post_type' => 'events',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(    
    // begin: a section
    array(
      'name'  => 'events_info',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(
		
        array(
          'id'    => 'hh_event_creator',
          'type'  => 'text',
          'title' => esc_html__('Event Creator', 'heaven-hands'),
          'desc' => esc_html__('Write here event creator name', 'heaven-hands'),
        ),
        array(
          'id'    => 'hh_event_day',
          'type'  => 'text',
          'title' => esc_html__('Event Day', 'heaven-hands'),
		  'desc' => esc_html__('Write here event date as this format: 22', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_month_year',
          'type'  => 'text',
          'title' => esc_html__('Event Month & Year', 'heaven-hands'),
		  'desc' => esc_html__('Write here event Month & Year name as: December 2022', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_counter_title',
          'type'  => 'text',
          'title' => esc_html__('Event Day Counter Title', 'heaven-hands'),
		  'desc'  => esc_html__('Please write here your event counter title','heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_counter_title_two',
          'type'  => 'text',
          'title' => esc_html__('Event Day Counter Title Two', 'heaven-hands'),
		  'desc'  => esc_html__('Please write here your event counter title two which display when event finished','heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_day_counter',
          'type'  => 'text',
          'title' => esc_html__('Event Day Counter', 'heaven-hands'),
		  'desc'  => esc_html__('Please put your date as this format: 2018-01-11 00:00:00','heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_counter_message',
          'type'  => 'text',
          'title' => esc_html__('Event Day Counter Message When Time Finished', 'heaven-hands'),
		  'desc'  => esc_html__('Please write here your event counter message','heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_time',
          'type'  => 'text',
          'title' => esc_html__('Event Time', 'heaven-hands'),
		  'desc' => esc_html__('Write here event time as: 03:00pm - 05:00pm', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_start_date',
          'type'  => 'text',
          'title' => esc_html__('Event Start Date', 'heaven-hands'),
		  'desc' => esc_html__('Write here event start date as: 22 December 2017', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_end_date',
          'type'  => 'text',
          'title' => esc_html__('Event End Date', 'heaven-hands'),
		  'desc' => esc_html__('Write here event end date as:27 December 2017', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_location',
          'type'  => 'text',
          'title' => esc_html__('Event Location', 'heaven-hands'),
		  'desc' => esc_html__('Write here event location name.', 'heaven-hands'),
		  
        ),
		array(
          'id'    => 'hh_event_location_lat',
          'type'  => 'text',
          'title' => esc_html__('Event Location Latitude', 'heaven-hands'),
		  'desc' => esc_html__('Put here event location latitute', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_location_lon',
          'type'  => 'text',
          'title' => esc_html__('Event Location Longitude', 'heaven-hands'),
		  'desc' => esc_html__('Put here event location longitute', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_map_zoom',
          'type'  => 'text',
          'title' => esc_html__('Event Location Maps Zoom', 'heaven-hands'),
		  'desc' => esc_html__('Put here your maps zoom quantity', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_location_mapicon',
          'type'  => 'image',
          'title' => esc_html__('Event Location Map Icon', 'heaven-hands'),
		  'desc' => esc_html__('Put here event location map icon', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_invite_text',
          'type'  => 'text',
          'title' => esc_html__('Event Invite Text', 'heaven-hands'),
		  'desc' => esc_html__('Write here event button text', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_invite_url',
          'type'  => 'text',
          'title' => esc_html__('Event Invite URL', 'heaven-hands'),
		  'desc' => esc_html__('Put here event button url', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_register_text',
          'type'  => 'text',
          'title' => esc_html__('Event Register Text', 'heaven-hands'),
		  'desc' => esc_html__('Write here event register text', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_register_url',
          'type'  => 'text',
          'title' => esc_html__('Event Register URL', 'heaven-hands'),
		  'desc' => esc_html__('Put here event register url.', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_event_speakers_title',
          'type'  => 'text',
          'title' => esc_html__('Event Speakers Title', 'heaven-hands'),
		  'desc' => esc_html__('Write here event speakers title', 'heaven-hands'),
        ),
		
		array(
            'id'                => 'hh_event_speakers',
            'type'              => 'group',
            'title'             => esc_html__('Speakers\'s List', 'heaven-hands'),
            'button_title'      => esc_html__('Add New', 'heaven-hands'),
            'accordian_title'   => esc_html__('Add New Event Speakers', 'heaven-hands'),
			'desc' => esc_html__('Add here speakers information', 'heaven-hands'),
            'fields'            => array(
				 array(
                    'id'        => 'hh_event_speakers_name',
                    'type'      => 'text',
                    'title'     => esc_html__('Add Speakers Name:', 'heaven-hands'),
					'desc' => esc_html__('Write here event speakers name', 'heaven-hands'),
                ),
                 array(
                    'id'        => 'hh_event_speakers_image',
                    'type'      => 'upload',
                    'title'     => esc_html__('Add Speakers Image:', 'heaven-hands'),
					'desc' => esc_html__('Upload here event speakers image', 'heaven-hands'),
                ),
				
				
			),
		), 
    ), 
  ),
),
);



// -----------------------------------------
// Cause Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_hh_custom_cause_options',
  'title'     => esc_html__('Cause Info', 'heaven-hands'),
  'post_type' => 'cause',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(    
    // begin: a section
    array(
      'name'  => 'cause_info',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(
		    array(
          'id'    => 'hh_cause_hightlight_title',
          'type'  => 'text',
          'title' => esc_html__('Highlighted Title', 'heaven-hands'),
          'desc' => esc_html__('This is only for Cause style four.', 'heaven-hands'),
        ),
        array(
          'id'    => 'hh_cause_raise_currency_sign',
          'type'  => 'icon',
          'title' => esc_html__('Raise Currency Sign', 'heaven-hands'),
          'desc' => esc_html__('Put here cause raise currency sign', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_cause_raise',
          'type'  => 'text',
          'title' => esc_html__('Cause Raise', 'heaven-hands'),
          'desc' => esc_html__('Put here raise amount quantity', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_cause_goal_currency_sign',
          'type'  => 'icon',
          'title' => esc_html__('Goal Currency Sign', 'heaven-hands'),
          'desc' => esc_html__('Put here cause goal currency sign', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_cause_goal',
          'type'  => 'text',
          'title' => esc_html__('Cause Goal', 'heaven-hands'),
          'desc' => esc_html__('Put here Goal amount quantity', 'heaven-hands'),
        ),
        array(
          'id'    => 'hh_cause_start_day',
          'type'  => 'text',
          'title' => esc_html__('Cause Start Day', 'heaven-hands'),
		  'desc' => esc_html__('Write here cause start day as:2017-11-20', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_cause_end_day',
          'type'  => 'text',
          'title' => esc_html__('Cause End Day', 'heaven-hands'),
		  'desc' => esc_html__('Write here cause end day as:2017-11-20', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_cause_location',
          'type'  => 'text',
          'title' => esc_html__('Cause Location', 'heaven-hands'),
		  'desc' => esc_html__('Write here cause location name.', 'heaven-hands'),
		  
        ),
		array(
          'id'    => 'hh_cause_location_lat',
          'type'  => 'text',
          'title' => esc_html__('Event Location Latitude', 'heaven-hands'),
		  'desc' => esc_html__('Put here event location latitute', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_cause_location_lon',
          'type'  => 'text',
          'title' => esc_html__('Event Location Longitude', 'heaven-hands'),
		  'desc' => esc_html__('Put here event location longitute', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_cause_map_zoom',
          'type'  => 'text',
          'title' => esc_html__('Event Location Maps Zoom', 'heaven-hands'),
		  'desc' => esc_html__('Put here your maps zoom quantity', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_cause_mapicon',
          'type'  => 'image',
          'title' => esc_html__('Event Location Map Icon', 'heaven-hands'),
		  'desc' => esc_html__('Put here event location map icon', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_cause_donate_text',
          'type'  => 'text',
          'title' => esc_html__('Cause Donate Text', 'heaven-hands'),
		  'desc' => esc_html__('Write here cause button text', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_cause_donate_url',
          'type'  => 'text',
          'title' => esc_html__('Cause Donate URL', 'heaven-hands'),
		  'desc' => esc_html__('Put here cause button url as: www.google.com', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_cause_donate_color',
          'type'  => 'color_picker',
          'title' => esc_html__('Cause Donate Button Color', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_event_donators_title',
          'type'  => 'text',
          'title' => esc_html__('Cause Donators Title', 'heaven-hands'),
		  'desc' => esc_html__('Write here cause donators title', 'heaven-hands'),
        ),
		
		array(
            'id'                => 'hh_cause_donators',
            'type'              => 'group',
            'title'             => esc_html__('Donator\'s List', 'heaven-hands'),
            'button_title'      => esc_html__('Add New', 'heaven-hands'),
            'accordian_title'   => esc_html__('Add New Donators', 'heaven-hands'),
			'desc' => esc_html__('Add here donators information', 'heaven-hands'),
            'fields'            => array(
				 array(
                    'id'        => 'hh_cause_donators_name',
                    'type'      => 'text',
                    'title'     => esc_html__('Add Donators Name:', 'heaven-hands'),
					'desc' => esc_html__('Write here cause donators name', 'heaven-hands'),
                ),
                array(
                    'id'        => 'hh_cause_donators_image',
                    'type'      => 'upload',
                    'title'     => esc_html__('Add Donators Image:', 'heaven-hands'),
					'desc' => esc_html__('Upload here cause donators image (Width: 300px X Height: 245px)', 'heaven-hands'),
                ),
				array(
                    'id'        => 'hh_cause_donate_amount_sign',
                    'type'      => 'icon',
                    'title'     => esc_html__('Currency Sign:', 'heaven-hands'),
					'desc' => esc_html__('Choose the currency sign', 'heaven-hands'),
                ),
				array(
                    'id'        => 'hh_cause_donators_amount',
                    'type'      => 'text',
                    'title'     => esc_html__('Donate Amount', 'heaven-hands'),
					'desc' => esc_html__('Put here donator\'s donate amount.', 'heaven-hands'),
                ),
				
				
			),
		), 
    ), 
  ),
),
);


// -----------------------------------------
// Projects Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_hh_custom_projects_options',
  'title'     => esc_html__('Projects Info', 'heaven-hands'),
  'post_type' => 'project',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(    
    // begin: a section
    array(
      'name'  => 'projects_info',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(
		
        array(
          'id'    => 'hh_projects_start_day',
          'type'  => 'text',
          'title' => esc_html__('Project Start Day', 'heaven-hands'),
          'desc' => esc_html__('Write here the start day of projects as this format: 2017/12/22 00:00:00', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_projects_end_day',
          'type'  => 'text',
          'title' => esc_html__('Project End Day', 'heaven-hands'),
          'desc' => esc_html__('Write here the end day of projects as this format: 2017/12/22 00:00:00', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_projects_location',
          'type'  => 'text',
          'title' => esc_html__('Project Location', 'heaven-hands'),
          'desc' => esc_html__('Write here the project\'s location name.', 'heaven-hands'),
        ),
		
		array(
          'id'    => 'hh_projects_latitude',
          'type'  => 'text',
          'title' => esc_html__('Project Location Latitude', 'heaven-hands'),
          'desc' => esc_html__('Put here the project\'s location latitude ', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_projects_longitude',
          'type'  => 'text',
          'title' => esc_html__('Project Location Longitude', 'heaven-hands'),
          'desc' => esc_html__('Put here the project\'s location longitude ', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_projects_mapzoom',
          'type'  => 'text',
          'title' => esc_html__('Project Map Zoom', 'heaven-hands'),
          'desc' => esc_html__('Put here the project\'s map\'s zoom value ', 'heaven-hands'),
        ),
		array(
          'id'    => 'hh_projects_mapicon',
          'type'  => 'image',
          'title' => esc_html__('Project Location MapIcon', 'heaven-hands'),
          'desc' => esc_html__('Upload here the project\'s location mapicon ', 'heaven-hands'),
        ),
		
    ), 
  ),
),
);


CSFramework_Metabox::instance( $options );