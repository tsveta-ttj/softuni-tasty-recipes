<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Basic -->
    <?php wp_head(); ?>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?php wp_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>

    <!--slick slider stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
    <!-- slick slider -->

</head>

<body <?php body_class(); ?>>

<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="<?php echo esc_url( get_home_url() ); ?>">
                ChocoLux
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>


            <?php
            if ( has_nav_menu( 'primary_menu' ) ) { 
                wp_nav_menu( $args = array(
                    'menu'				=> "site-nav-bar", 
                    'menu_class'		=> "navbar-nav ml-auto", 
                    'container'			=> "div", 
                    'container_class'	=> "collapse navbar-collapse", 
                    'container_id'		=> "navbarSupportedContent", 
                    'theme_location'    => 'primary_menu',
                ) );
            }
            ?>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <div class="quote_btn-container">
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    <a href="">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>