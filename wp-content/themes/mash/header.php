<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
   <?php wp_head();?>
</head>

<body>
    <!-- header Start -->
    <header id="header">
        <div class="header-wrapper">
            <!-- Main Menu Start -->
            <div class="main-menu">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar icon-first"></span>
                                    <span class="icon-bar icon-second"></span>
                                    <span class="icon-bar icon-third"></span>
                                </button>
                                <?php
                                    $site_logo=cs_get_option('site_logo');
                                    $searchicon = cs_get_option('searchicon');
                                    $logo=wp_get_attachment_image_url($site_logo,'full');


                                ?>
                                <?php if(!empty($logo)):?>
                                <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>">
                                    <img src="<?php echo esc_url($logo);?>" alt="<?php bloginfo('name');?>">
                                </a>
                                <?php else:?>
                                <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>">
                                    <h3><?php bloginfo('name');?></h3>
                                </a>
                            <?php endif;?>
                            </div>
                            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->

                                  <?php if($searchicon==1):?>

                                    <!-- <div class="nav navbar-nav navbar-right"> -->

                                  <!-- <ul class="search-cart-area"> -->
                                    <ul class="nav navbar-nav navbar-right">

                                      <li class="search-box">
                                        <a href="#"><i class="fa fa-search first-click" ></i></a>
                                        <a href="#"><i class="fa fa-close second-click" ></i></a>
                                      </li>


                                  </ul>
                                <!-- </div> -->
                              <?php endif;?>

                            <!-- </div> -->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <?php wp_nav_menu(array(
                              'menu' => 'primary',
                              'theme_location'=>'header_menu',
                              'depth'=>2,
                              'container'=>'div',
                              'container_class' => 'collapse navbar-collapse',
                              'container_id'    => 'bs-example-navbar-collapse-1',
                              'menu_class'=>'navbar-nav mr-auto',
                               'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'    => new WP_Bootstrap_Navwalker(),


                            ));?>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Main Menu end -->
        </div>
    </header>
