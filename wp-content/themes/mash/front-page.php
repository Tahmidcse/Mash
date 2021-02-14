<?php
/*
    Template Name: Home Page
*/



 get_header();?>
    <!-- header end -->

    <!--  Banner Start -->
    <?php
    $banner_bg = cs_get_option('banner_bg');
    $bannerbg = wp_get_attachment_image_url($banner_bg,'full');
    $sliders = cs_get_option('sliders');




    ?>
    <section class="banner" style="background:url(<?php echo esc_url($bannerbg);?>);background-size: cover;">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $i=0;
                foreach($sliders as $slider):?>
                <li data-target="#main-slider" data-slide-to="<?php echo $i;?>" class="<?php echo ($j == 0) ? 'active' : '';?>"></li>
                <?php $i++; endforeach;?>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
          <?php

          $j = 0;
          foreach($sliders as $slider):?>
              <div class="item <?php echo ($j == 1) ? 'active' : '';?> ">
                  <div class="banner-element">
                      <div class="container">
                          <div class="row">
                              <div class="banner-content">
                                  <h1><?php echo esc_html($slider['slider_title']);?></h1>
                                  <h3><?php echo esc_html($slider['slider_subtitle']);?></h3>
                                  <a href="<?php echo esc_html($slider['slider_button_url']);?>" class="custom-btn"><?php echo esc_html($slider['slider_button_text']);?></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

            <?php $j++; endforeach;?>
          </div>



            <!-- Controls -->
            <a class="slider-control left" href="#main-slider" role="button" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
            </a>
            <a class="slider-control right" href="#main-slider" role="button" data-slide="next">
                <i class="fa fa-chevron-right"></i>
            </a>
        </div>
    </section>
    <!--  Banner End -->

    <!--  feature Start -->
