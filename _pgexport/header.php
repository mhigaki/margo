<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Margo - Responsive HTML5 Template">
        <meta name="author" content="GrayGrids">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/red.css" title="red" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/jade.css" title="jade" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/green.css" title="green" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/blue.css" title="blue" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/beige.css" title="beige" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/cyan.css" title="cyan" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/orange.css" title="orange" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/peach.css" title="peach" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/pink.css" title="pink" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/purple.css" title="purple" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/sky-blue.css" title="sky-blue" media="screen"/>
        <link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/colors/yellow.css" title="yellow" media="screen"/>
        <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <div id="container">
            <header class="clearfix">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <ul class="contact-details">
                                    <li>
                                        <a href="#"> <i class="fa fa-map-marker"></i></a>
                                    </li>                                     

                                    <?php _e( 'House-54/A, London, UK', 'margo' ); ?>
                                    <li>
                                        <a href="#"><i class="fa fa-envelope-o"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-phone"></i> <?php _e( '+12 345 678 000', 'margo' ); ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5">
                                <ul class="social-list">
                                    <li>
                                        <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                                    </li>
                                    <li>
                                        <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                    </li>
                                    <li>
                                        <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li>
                                        <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                                <img alt="" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'custom_logo', 'images/margo.png' ), 'normal' ) ?>">
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <div class="search-side">
                                <a class="show-search"><i class="fa fa-search"></i></a>
                                <div class="search-form">
                                    <form autocomplete="off" role="search" method="get" class="searchform" action="<?php echo esc_url( get_template_directory_uri() ); ?>/#" id="searchform">
                                        <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                                    </form>
                                </div>
                            </div>
                            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                <ul class="nav navbar-nav navbar-right">
                                    <?php wp_nav_menu( array(
                                          'menu' => 'primary',
                                          'menu_class' => 'nav navbar-nav navbar-right',
                                          'container' => ''
                                    ) ); ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php wp_nav_menu( array(
                              'menu' => 'primary',
                              'menu_class' => 'wpb-mobile-menu',
                              'container' => ''
                        ) ); ?>
                    <?php endif; ?>
                </div>
            </header>
            <main id="main" class="site-main">