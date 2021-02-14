<?php get_header();?>
    <!-- header end -->
    <!-- blog page banner Start -->
    <div class="blog-page-banner">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="blogpage-banner-content">
                        <h2>Blog Single</h2> <a href="#"><span>Home ></span></a> <a href="#"><span>Blog Single</span></a> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog page banner End -->


    <!-- blog page start -->
    <section class="blogpage blog-single">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-wrapper row">
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="blogpage-post-items">
                              <?php while(have_posts()):the_post();?>
                               <div class="blogpage-post-item">
                                    <div class="blog-element">
                                        <div class="blog-thumb">
                                            <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail();?>" alt="blog"></a>
                                        </div>
                                        <div class="blog-content">
                                            <ul class="post-meta">
                                                <li><i class="fa fa-clock-o"></i><?php the_time('d m y');?></li>
                                            </ul>
                                            <a href="<?php the_permalink();?>"><h5><?php the_title();?></h5></a>
                                            <p><?php the_content();?></p>
                                            <ul class="blog-social-icon">
                                                <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                               <div class="blogpage-post-item">
                                  <div class="comment-box">

                                      <?php comments_template();?>
                                  </div>
                               </div>
                               <!-- <script type="text/javascript">
                                 if(document.querySelector(".logged-in-as")){
                                   document.querySelector(".comment-form .comment-form-comment label").style.width="100%";
                                 }
                                 if(document.querySelector(".logged-in-as")){
                                   document.querySelector(".comment-form .comment-form-comment textarea").style.width="100%";
                                 }
                                 document.querySelector("")

                               </script> -->

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