<?php  $activitys = cs_get_option('activitys');?>
    <section class="feature">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-wrapper row">
                        <?php foreach($activitys as $activity):?>
                        <div class="col-md-3 col-sm-6 col-xs-12">

                            <div class="feature-element">
                                <div class="hexagon-circle">
                                    <i class="<?php echo esc_attr($activity['activity_icon']);?>"></i>
                                </div>
                                <div class="feature-content">
                                    <h6><?php echo esc_html($activity['activity_title']);?></h6>
                                    <p><?php echo esc_html($activity['activity_desc']);?> </p>
                                </div>
                            </div>

                        </div>
                        <?php endforeach;?>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  feature End -->

    <!--  About Start -->
    <?php
  $about_image =  cs_get_option('about_image');
  $aboutimg = wp_get_attachment_image_url($about_image,'full');
  $about_title =  cs_get_option('about_title');
  $about_stitle =  cs_get_option('about_stitle');
  $about_desc =  cs_get_option('about_desc');
  $button_title =  cs_get_option('button_title');
  $button_url =  cs_get_option('button_url');
  $abouts =  cs_get_option('abouts');
    ?>
    <section id="about" class="about-us">
        <div class="section-wrapper row">
            <div class="col-md-6 col-sm-12">
                <div class="about-thumb">
                    <img src="<?php echo esc_url($aboutimg);?>" alt="<?php bloginfo('name');?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="about-element">
                    <div class="about-activity">
                        <h2><?php echo esc_html($about_title);?></h2>
                        <p><?php echo esc_html($about_stitle);?></p>
                        <p><?php echo esc_html($about_desc);?></p>

                        <ul class="about-details">
                          <?php foreach($abouts as $about):?>
                            <li><i class="<?php echo esc_attr($about['about_icon']);?>"></i><?php echo esc_html($about[ 'about_point']);?></li>
                          <?php endforeach;?>
                        </ul>
                        <a href="<?php echo esc_html($button_url);?>" class="custom-btn"><?php echo esc_html($button_title);?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  About End -->

    <!--  service Start -->
    <?php
    $service_title = cs_get_option('service_title');
    $service_stitle = cs_get_option('service_stitle');
    $services = cs_get_option('services');
    ?>
    <section id="service" class="service">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-heading">
                        <h2><?php echo esc_html($service_title);?></h2>
                        <p><?php echo esc_html($service_stitle);?></p>
                    </div>

                    <div class="section-wrapper row">
                      <?php foreach($services as $service):?>
                        <div class="col-md-4 col-xs-12">
                            <div class="service-element">
                                <div class="hexagon-circle">
                                    <i class="<?php echo esc_attr($service['service_icon']);?>"></i>
                                </div>
                                <div class="service-content">
                                    <h6><?php echo esc_html($service['service_point']);?></h6>
                                    <p><?php echo esc_html($service['service_desc']);?></p>
                                </div>
                            </div>
                        </div>
                      <?php endforeach;?>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!--  service End -->

    <!--  Counter Start -->
    <?php
        $counter_bg = cs_get_option('counter_bg');
        $counterbg = wp_get_attachment_image_url($counter_bg,'full');
        $counters = cs_get_option('counters');


     ?>
    <section class="counter-up" style="background:url(<?php echo esc_url($counterbg); ?>);background-size: cover;">
        <div class="banner-overlay">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                      <?php foreach($counters as $counter): ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="counter-element">
                                <div class="hexagon-circle">
                                    <i class="<?php echo esc_attr($counter['counter_icon']); ?>"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="counter"><?php echo esc_html($counter['counter_num']); ?></span>
                                    <p><?php echo esc_html($counter['counter_title']); ?></p>
                                </div>
                            </div>
                        </div>
                      <?php endforeach; ?>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Counter End -->

    <!--  portfolio Start -->
    <section class="portfolio">
      <div class="portfolio">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-heading">
                        <h2>Our Latest Work</h2>
                        <p>Creative Thinking For Business PSD Teamplate.</p>
                    </div>
                    <div class="section-wrapper">
                      <?php echo do_shortcode('[portfolio]') ?>
                        <!-- <div id="portfolio-item-selector">
                            <ul class="portfolio-grid-list">
                                <li class="active" data-filter="*">
                                    <p>All</p>
                                </li>
                                <li data-filter=".bd">
                                    <p>Branding</p>
                                </li>
                                <li data-filter=".wd">
                                    <p>Web design</p>
                                </li>
                                <li data-filter=".pt">
                                    <p>Print</p>
                                </li>
                                <li data-filter=".md">
                                    <p>Media</p>
                                </li>
                            </ul>
                        </div> -->
                        <!-- <div id="portfolio-section" class="grid row">
                            <div class="grid-item portfolio-item bd wd" data-category="transition">
                                <div class="project-element">
                                    <div class="project-thumb">
                                        <div class="overlay-effect"></div>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-01.jpg" alt="portfolio" class="img-responsive">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-01.jpg" class="plus-minus-stick" data-rel="lightcase:myCollection">
                                            <span class="plus-stick"></span>
                                            <span class="minus-stick"></span>
                                        </a>
                                        <div class="project-content style-one">
                                            <h6>Business Websaite</h6>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item portfolio-item wd md" data-category="transition">
                                <div class="project-element">
                                    <div class="project-thumb">
                                        <div class="overlay-effect"></div>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-04.jpg" alt="portfolio" class="img-responsive">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-04.jpg" class="plus-minus-stick style-two" data-rel="lightcase:myCollection">
                                            <span class="plus-stick"></span>
                                            <span class="minus-stick"></span>
                                        </a>
                                        <div class="project-content style-two">
                                            <h6>Business Websaite</h6>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item portfolio-item pt" data-category="transition">
                                <div class="project-element">
                                    <div class="project-thumb">
                                        <div class="overlay-effect"></div>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-03.jpg" alt="portfolio" class="img-responsive">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-03.jpg" class="plus-minus-stick" data-rel="lightcase:myCollection">
                                            <span class="plus-stick"></span>
                                            <span class="minus-stick"></span>
                                        </a>
                                        <div class="project-content style-one">
                                            <h6>Business Websaite</h6>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item portfolio-item pt md wd" data-category="transition">
                                <div class="project-element">
                                    <div class="project-thumb">
                                        <div class="overlay-effect"></div>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-04.jpg" alt="portfolio" class="img-responsive">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-04.jpg" class="plus-minus-stick" data-rel="lightcase:myCollection">
                                            <span class="plus-stick"></span>
                                            <span class="minus-stick"></span>
                                        </a>
                                        <div class="project-content style-one">
                                            <h6>Business Websaite</h6>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item portfolio-item bd wd" data-category="transition">
                                <div class="project-element">
                                    <div class="project-thumb">
                                        <div class="overlay-effect"></div>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-05.jpg" alt="portfolio" class="img-responsive">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-05.jpg" class="plus-minus-stick" data-rel="lightcase:myCollection">
                                            <span class="plus-stick"></span>
                                            <span class="minus-stick"></span>
                                        </a>
                                        <div class="project-content style-one">
                                            <h6>Business Websaite</h6>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item portfolio-item wd" data-category="transition">
                                <div class="project-element">
                                    <div class="project-thumb">
                                        <div class="overlay-effect"></div>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-06.jpg" alt="portfolio" class="img-responsive">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-06.jpg" class="plus-minus-stick" data-rel="lightcase:myCollection">
                                            <span class="plus-stick"></span>
                                            <span class="minus-stick"></span>
                                        </a>
                                        <div class="project-content style-one">
                                            <h6>Business Websaite</h6>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item portfolio-item md pt" data-category="transition">
                                <div class="project-element">
                                    <div class="project-thumb">
                                        <div class="overlay-effect"></div>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-05.jpg" alt="portfolio" class="img-responsive">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-05.jpg" class="plus-minus-stick style-two" data-rel="lightcase:myCollection">
                                            <span class="plus-stick"></span>
                                            <span class="minus-stick"></span>
                                        </a>
                                        <div class="project-content style-two">
                                            <h6>Business Websaite</h6>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item portfolio-item bd md" data-category="transition">
                                <div class="project-element">
                                    <div class="project-thumb">
                                        <div class="overlay-effect released-thumb-overlay"></div>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-04.jpg" alt="portfolio" class="img-responsive">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-04.jpg" class="plus-minus-stick  style-two" data-rel="lightcase:myCollection">
                                            <span class="plus-stick"></span>
                                            <span class="minus-stick"></span>
                                        </a>
                                        <div class="project-content style-two">
                                            <h6>Business Websaite</h6>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item portfolio-item wd" data-category="transition">
                                <div class="project-element">
                                    <div class="project-thumb">
                                        <div class="overlay-effect released-thumb-overlay"></div>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-08.jpg" alt="portfolio" class="img-responsive">
                                        <a href="<?php echo get_template_directory_uri();?>/assets/img/main-page/project-08.jpg" class="plus-minus-stick" data-rel="lightcase:myCollection">
                                            <span class="plus-stick"></span>
                                            <span class="minus-stick"></span>
                                        </a>
                                        <div class="project-content style-one">
                                            <h6>Business Websaite</h6>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="portfolio-btn">
                            <a href="#" class="custom-btn">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!--  portfolio End -->

    <!--  our video Start -->
    <?php
    $video_bg = cs_get_option('video_bg');
    $videobg = wp_get_attachment_image_url($video_bg,'full');
    $video_URL = cs_get_option('video_URL');

     ?>

    <section class="our-video" style = "background:url(<?php echo esc_url($videobg); ?>); background-size:cover;">
        <div class="banner-overlay" >
            <div class="our-video-element">
              <?php if(!empty($video_URL)): ?>
                <a href="<?php echo esc_url($video_URL); ?>" data-rel="lightcase"><i class="fa fa-play"></i></a>
              <?php endif; ?>
            </div>
        </div>
    </section>
    <!--  our video End -->

    <!--  Our Team Start -->
    <?php
    $team_title = cs_get_option('team_title');
    $team_stitle = cs_get_option('team_stitle');
    $team_limit = cs_get_option('team_limit');
    ?>

    <section id="team" class="our-team">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-heading">
                      <?php if(!empty($team_title)):?>
                        <h2><?php echo esc_html($team_title);?></h2>
                      <?php endif;?>
                      <?php if(!empty($team_stitle)):?>
                        <p><?php echo esc_html($team_stitle);?></p>
                      <?php endif;?>
                    </div>
                    <div class="section-wrapper row">
                      <?php
                      $team =  new WP_Query(array(
                          'post_type' => 'team',
                          'posts_per_page' => $team_limit,

                        ));

                        if($team->have_posts()) : while($team->have_posts()) : $team->the_post();?>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                        <?php
                        $meta_team = get_post_meta(get_the_ID(),'custom_post_team_member_options',true);

                      $team_member_photo =  isset($meta_team['team_member_photo']) ? $meta_team['team_member_photo'] : '';
                      $team_member_name =  isset($meta_team['team_member_name']) ? $meta_team['team_member_name'] : '';
                      $team_member_desig =  isset($meta_team['team_member_desig']) ? $meta_team['team_member_desig'] : '';
                      $team_social_icons =  isset($meta_team['team_social_icons']) ? $meta_team['team_social_icons'] : '';

                        ?>
                            <div class="team-element">
                                <img src="<?php echo esc_url(  $team_member_photo);?>" alt="<?php bloginfo('name');?>">
                                <h6><?php echo esc_html($team_member_name);?></h6>
                                <p><?php echo esc_html($team_member_desig);?> </p>
                                <ul class="social-icon">
                                <?php foreach($team_social_icons as $team_social_icon):?>
                                    <li><a href="<?php echo esc_url($team_social_icon['team_URL']);?>" class="hexagon-circle"><i class="<?php echo esc_attr($team_social_icon['team_icon']);?>"></i></a></li>
                                <?php endforeach;?>
                                </ul>
                            </div>
                        </div>


                        <?php endwhile; endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Our Team End -->

    <!--  Pricing Start -->
    <?php
    $pricing_title = cs_get_option('pricing_title');
    $pricing_stitle = cs_get_option('pricing_stitle');
    $pricing_limit = cs_get_option('pricing_limit');
    ?>
    <section id="pricing" class="our-pricing">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-heading">
                      <?php if(!empty($pricing_title)):?>
                        <h2><?php echo esc_html($pricing_title);?></h2>
                      <?php endif;?>
                      <?php if(!empty($pricing_stitle)):?>
                        <p><?php echo esc_html($pricing_stitle);?></p>
                      <?php endif;?>
                    </div>
                    <div class="section-wrapper row">
                      <?php
                      $price =  new WP_Query(array(
                          'post_type' => 'pricing',
                          'posts_per_page' => $pricing_limit,

                        ));

                        if($price->have_posts()) : while($price->have_posts()) : $price->the_post();

                      ?>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table-element">
                                <h6><?php the_title();?></h6>
                                <?php
                                  $meta_data = get_post_meta(get_the_ID(),'custom_post_pricing_options',true);

                                $pricing_icon =  isset($meta_data['pricing_icon']) ? $meta_data['pricing_icon'] : '';
                                $pricing_price =  isset($meta_data['pricing_price']) ? $meta_data['pricing_price'] : '';
                                $pricing_duration =  isset($meta_data['pricing_duration']) ? $meta_data['pricing_duration'] : '';
                                $pricing_features =  isset($meta_data['pricing_features']) ? $meta_data['pricing_features'] : '';
                                $pricing_button_text =  isset($meta_data['pricing_button_text']) ? $meta_data['pricing_button_text'] : '';
                                $pricing_button_url =  isset($meta_data['pricing_button_url']) ? $meta_data['pricing_button_url'] : '';
                                ?>
                                <div class="hexagon-circle">
                                    <div class="price-cost">
                                        <span><sup><?php echo esc_html($pricing_icon);?></sup><?php echo esc_html($pricing_price);?></span>
                                        <p><?php echo esc_html($pricing_duration);?></p>
                                    </div>
                                </div>
                                <ul class="price-details">
                                  <?php foreach($pricing_features as $pricing_feature):?>
                                    <li><?php echo esc_html($pricing_feature['feature_title']);?></li>
                                  <?php endforeach;?>
                                </ul>
                                <?php if(!empty($pricing_button_text) && !empty($pricing_button_url) ):?>
                                <a href="<?php echo esc_url($pricing_button_url);?>" class="custom-btn"><?php echo esc_html($pricing_button_text);?></a>
                              <?php endif;?>
                            </div>
                        </div>
                      <?php endwhile; endif;?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Pricing End -->

    <!--  Testimonial Start -->
    <section id="testimonial" class="testimonial">
        <div class="banner-overlay">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="section-heading">
                            <h2>OUR HAPPY CLIENTS</h2>
                            <p>Creative Thinking For Business PSD Teamplate.</p>
                        </div>
                        <div class="section-wrapper">
                            <!-- Swiper -->
                            <div class="testimonial-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-content">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/testimonial.png" alt="testimonial">
                                            <p class="distinctively">Distinctively recaptiualize competitive e-tailers before market positioning manufactured products. Phosfluorescent streamline cooperative e-tailers whereas technically sound supply chains. Distinctive productize extensive paradigms.</p>
                                            <h6>Robarto Carloss</h6>
                                            <p class="founder">Founder & CEO </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-content">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/testimonial.png" alt="testimonial">
                                            <p class="distinctively">Distinctively recaptiualize competitive e-tailers before market positioning manufactured products. Phosfluorescent streamline cooperative e-tailers whereas technically sound supply chains. Distinctive productize extensive paradigms.</p>
                                            <h6>Robarto Carloss</h6>
                                            <p class="founder">Founder & CEO </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-content">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/testimonial.png" alt="testimonial">
                                            <p class="distinctively">Distinctively recaptiualize competitive e-tailers before market positioning manufactured products. Phosfluorescent streamline cooperative e-tailers whereas technically sound supply chains. Distinctive productize extensive paradigms.</p>
                                            <h6>Robarto Carloss</h6>
                                            <p class="founder">Founder & CEO </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-content">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/img/main-page/testimonial.png" alt="testimonial">
                                            <p class="distinctively">Distinctively recaptiualize competitive e-tailers before market positioning manufactured products. Phosfluorescent streamline cooperative e-tailers whereas technically sound supply chains. Distinctive productize extensive paradigms.</p>
                                            <h6>Robarto Carloss</h6>
                                            <p class="founder">Founder & CEO </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="testimonial-next-btn hexagon-circle">
                                    <i class="fa fa-chevron-left"></i>
                                </div>
                                <div class="testimonial-prev-btn hexagon-circle">
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Testimonial End -->

    <!--  Our Blog Start -->
  <?php
  $blog_title =  cs_get_option('blog_title');
  $blog_stitle =  cs_get_option('blog_stitle');
  $blog_limit =  cs_get_option('blog_limit');
  ?>
    <section id="blog" class="our-blog">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-heading">
                        <h2><?php echo esc_html($blog_title);?></h2>
                        <p><?php echo esc_html($blog_stitle);?></p>
                    </div>
                    <div class="section-wrapper row">
                      <?php
                      $blog =  new WP_Query(array(
                          'post_type' => 'post',
                          'posts_per_page' => $blog_limit,

                        ));

                        if($blog->have_posts()) : while($blog->have_posts()) : $blog->the_post();?>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-element">
                                <div class="blog-thumb">
                                    <img src="<?php the_post_thumbnail();?>">
                                </div>
                                <div class="blog-content">
                                    <ul class="post-meta">
                                        <li><i class="fa fa-clock-o"></i><?php the_time('d m y');?></li>
                                    </ul>
                                    <a href="<?php the_permalink();?>">
                                        <h5><?php the_title();?></h5>
                                    </a>
                                    <p><?php the_excerpt();?></p>
                                    <a href="<?php the_permalink();?>" class="custom-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                      <?php endwhile; endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Our Blog End -->

    <!--  contact Start -->
    <?php
    $contact_title = cs_get_option('contact_title');
    $contact_stitle = cs_get_option('contact_stitle');
    $contacts = cs_get_option('contacts');

     ?>
    <section id="contact" class="contact">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-heading">
                        <h2><?php echo esc_html($contact_title);?></h2>
                        <p><?php echo esc_html($contact_stitle);?></p>
                    </div>
                    <div class="section-wrapper row">
                      <?php foreach ($contacts as $contact) : ?>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="contact-element">
                                <div class="contact-icon">
                                    <div class="hexagon-circle">
                                        <i class="<?php echo esc_attr($contact['contact_icon']); ?>"></i>
                                    </div>
                                </div>
                                <div class="contact-content">
                                    <h6><?php echo esc_html($contact['contact_adrs']); ?></h6>
                                    <p><?php echo esc_html($contact['contact_desc']); ?></p>
                                    <p><?php echo esc_html($contact['contact_desc1']); ?></p>

                                </div>
                            </div>
                        </div>
                      <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  contact End -->

    <!--  get touch Start -->
    <section class="get-touch">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-heading">
                        <h2>GET IN TOUCH</h2>
                        <p>Creative Thinking For Business PSD Teamplate.</p>
                    </div>
                    <div class="section-wrapper">
                        <div class="get-touch-element">
                            <input type="text" class="get-name" placeholder="Name">
                            <input type="text" class="get-num" placeholder="Email">
                            <input type="text" class="get-subject" placeholder="Subject">
                            <input type="text" class="get-email" placeholder="Your Email">
                            <textarea class="get-textarea" placeholder="Message........."></textarea>
                            <a href="#" class="custom-btn">Submit Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  get touch End -->

    <!--  Map Start -->
    <section id="map" class="home-map">
        <div id="home-map" class="map"></div>
    </section>
    <!--  Map End -->

    <!--  Footer Start -->
    <?php get_footer();?>
