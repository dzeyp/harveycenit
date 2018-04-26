<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();
?>
	<div class="container-fluid">
		<div class="slideshow">
            <div class="slideshow-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-594f-min.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-702f-min.jpg')"></div>
            <div class="slideshow-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2018/02/aniqah-739-2f-min.jpg')"></div>
        </div>
        <div class="dotted-bg"></div>
    </div>
	<div class="container">
        <div class="container-section reveal1 showcase showcase1">
            <div class="section-title">
                <hr />
                <h2>SHOWCASE</h2>
            </div>
            <div class="row showcase-parent">
                <div class="col-12 shuffle-link">
                    <button id="white" class="showcase-button">White</button>
                    <button id="colored" class="showcase-button">Colored</button>
                </div>
                <div class="col-12">
                    <div id="showcase-white" class="row showcase-child shown">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pa-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/white/1.jpg">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pa-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/white/2.jpg">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pa-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/white/3.jpg">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pa-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/white/4.jpg">
                        </div>
                    </div>
                    <div id="showcase-colored" class="row showcase-child">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pa-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/colored/1.jpg">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pa-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/colored/2.jpg">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pa-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/colored/3.jpg">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pa-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/colored/4.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="shuffle-link">
                <button class="nature">Wedding</button>
                <button class="city">Fashion</button>
                <button class="nature">Others</button>
            </div>
            <div class="js-grid my-shuffle">
                <figure class="js-item column" data-groups='["nature"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner"><img src="<?php echo get_template_directory_uri(); ?>/img/test/white/1.jpg" obj.alt="obj.alt"/></div>
                    </div>
                </figure>
                <figure class="js-item column row-span" data-groups='["nature"]'>
                    <div class="aspect aspect--9x80">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1416184008836-5486f3e2cf58?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=601&amp;h=676&amp;fit=crop&amp;s=5f1f1ffba05979d4248cc16d8eb82f0a" obj.alt="obj.alt"/></div>
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
                <figure class="js-item column col-span" data-groups='["nature"]'>
                    <div class="aspect aspect--32x9">
                        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1473175494278-d83ed8459089?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1208&amp;h=338&amp;fit=crop&amp;s=fd1cf1e8eddf88ef87015314f85ce3fb" obj.alt="obj.alt"/></div>
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
            </div> -->
        </div>

        <div class="container-section reveal1 press">
            <div class="section-title">
                <hr />
                <h2>PRESS</h2>
            </div>
        </div>

        <div class="container-section reveal1 press">
            <div class="section-title">
                <hr />
                <h2>ABOUT HARVEY</h2>
            </div>
            <div class="row">
            	<div class="col-12 col-md-6 pa-2 text-center text-md-left">
            		<div class="about-text">
	            		<p><span>"</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	            		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<span>"</span></p>
            		</div>
            	</div>
            	<div class="col-12 col-md-6 pa-2 text-center text-md-right">
            		<img src="http://www.illustradolife.com/wp-content/uploads/2017/01/HARVEY-CENIT-Illustrado-Most-Influential-Filipinos-in-the-Gulf-Photo-by-Alex-Callueng-Asst-Photog-Bethoven-Filomeno.jpg" />
            	</div>
        	</div>
        </div>
	</div>

<?php
get_footer();
