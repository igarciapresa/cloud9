<?php
get_header();
?>
    <!--<div class="preloader">-->
    <!--  <div class="preloader-body">-->
    <!--    <div class="cssload-container"><span></span><span></span><span></span><span></span>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <?php get_template_part('nav'); ?>
        
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
        <div class="swiper-wrapper text-left">
          <div class="swiper-slide context-dark" data-slide-bg="<?php echo get_template_directory_uri(); ?>/assets/images/header1.jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-center justify-content-xxl-start">
                  <div class="col-md-10 col-xxl-6">
                    <div class="slider-modern-box">
                      <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Organic Food</span></h1>
                      <p data-caption-animate="fadeInRight" data-caption-delay="400">Herber provides local citizens and guests of our town with quality organic fruits, vegetables, and other products.</p>
                      <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="400">Read more</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="<?php echo get_template_directory_uri(); ?>/assets/images/header2.jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-center justify-content-xxl-start">
                  <div class="col-md-10 col-xxl-6">
                    <div class="slider-modern-box">
                      <h1 class="slider-modern-title"><span data-caption-animate="slideInLeft" data-caption-delay="0">Quality Control</span></h1>
                      <p data-caption-animate="fadeInRight" data-caption-delay="400">We control the process of farming at Herber to deliver the best organic products to our customers throughout the state.</p>
                      <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="400">Read more</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="<?php echo get_template_directory_uri(); ?>/assets/images/header3.jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-center justify-content-xxl-start">
                  <div class="col-md-10 col-xxl-6">
                    <div class="slider-modern-box">
                      <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Eco-Friendly</span></h1>
                      <p data-caption-animate="fadeInRight" data-caption-delay="400">As the leading organic farm, we maintain an eco-friendly policy of growing and selling healthy food without any additives.</p>
                      <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.html" data-caption-animate="slideInUp" data-caption-delay="400">Read more</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination swiper-pagination-style-2"></div>
      </section>

      <!-- Icons Ruby-->
      <section class="section section-md bg-default section-top-image">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon linearicons-leaf"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="box-icon-ruby-title"><a href="#">Natural &amp; Organic</a></h4>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon linearicons-shovel"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="box-icon-ruby-title"><a href="#">Best Equipment</a></h4>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon linearicons-sun"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="box-icon-ruby-title"><a href="#">Dedicated Team</a></h4>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Trending products-->
      <section class="section section-md bg-default">
        <div class="container">
          <div class="row row-40 justify-content-center">
            <div class="col-sm-8 col-md-7 col-lg-6 wow fadeInLeft" data-wow-delay="0s">
              <div class="product-banner"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vegetables.jpg" alt="" width="570" height="715"/>
                <div class="product-banner-content">
                  <div class="product-banner-inner" style="background-color: rgba(200, 200, 200, .7);">
                    <h3 class="text-secondary-1">organic</h3>
                    <h2 class="text-primary">Vegetables</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-6">
              <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-md-12 col-lg-6">
                  <div class="oh-desktop">
                    <!-- Product-->
                    <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                      <div class="unit flex-row flex-lg-column">
                        <div class="unit-left">
                          <div class="product-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/avocado.jpg" alt="" width="270" height="280"/>
                            <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Add to cart</a></div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <h6 class="product-title"><a href="#">Avocados</a></h6>
                          <div class="product-price-wrap">
                            <div class="product-price product-price-old">$59.00</div>
                            <div class="product-price">$28.00</div>
                          </div><a class="button button-sm button-secondary button-ujarak" href="#">Add to cart</a>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                  <div class="oh-desktop">
                    <!-- Product-->
                    <article class="product product-2 box-ordered-item wow slideInLeft" data-wow-delay="0s">
                      <div class="unit flex-row flex-lg-column">
                        <div class="unit-left">
                          <div class="product-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/corn.jpg" alt="" width="270" height="280"/>
                            <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Add to cart</a></div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <h6 class="product-title"><a href="#">Corn</a></h6>
                          <div class="product-price-wrap">
                            <div class="product-price">$27.00</div>
                          </div><a class="button button-sm button-secondary button-ujarak" href="#">Add to cart</a>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                  <div class="oh-desktop">
                    <!-- Product-->
                    <article class="product product-2 box-ordered-item wow slideInLeft" data-wow-delay="0s">
                      <div class="unit flex-row flex-lg-column">
                        <div class="unit-left">
                          <div class="product-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/artichoke.jpg" alt="" width="270" height="280"/>
                            <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Add to cart</a></div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <h6 class="product-title"><a href="#">Artichokes</a></h6>
                          <div class="product-price-wrap">
                            <div class="product-price">$23.00</div>
                          </div><a class="button button-sm button-secondary button-ujarak" href="#">Add to cart</a>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                  <div class="oh-desktop">
                    <!-- Product-->
                    <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                      <div class="unit flex-row flex-lg-column">
                        <div class="unit-left">
                          <div class="product-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/broccoli.jpg" alt="" width="270" height="280"/>
                            <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Add to cart</a></div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <h6 class="product-title"><a href="#">Broccoli</a></h6>
                          <div class="product-price-wrap">
                            <div class="product-price">$25.00</div>
                          </div><a class="button button-sm button-secondary button-ujarak" href="#">Add to cart</a>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section CTA 2-->
      <section class="section text-center">
        <div class="parallax-container" data-parallax-img="<?php echo get_template_directory_uri(); ?>/assets/images/approach.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
            <div class="container">
              <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">Our Approach</span></h2>
              <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">Our farm strictly combines the traditions of organic farming with the latest innovations to make our products healthy and safe for the clients.</span></p><a class="button button-primary button-icon button-icon-left button-ujarak wow fadeInUp" href="https://www.youtube.com/watch?v=-AhmuMqZB0s" data-lightgallery="item" data-wow-delay=".1s"><span class="icon mdi mdi-play"></span>View presentation</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Team of professionals-->
      <section class="section section-md bg-default">
        <div class="container">
          <div class="oh">
            <h2 class="wow slideInUp" data-wow-delay="0s">Our Team</h2>
          </div>
          <div class="row row-30 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay="0s">
              <!-- Team Classic-->
              <article class="team-classic"><a class="team-classic-figure" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team1.jpg" alt="" width="370" height="406"/></a>
                <div class="team-classic-caption">
                  <h5 class="team-classic-name"><a href="#">Rachel Wilson</a></h5>
                  <p class="team-classic-status">Founder</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <!-- Team Classic-->
              <article class="team-classic"><a class="team-classic-figure" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team2.jpg" alt="" width="370" height="406"/></a>
                <div class="team-classic-caption">
                  <h5 class="team-classic-name"><a href="#">Jill Peterson</a></h5>
                  <p class="team-classic-status">Garden Manager</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <!-- Team Classic-->
              <article class="team-classic"><a class="team-classic-figure" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team3.jpg" alt="" width="370" height="406"/></a>
                <div class="team-classic-caption">
                  <h5 class="team-classic-name"><a href="#">Sam Robinson</a></h5>
                  <p class="team-classic-status">Farmyard Coordinator</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- About us-->
      <section class="section">
        <div class="parallax-container" data-parallax-img="<?php echo get_template_directory_uri(); ?>/assets/images/cajas.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-68">
            <div class="container">
              <div class="row row-lg row-50 justify-content-center border-classic border-classic-big">
                <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay="0s">
                  <div class="counter-creative">
                    <div class="counter-creative-number"><span class="counter">12</span><span class="icon counter-creative-icon fl-bigmug-line-trophy55"></span>
                    </div>
                    <h6 class="counter-creative-title">Awards</h6>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".1s">
                  <div class="counter-creative">
                    <div class="counter-creative-number"><span class="counter">2</span><span class="symbol">k</span><span class="icon counter-creative-icon fl-bigmug-line-up104"></span>
                    </div>
                    <h6 class="counter-creative-title">Products</h6>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".2s">
                  <div class="counter-creative">
                    <div class="counter-creative-number"><span class="counter">679</span><span class="icon counter-creative-icon fl-bigmug-line-sun81"></span>
                    </div>
                    <h6 class="counter-creative-title">Happy Clients</h6>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".3s">
                  <div class="counter-creative">
                    <div class="counter-creative-number"><span class="counter">13</span><span class="icon counter-creative-icon fl-bigmug-line-user143"></span>
                    </div>
                    <h6 class="counter-creative-title">Farmers</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Recent Blog Posts -->
      <?php $args=array('posts_per_page' => 3,);
        $myquery = new WP_Query($args);
      ?>
      <?php 
        if($myquery->have_posts()): ?>
          <section class="section section-md bg-default">
            <div class="container">
              <div class="oh">
                <h2 class="wow slideInUp" data-wow-delay="0s">Latest Posts</h2>
              </div>
              <div class="row row-30 justify-content-center">
            <?php
            while($myquery->have_posts()): 
                $myquery->the_post();?>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay="0s">
                  <!-- Team Classic-->
                  <article class="team-classic"><a href="<?php the_permalink(); ?>"><img src="<?php if ( has_post_thumbnail() ) { echo get_the_post_thumbnail_url();} ?>" alt="image"></a>
                    <div class="posts-classic-caption">
                      <h4 class="team-classic-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <p class="team-classic-status"><?php the_author(); ?></p>
                    </div>
                  </article>
                  <p class="mt25">
                      <?php the_excerpt(); ?>                            
                  </p>
                  <a href="<?php the_permalink(); ?>" class="more-btn">Read More</a>
                  <span class="blog-date"><?php the_time('M j, Y'); ?></span>
                </div>
              <?php endwhile; ?>
              </div>
            </div>
          </section>
      <?php
        endif;
        wp_reset_postdata();
      ?>
      
      <!-- Improve your interior with deco-->
      <section class="section section-md bg-default section-top-image">
        <div class="container">
          <div class="oh h2-title">
            <h2 class="wow slideInUp" data-wow-delay="0s">Our Gallery</h2>
          </div>
          <div class="row row-30" data-lightgallery="group">
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                  <div class="thumbnail-mary-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g1.jpg" alt="" width="370" height="303"/>
                  </div>
                  <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo get_template_directory_uri(); ?>/assets/images/g1.jpg" data-lightgallery="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g1.jpg" alt="" width="370" height="303"/></a>
                    <h4 class="thumbnail-mary-title"><a href="#">Mandarin Oranges</a></h4>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                  <div class="thumbnail-mary-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g2.jpg" alt="" width="370" height="303"/>
                  </div>
                  <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo get_template_directory_uri(); ?>/assets/images/g2.jpg" data-lightgallery="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g2.jpg" alt="" width="370" height="303"/></a>
                    <h4 class="thumbnail-mary-title"><a href="#">Walnuts</a></h4>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInRight" data-wow-delay=".0s">
                  <div class="thumbnail-mary-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g3.jpg" alt="" width="370" height="303"/>
                  </div>
                  <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo get_template_directory_uri(); ?>/assets/images/g3.jpg" data-lightgallery="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g3.jpg" alt="" width="370" height="303"/></a>
                    <h4 class="thumbnail-mary-title"><a href="#">Peppers</a></h4>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                  <div class="thumbnail-mary-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g4.jpg" alt="" width="370" height="303"/>
                  </div>
                  <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo get_template_directory_uri(); ?>/assets/images/g4.jpg" data-lightgallery="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g4.jpg" alt="" width="370" height="303"/></a>
                    <h4 class="thumbnail-mary-title"><a href="#">Cherries</a></h4>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                  <div class="thumbnail-mary-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g5.jpg" alt="" width="370" height="303"/>
                  </div>
                  <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo get_template_directory_uri(); ?>/assets/images/g5.jpg" data-lightgallery="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g5.jpg" alt="" width="370" height="303"/></a>
                    <h4 class="thumbnail-mary-title"><a href="#">Blue Berries</a></h4>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInDown" data-wow-delay=".1s">
                  <div class="thumbnail-mary-figure"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g6.jpg" alt="" width="370" height="303"/>
                  </div>
                  <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo get_template_directory_uri(); ?>/assets/images/g6.jpg" data-lightgallery="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/g6.jpg" alt="" width="370" height="303"/></a>
                    <h4 class="thumbnail-mary-title"><a href="#">Pumpkins</a></h4>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      
<?php
get_footer();
?>