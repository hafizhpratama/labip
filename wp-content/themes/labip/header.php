<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Lab Ilmu Pemerintahan">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Stylesheets & Fonts -->
    <style>
        .avatar {
            width: 2.7rem !important;
        }

        body {
            font-family: "Poppins", sans-serif !important;
        }

        #header.header-sticky.sticky-active .header-inner,
        #header.header-sticky.sticky-active #header-wrap {
            background: #FEBD0E !important;
        }

        @media (max-width: 1024px) {
            #mainMenu:not(.menu-overlay) nav>ul>li>a {
                color: #3d3d3d !important;
            }
        }

        <?php

        if (is_page(array('home', 'layanan', 'kontak', 'profil', 'mitra', 'perangkat-desa'))) {
            echo '#mainMenu nav ul li a{ color: white!important;}';
            echo 'i.icon-search:before{color: white;}';
        } else{
            echo '#mainMenu nav ul li a{ color: #3d3d3d!important;}';
            echo 'i.icon-search:before{color: #3d3d3d;}';
            echo '.lines, .lines:before, .lines:after { background-color: #3d3d3d!important; }';
        }
        ?>
        


    </style>
    <?php
    wp_head();
    ?>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-transparent="true" data-responsive-fixed="true" class="light">

            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src(($custom_logo_id));
                        }
                        ?>
                        <a href="/" class="logo-default" data-dark-logo="<?php echo $logo[0] ?>">
                            <img src="<?php echo $logo[0] ?>" alt="Lab IP" class="d-none d-md-block">
                            <img src="<?php echo $logo[0] ?>" alt="Lab IP" class="d-inline d-md-none">
                        </a>

                    </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form role="search" id="searchform" class="search-form" action="http://localhost/labip/" method="get">
                            <input id="s" class="form-control" name="s" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'menu' => 'primary',
                                        'container' => '',
                                        'theme_location' => 'primary',
                                        'items_wrap' => '<ul id="" class="">%3$s</ul>'
                                    )
                                )
                                ?>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->

                </div>
            </div>
        </header>
        <!-- end: Header -->