<?php
/*
    Template Name: Index Page
*/
 get_header();?>
    <!-- header end -->
    <!-- blog page banner Start -->
    <?php
    $blogpage_bg = cs_get_option('blogpage_bg');
    $blogpage = wp_get_attachment_image_url($blogpage_bg,'full');
    $blogpage_title = cs_get_option('blogpage_title');
    $blog_link = cs_get_option('blog_link');
    $blog_url = cs_get_option('blog_url');
    $blog_link1 = cs_get_option('blog_link1');
    $blog_url1 = cs_get_option('blog_url1');
    ?>
    <div class="blog-page-banner" style="background:url(<?php echo esc_url($blogpage); ?>);background-size:cover;">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="blogpage-banner-content">
                        <h2><?php echo esc_html($blogpage_title); ?></h2> <a href="<?php echo esc_url($blog_url); ?>"><span><?php echo esc_html($blog_link); ?> ></span></a> <a href="<?php echo esc_url($blog_url1); ?>"><span><?php echo esc_html($blog_link1); ?></span></a> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog page banner End -->


    <!-- blog page start -->
    <section class="blogpage">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-wrapper row">
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="blogpage-post-items">
                            <?php if(have_posts()):while(have_posts()):the_post();?>
                               <div class="blogpage-post-item">
                                    <div class="blog-element">
                                        <div class="blog-thumb">
                                            <a href="#"><?php the_post_thumbnail();?></a>
                                        </div>
                                        <div class="blog-content">
                                            <ul class="post-meta">
                                                <li><i class="fa fa-clock-o"></i><?php the_time('d M Y');?></li>
                                            </ul>
                                            <a href="<?php the_permalink();?>"><h5><?php the_title();?></h5></a>
                                            <p><?php the_excerpt();?></p>
                                            <a href="<?php the_permalink();?>" class="custom-btn"><?php esc_html_e('Read More','Mash');?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;endif;?>




                                <div class="blog-footer">
                                    <?php
                                        the_posts_pagination(array(

                                                'screen_reader_text' => ' ',
                                                'prev_text' =>esc_html__('Prev','mash'),
                                                'next_text'=> esc_html__('Next','mash'),

                                        ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">

                            <?php dynamic_sidebar('sidebar-1');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog page End -->

    <!--  Footer Start -->
  <?php get_footer();?>
