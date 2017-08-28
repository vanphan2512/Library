<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Study Library</title>

    <!-- Bootstrap -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/templatemo_misc.css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
    
  </head>
  <body cz-shortcut-listen="true" <?php body_class(); ?>>
    <div class="nav-container">
        <nav class="top-bar overlay-bar">
            <div class="container">
                <div class="row utility-menu">
                    <div class="col-sm-12">
                        <div class="utility-inner clearfix">
                            <span class="alt-font"><i class="fa fa-map-marker"></i> 300 Collins St Melbourne</span>
                            <span class="alt-font"><i class="fa fa-envelope-o" aria-hidden="true"></i> hello@pivot.net</span>
                        
                            <div class="pull-right">
                                <a href="login.html" class="btn btn-primary login-button btn-xs">Login</a>
                                <a href="#" class="btn btn-primary btn-filled btn-xs">Signup</a>
                                <a href="#" class="language"><img alt="English" src="<?php echo get_stylesheet_directory_uri(); ?>/images/english.png"></a>
                                <a href="#" class="language"><img alt="English" src="<?php echo get_stylesheet_directory_uri(); ?>/images/denmark.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row nav-menu">
                    <div class="menu-top">
                        <div class="col-sm-3 col-md-2 columns">
                            <a href="index.html">
                                <img class="logo logo-light" alt="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-light.png">
                                <img class="logo logo-dark" alt="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-dark.png" style="display: none;">
                            </a>
                        </div>
                        <div class="col-sm-9 col-md-10 columns">
                            <ul class="menu">
                                <li class="has-dropdown"><a href="#">Home Pages</a></li>
                                <li class="has-dropdown"><a href="#">Pages</a></li>
                                <li class="has-dropdown"><a href="#">Blog</a></li>
                                <li class="has-dropdown"><a href="#">Projects</a></li>
                                <li class="has-dropdown"><a href="#">Contact</a></li>
                            </ul>
                            <ul class="social-icons text-right">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
                <div class="mobile-toggle"></div>
            </div>
        </nav>
    </div>
