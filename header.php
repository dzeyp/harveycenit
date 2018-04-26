<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="preloader">
    <!-- <div id="status">&nbsp;</div> -->
    <i class="fas fa-circle-notch fa-spin"></i>
</div>
<div class="hfeed site" id="page">

    <div class="container-fluid" id="main-slider">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light p-0 bg-transparent">
                <div class="logo-wrapper">
                    <a class="navbar-brand" href="#">Harvey Cenit</a>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link current" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- <div class="row slider-wrapper">
            <span class="slider-button slide-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <span class="slider-button slide-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <div class="col-12 slider" data-slide="1" style="background: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-594f-min.jpg') no-repeat center 0px">
            </div>
            <div class="col-12 slider hidden" data-slide="2" style="background: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-702f-min.jpg') no-repeat center 0px">
            </div>
            <div class="col-12 slider hidden" data-slide="3" style="background: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-739-2f-min.jpg') no-repeat center 0px">
            </div>
        </div> -->

        <!-- <div class="slick-slider">
            <div><img src="http://localhost/wordpress/wp-content/uploads/2017/09/harvey1.jpg"></div>
            <div><img src="http://localhost/wordpress/wp-content/uploads/2017/09/harvey2.jpg"></div>
            <div><img src="http://localhost/wordpress/wp-content/uploads/2017/09/harvey3.jpg"></div>
        </div> -->
        <!-- <div class="slick-slider">
            <div>
                <div class="slick-bg"></div>
                <div class="slide-0" style="background: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-594f-min.jpg') no-repeat center;"></div>
            </div>
            <div>
                <div class="slick-bg"></div>
                <div class="slide-0" style="background: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-702f-min.jpg') no-repeat center; background-size: cover;"></div>
            </div>
            <div>
                <div class="slick-bg"></div>
                <div class="slide-0" style="background: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-739-2f-min.jpg') no-repeat center; background-size: cover;"></div>
            </div>
        </div> -->

        <!-- <div class="slideshow">
            <div class="slideshow-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-594f-min.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-702f-min.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-739-2f-min.jpg')"></div>
        </div>
        <div class="dotted-bg"></div> -->

        <!-- <div class="dotted-bg">
          <div class="coming-soon">
            <h1>HARVEY CENIT</h1>
            <h3>harveycenit.com</h3>
            <h2>Website coming soon!</h2><br />
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contact">Contact me</button>
          </div>
        </div>


        <div class="modal fade modal-coming-soon" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
            </div>
          </div>
        </div> -->
    </div>
