<?php
    get_header();
?>
        
        <!-- Page Loader
        ===================================== -
		<div id="pageloader" class="bg-grad-animation-1">
			<div class="loader-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/oval.svg" alt="page loader">
            </div>
		</div>
        
        <a href="landing-page-3.html#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>-->
        
        
        <!-- Navigation Area
        ===================================== -->
        <?php get_template_part('nav'); ?>
        
        
        <!-- Login Modal Dialog Box
        ===================================== -->
        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-lock fa-fw"></i> Sign In</h5>
                    </div>
                    <div class="modal-body pt25">
                        <div class="text-center">
                            <span class="color-dark">Sign in with your social account</span><br>
                            <a href="landing-page-3.html#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/fbconnect.png" alt="" class="mt10 mb10">
                            </a>
                            <a href="landing-page-3.html#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/other/twconnect.png" alt="" class="mt10 mb10"><br><br>
                            </a>
                            <span class="color-dark">- Or sign in with your email address -</span>
                        </div>
                        
                        <form class="form-horizontal mt25 ml50">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                              <button type="submit" class="button button-pasific button-block">Sign in</button>
                                
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center">Don't have an account? <a href="landing-page-3.html#" class="color-dark">Register Now</a></span>
                    </div>
                </div>

            </div>
        </div>
        
        
        <!-- Search Modal Dialog Box
        ===================================== -->
        <div id="searchModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                    </div>
                    <div class="modal-body">                        
                        <form action="#" class="inline-form">
                            <input type="text" class="modal-search-input" autofocus>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="landing-page-3.html#" class="color-dark">Advanced Search</a></span>
                    </div>
                </div>

            </div>
        </div>        
        
        
        <!-- Intro Area
        ===================================== -->
        <header class="intro mt-20" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg/new-img-bg-7.jpg') 80% 0 no-repeat;">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="fs-75 font-size-light color-white mb25 animated" data-animation="fadeInUp" data-animation-delay="100">
                                Smart. Creative. We are.
                            </h1>
                            <p class="intro-text-big lead color-white animated" data-animation="fadeInUp" data-animation-delay="200">An amazing modern website template now here.</p>
                            <a class="button button-circle button-grad-blood-mary button-lg hover-ripple-out animated" data-animation="fadeInUp" data-animation-delay="300">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        
        <!-- Portfolio Area
        ===================================== -->
        <div id="portfolioGrid" class="bg-gray pt30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="filters text-center mt25 mb50">
                            <li><a class="active" data-filter="*">All Projects</a></li>                          
                            <li><a class="" data-filter=".html">HTMl</a></li>
                            <li><a class="" data-filter=".wordpress">Wordpress</a></li>
                            <li><a class="" data-filter=".woocommerce">WooCommerce</a></li>
                            <li><a class="" data-filter=".joomla">Joomla</a></li>
                        </ul>
                        
                        <div class="portfolio center-block">

                            <div class="portfolio-item col-md-3 col-sm-3 col-xs-3 wordpress woocommerce" data-category="">
                                <a href="assets/img/portfolio/preview/new-1.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbs/new-img-550x350-1.jpg" alt="portfolio woocommerce" class="img-responsive animated" data-animation="zoomIn" data-animation-delay="100">                                
                            </div>
                            
                            <div class="portfolio-item col-md-3 col-sm-3 col-xs-3 joomla html">
                                <a href="assets/img/portfolio/preview/new-2.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbs/new-img-550x350-3.jpg" alt="portfolio woocommerce" class="img-responsive animated" data-animation="zoomIn" data-animation-delay="200">
                            </div>
                            
                            <div class="portfolio-item col-md-3 col-sm-3 col-xs-3 wordpress joomla">
                                <a href="assets/img/portfolio/preview/img-370x165-1.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbs/new-img-550x350-2.jpg" alt="portfolio woocommerce" class="img-responsive animated" data-animation="zoomIn" data-animation-delay="300">
                            </div>
                            
                            <div class="portfolio-item col-md-3 col-sm-3 col-xs-3 html wordpress">
                                <a href="assets/img/portfolio/preview/new-4.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbs/new-img-550x350-4.jpg" alt="portfolio woocommerce" class="img-responsive animated" data-animation="zoomIn" data-animation-delay="400">
                            </div>
                            
                            <div class="portfolio-item col-md-3 col-sm-3 col-xs-3 html joomla wordpress">
                                <a href="assets/img/portfolio/preview/new-6.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbs/new-img-550x350-6.jpg" alt="portfolio woocommerce" class="img-responsive animated" data-animation="zoomIn" data-animation-delay="500">
                            </div>
                            
                            <div class="portfolio-item col-md-3 col-sm-3 col-xs-3 html joomla">
                                <a href="assets/img/portfolio/preview/new-5.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbs/new-img-550x350-5.jpg" alt="portfolio woocommerce" class="img-responsive animated" data-animation="zoomIn" data-animation-delay="600">
                            </div>
                            
                            <div class="portfolio-item col-md-3 col-sm-3 col-xs-3 wordpress woocommerce">
                                <a href="assets/img/portfolio/preview/new-6.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbs/new-img-550x350-7.jpg" alt="portfolio woocommerce" class="img-responsive animated" data-animation="zoomIn" data-animation-delay="100">                                
                            </div>
                            
                            <div class="portfolio-item col-md-3 col-sm-3 col-xs-3 joomla html">
                                <a href="assets/img/portfolio/preview/new-7.jpg" class="magnific-popup">
                                    <span class="glyphicon glyphicon-search hover-bounce-out"></span>
                                </a>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbs/new-img-550x350-8.jpg" alt="portfolio woocommerce" class="img-responsive animated" data-animation="zoomIn" data-animation-delay="200">
                            </div>
       
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Numbers Area
        ===================================== -->
        <div class="container-fluid bg-dark2 pt50 pb50" style="background: url('assets/img/bg/bg-parallax-4.jpg') 100% 50% no-repeat;">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">                        
                            <h1 class="fs-40 font-size-light text-center color-light">                          
                                We are in numbers
                                <small class="heading-desc text-lowercase">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit morbi sagittis.
                                </small>
                            </h1>                 

                        </div>
                    </div>
                    
                    <div class="row">

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="fact">                                    
                                <div class="fact-number timer" data-perc="387">
                                    <span class="factor color-info"></span>
                                </div>                                    
                                <span class="fact-title color-light alpha7">Projects Completed</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="fact">                                    
                                <div class="fact-number timer" data-perc="545">
                                    <span class="factor color-warning"></span>
                                </div>                                    
                                <span class="fact-title color-light alpha7">Happy Clients</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="fact">                                    
                                <div class="fact-number timer" data-perc="750">
                                    <span class="factor color-green"></span>
                                </div>                                    
                                <span class="fact-title color-light alpha7">Positive Feedbacks</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="fact">                                    
                                <div class="fact-number timer" data-perc="950">
                                    <span class="factor color-pasific"></span>
                                </div>                                    
                                <span class="fact-title color-light alpha7">Cups of Coffee</span>
                            </div>
                        </div>

                    </div>               
                </div>
            </div>
        
           
        <!-- Info Area
        ===================================== -->
        <div class="mt70 pb50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="color-black fs-40 font-size-light font-open-sans">
                            Are you ready to be success ?
                        </h2>
                        <p class="color-dark mt20">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.<br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit commodi pariatur magni omnis reiciendis architecto.
                        </p>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="landing-page-3.html#" class="button button-circle button-lg button-grad-blood-mary hover-ripple-out animated" data-animation="zoomIn" data-animation-delay="100">Get Started Today</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Clients Area
        ===================================== -->
        <div id="client" class="pt50 pb20">
            <div class="container">
                <div class="row">
                    
                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/paypal-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
                    </div>
                    <!-- logo client end -->
                    
                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/evernote-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="150">
                    </div>
                    <!-- logo client end -->
                    
                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/microsoft-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="100">
                    </div>
                    <!-- logo client end -->
                    
                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/smashing-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="150">
                    </div>
                    <!-- logo client end -->
                    
                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/mashable-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="200">
                    </div>
                    <!-- logo client end -->
                    
                    <!-- logo client start -->
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brand/guardian-gray.png" alt="client logo" class="img-responsive center-block animated" data-animation="fadeIn" data-animation-delay="300">
                    </div>
                    <!-- logo client end -->
                </div><!-- row end --> 
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="bg-gray pt5 bp10 pl10">Related Articles</h5>
                    </div>
                    <!--Blog Post -->
                    <?php $args=array(
                                'posts_per_page' => 3,);
                        $myquery = new WP_Query($args);
                    ?>
                    <?php 
                        if($myquery->have_posts()): 
                            while($myquery->have_posts()): 
                                $myquery->the_post();?>
                                <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                                    <div class="blog-three">
                                        <h4 class="blog-title"><a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a></h4>
                                        <div class="blog-three-attrib">
                                            <span class="icon-calendar"></span><?php the_time('j-M-Y'); ?> | 
                                            <span class=" icon-pencil"></span><a href="blog-post-read.html#"><?php the_author(); ?></a> |
                                            <a href="blog-post-read.html#" ><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a>
                                        </div>
                                        <img src="
                                        <?php 
                                            if ( has_post_thumbnail() ) { 
                                                echo get_the_post_thumbnail_url();
                                            }
                                        ?>
                                        " class="img-responsive" alt="image">
                                        <p class="mt25">
                                            <?php the_excerpt(); ?>                            
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                    <?php 
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
            </div><!-- container end -->
        </div><!-- section clients end -->
        
<?php
    get_footer();
?>