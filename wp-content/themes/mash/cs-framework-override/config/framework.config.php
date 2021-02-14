<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$settings           = array(
  'menu_title'      => __('Mash'),
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

//Genarel Settings

$options[] = array(

  'name' =>'header_section',
  'title' =>'Header Section',
  'icon' => 'fa fa-users',
  'fields' => array(

      array(

          'type' => 'image',
          'id'   => 'site_logo',
          'title'=> 'Site Logo',
          'desc' => 'Please upload your site logo from here',

      ),
      array(

        'type' => 'switcher',
        'id' => 'searchicon',
        'title' => 'On/Off',
        'desc' => 'You can handle the search option from here',



      ),



  )

);

//Banner Section

$options[] = array(

  'name' =>'banner_section',
  'title' =>'Banner Settings',
  'icon' => 'fa fa-users',
  'fields' => array(

      array(

          'type' => 'image',
          'id'   => 'banner_bg',
          'title'=> 'Banner Background',
          'desc' => 'Please upload your banner Background from here',

      ),

      array(
        'type' => 'group',
        'id' => 'sliders',
        'title' => 'Sliders',
        'button_title' => 'Add New Slider',
        'fields' => array(
          array(
            'type' => 'text',
            'id' => 'slider_title',
            'title' => 'Please put here the slider title',
              ),
           array(
            'type' => 'textarea',
            'id' => 'slider_subtitle',
            'title' => 'Please put here the slider sub title',
              ),
           array(
            'type' => 'text',
            'id' => 'slider_button_text',
            'title' => 'Please put here the slider button text.',
              ),
            array(
            'type' => 'text',
            'id' => 'slider_button_url',
            'title' => 'Please put here the slider button URL.',
              ),








        ),



      )




  )

);

//Team Section

$options[] = array(

  'name' =>'team_section',
  'title' =>'Team Settings',
  'icon' => 'fa fa-users',
  'fields' => array(

      array(

          'type' => 'text',
          'id'   => 'team_title',
          'title'=> 'Team Section Title',
          'desc' => 'Please write your team section title here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'team_stitle',
          'title'=> 'Team Section Sub Title',
          'desc' => 'Please write your team section sub title here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'team_limit',
          'title'=> 'Team Member Limit',
          'desc' => 'Please mention the team member limit here.',

      ),






  )

);


//Pricing Section

$options[] = array(

  'name' =>'pricing_section',
  'title' =>'Pricing Settings',
  'icon' => 'fa fa-usd',
  'fields' => array(

      array(

          'type' => 'text',
          'id'   => 'pricing_title',
          'title'=> 'Pricing Section Title',
          'desc' => 'Please write your pricing title here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'pricing_stitle',
          'title'=> 'Pricing Section Sub Title',
          'desc' => 'Please write your pricing sub title here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'pricing_limit',
          'title'=> 'Pricing Limit',
          'desc' => 'Please mention the pricing limit here.',

      ),






  )

);

//Activity Section

$options[] = array(

  'name' =>'activity_section',
  'title' =>'Activity Settings',
  'icon' => 'fa fa-usd',
  'fields' => array(


    array(
      'type' => 'group',
      'id' => 'activitys',
      'title' => 'Activities',
      'button_title' => 'Add New Activity',
      'fields' => array(
        array(
          'type' => 'icon',
          'id' => 'activity_icon',
          'title' => 'Please select your activity icon.',
            ),

            array(
              'type' => 'text',
              'id' => 'activity_title',
              'title' => 'Please write your activity title.',
                ),
                array(
                  'type' => 'textarea',
                  'id' => 'activity_desc',
                  'title' => 'Please write your activity description.',
                    ),

      ),


    )

  )

);

//About Section

$options[] = array(

  'name' =>'about_section',
  'title' =>'About Settings',
  'icon' => 'fa fa-usd',
  'fields' => array(
    array(

        'type' => 'image',
        'id'   => 'about_image',
        'title'=> 'About Image',
        'desc' => 'Please select your about image.',

    ),
    array(

        'type' => 'text',
        'id'   => 'about_title',
        'title'=> 'About Title',
        'desc' => 'Please write your about title.',

    ),
    array(

        'type' => 'text',
        'id'   => 'about_stitle',
        'title'=> 'About subTitle',
        'desc' => 'Please write your about sub title.',

    ),
    array(

        'type' => 'textarea',
        'id'   => 'about_desc',
        'title'=> 'About Description',
        'desc' => 'Please write your company description.',

    ),

    array(
      'type' => 'group',
      'id' => 'abouts',
      'title' => 'About',
      'button_title' => 'Add New About',
      'fields' => array(
        array(
          'type' => 'icon',
          'id' => 'about_icon',
          'title' => 'Please select your about icon.',
            ),

            array(
              'type' => 'text',
              'id' => 'about_point',
              'title' => 'Please write your about point.',
                ),

      ),



    ),
    array(

        'type' => 'text',
        'id'   => 'button_title',
        'title'=> 'Button Title',
        'desc' => 'Please write your about button title.',

    ),
    array(

        'type' => 'text',
        'id'   => 'button_url',
        'title'=> 'Button url',
        'desc' => 'Please link your  button URL.',

    ),





  )

);

//Service Section

$options[] = array(

  'name' =>'service_section',
  'title' =>'Service Settings',
  'icon' => 'fa fa-user-md',
  'fields' => array(

    array(

        'type' => 'text',
        'id'   => 'service_title',
        'title'=> 'Service Title',
        'desc' => 'Please write your service title.',

    ),
    array(

        'type' => 'text',
        'id'   => 'service_stitle',
        'title'=> 'Service subTitle',
        'desc' => 'Please write your service sub title.',

    ),


    array(
      'type' => 'group',
      'id' => 'services',
      'title' => 'Service',
      'button_title' => 'Add New Service',
      'fields' => array(
        array(
          'type' => 'icon',
          'id' => 'service_icon',
          'title' => 'Please select your service icon.',
            ),

            array(
              'type' => 'text',
              'id' => 'service_point',
              'title' => 'Please write your service point.',
                ),
                array(
                  'type' => 'textarea',
                  'id' => 'service_desc',
                  'title' => 'Please write your service description.',
                    ),

      ),

    ),

  )

);

//Blog Section

$options[] = array(

  'name' =>'blog_section',
  'title' =>'Blog Setting',
  'icon' => 'fa fa-user-md',
  'fields' => array(

    array(

        'type' => 'text',
        'id'   => 'blog_title',
        'title'=> 'Blog Title',
        'desc' => 'Please write your blog title.',

    ),
    array(

        'type' => 'text',
        'id'   => 'blog_stitle',
        'title'=> 'Blog subTitle',
        'desc' => 'Please write your blog sub title.',

    ),
    array(

        'type' => 'text',
        'id'   => 'blog_limit',
        'title'=> 'Blog Limit',
        'desc' => 'Please mention the blog limit here.',

    ),




  )

);


//Contact Section

$options[] = array(
  'name' =>'contact_section',
  'title' =>'Contact Setting',
  'icon' => 'fa fa-user-md',
  'fields' => array(

    array(

        'type' => 'text',
        'id'   => 'contact_title',
        'title'=> 'Contact Title',
        'desc' => 'Please write your contact title.',

    ),
    array(

        'type' => 'text',
        'id'   => 'contact_stitle',
        'title'=> 'Contact subTitle',
        'desc' => 'Please write your contact sub title.',

    ),

    array(
      'type' => 'group',
      'id' => 'contacts',
      'title' => 'Contact',
      'button_title' => 'Add New Contact',
      'fields' => array(
        array(
          'type' => 'icon',
          'id' => 'contact_icon',
          'title' => 'Please select your contact icon.',
            ),

            array(
              'type' => 'text',
              'id' => 'contact_adrs',
              'title' => 'Please write your contact address.',
                ),
                array(
                  'type' => 'text',
                  'id' => 'contact_desc',
                  'title' => 'Please write your contact description.',
                    ),
                    array(
                      'type' => 'text',
                      'id' => 'contact_desc1',
                      'title' => 'Please write your contact description.',
                        ),




      ),

    ),




  )

);

//Counter Section

$options[] = array(
  'name' =>'counter_section',
  'title' =>'Counter Setting',
  'icon' => 'fa fa-user-md',
  'fields' => array(

    array(

        'type' => 'image',
        'id'   => 'counter_bg',
        'title'=> 'Counter Background',
        'desc' => 'Please select your counter background image.',

    ),


    array(
      'type' => 'group',
      'id' => 'counters',
      'title' => 'Counter',
      'button_title' => 'Add New',
      'fields' => array(
        array(
          'type' => 'icon',
          'id' => 'counter_icon',
          'title' => 'Please select your counter icon.',
            ),

            array(
              'type' => 'text',
              'id' => 'counter_num',
              'title' => 'Please write your counter number.',
                ),
                array(
                  'type' => 'text',
                  'id' => 'counter_title',
                  'title' => 'Please write your counter title.',
                    ),




      ),

    ),




  )

);

//Vedio Section

$options[] = array(

  'name' =>'video_section',
  'title' =>'Video Settings',
  'icon' => 'fa fa-usd',
  'fields' => array(

      array(

          'type' => 'image',
          'id'   => 'video_bg',
          'title'=> 'Video Background Image',
          'desc' => 'Please upload your video background image from here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'video_URL',
          'title'=> 'Video Embaded URL',
          'desc' => 'Please upload your video embaded url code here.',

      ),
)
);

//Blog Section

$options[] = array(

  'name' =>'blogPage_section',
  'title' =>'BlogPage Settings',
  'icon' => 'fa fa-blog',
  'fields' => array(

      array(

          'type' => 'image',
          'id'   => 'blogpage_bg',
          'title'=> 'Blog Background Image',
          'desc' => 'Please upload your blog background image from here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'blogpage_title',
          'title'=> 'Blogpage Title',
          'desc' => 'Please write your blog title here here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'blog_link',
          'title'=> 'Blog Link',
          'desc' => 'Please write your blog link here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'blog_url',
          'title'=> 'Blog URL',
          'desc' => 'Please write your blog URL here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'blog_link1',
          'title'=> 'Blog Link 1',
          'desc' => 'Please write your blog link here.',

      ),
      array(

          'type' => 'text',
          'id'   => 'blog_url1',
          'title'=> 'Blog URL 1',
          'desc' => 'Please write your blog URL here.',

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
