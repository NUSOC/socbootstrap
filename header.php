<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'wp-bootstrap-starter'); ?></a>
        <?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')) : ?>

            <style>
                #purple_area {
                    background-color: #401f68;
                }

                header#masthead {
                    background-color: white;
                    color: black;
                }

                header#masthead a {
                    color: black;
                }
            </style>

		<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?> m-0 p-0" role="banner">

            <div id="purple_area">
                <div class="container">
                    PURPLE AREA
                </div>
            </div>


            <div id="menu_area">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-9">LOGO</div>
                        <div class="col-lg-3"><?php get_search_form() ?></div>
                    </div>
                </div>
            </div>


                <div class="container">
                    <nav class="navbar navbar-expand-xl p-0">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'main-nav',
                            'container_class' => 'collapse navbar-collapse ',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav  navbar-fill w-100 nav-fill',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                        ));
                        ?>

                    </nav>
                </div>
            </header><!-- #masthead -->



            <?php if (is_front_page() && !get_theme_mod('header_banner_visibility')) : ?>
                <div id="page-sub-header" <?php if (has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>

                    <div class="container">
                        <h1>
                            <?php
                            if (get_theme_mod('header_banner_title_setting')) {
                                echo get_theme_mod('header_banner_title_setting');
                            } else {
                                echo 'WordPress + Bootstrap';
                            }
                            ?>
                        </h1>
                        <p>
                            <?php
                            if (get_theme_mod('header_banner_tagline_setting')) {
                                echo get_theme_mod('header_banner_tagline_setting');
                            } else {
                                echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize', 'wp-bootstrap-starter');
                            }
                            ?>
                        </p>
                        <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
                    </div>
                </div>
            <?php endif; ?>
            <div id="content" class="site-content">
                <div class="container">
                    <div class="row">
                    <?php endif; ?>
