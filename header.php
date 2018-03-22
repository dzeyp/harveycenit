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
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="preloader">
    <div id="status">&nbsp;</div>
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

        <div class="slideshow">
            <div class="slideshow-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-594f-min.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-702f-min.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-739-2f-min.jpg')"></div>
        </div>
        <div class="dotted-bg"></div>

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

        <div class="container container-section reveal1 showcase1">
            <div class="shuffle-link">
                <div class="section-title">
                    <hr />
                    <h2>SHOWCASE</h2>
                </div>
                <button class="nature">Link1</button>
                <button class="city">Link2</button>
            </div>
            <div class="js-grid my-shuffle">
                <figure class="js-item column" data-groups='["nature"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/uploads/141310026617203b5980d/c86b8baa?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=882e851a008e83b7a80d05bdc96aa817" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column" data-groups='["nature"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1484402628941-0bb40fc029e7?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=6237e62a10fa079d99b088b0db0144ac" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column" data-groups='["nature"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/uploads/1413142095961484763cf/d141726c?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=86dc2dcb74588b338dfbb15d959c5037" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column" data-groups='["nature"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1465414829459-d228b58caf6e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=7ab1744fe016fb39feb2972244246359" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column row-span" data-groups='["nature"]'>
                    <div class="aspect aspect--9x80">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1416184008836-5486f3e2cf58?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=601&amp;h=676&amp;fit=crop&amp;s=5f1f1ffba05979d4248cc16d8eb82f0a" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column" data-groups='["city"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1478033394151-c931d5a4bdd6?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=57a00aabcfaa1b04fd268ea3ad4a4cbb" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column" data-groups='["city"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1434144893279-2a9fc14e9337?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=d2f930bbb91de7e19e6436f5b03897b0" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column col-span" data-groups='["city"]'>
                    <div class="aspect aspect--32x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1473175494278-d83ed8459089?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1208&amp;h=338&amp;fit=crop&amp;s=fd1cf1e8eddf88ef87015314f85ce3fb" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column" data-groups='["city"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1464454709131-ffd692591ee5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=eda14f45e94e9024f854b1e06708c629" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column" data-groups='["city"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1482192596544-9eb780fc7f66?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=70dabb0dcc604c558245b72f3109bbbb" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column" data-groups='["city"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1447433589675-4aaa569f3e05?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=4e19022724205e38e491961f50e47d32" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column" data-groups='["city"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1430026996702-608b84ce9281?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=363a88755a7b87635641969a8d66f7aa" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <div class="column my-sizer-element"></div>
            </div>
        </div>

    </div>
