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
        
        <?php $args = array(
            'nopaging' => false,
            'post_type' => array('post'),
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_format',
                    'field' => 'slug',
                    'terms' => array(
                        'post-format-gallery',
                        'post-format-image',
                        'post-format-quote',
                        'post-format-video'
                    ),
                    'operator' => 'NOT IN'   
                )
            )
        );
        
        $custom_query = new WP_QUery($args);
        if($custom_query->have_posts()) :
          $custom_query->the_post();
          $post_destacado_ID = $post->ID;
        ?>
        <section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
            <div class="swiper-wrapper text-left">
              <div class="swiper-slide context-dark c" data-slide-bg="<?php echo get_the_post_thumbnail_url() ?>">
                <div class="swiper-slide-caption">
                  <div class="container">
                  <h1 class="slider-modern-title"><?php echo the_title() ?></h1>
                  <p data-caption-animate="fadeInRight" data-caption-delay="400"><?php the_excerpt() ?></p>
                  <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="<?php echo get_the_permalink() ?>" data-caption-animate="slideInLeft" data-caption-delay="400">Read more</a></div>
                </div>
                </div>
              </div>
            </div>
        </section>
        <?php
        else: echo "No posts found";
        endif;
        wp_reset_postdata();
        ?>
        <section class="section section-md bg-default section-top-image blog-container">
          <div class="container">
          <div class="row">
            <!-- Blog Sidebar
            ===================================== --> 
            <?php 
            get_sidebar(); 
            $paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => array('post'),
                'posts_per_page' => 2,
                'post__not_in' => array($post_destacado_ID),
                'paged' => $paged,
                'nopaging' => false,
            );
            $new_query = new WP_QUery($args);
            if ($new_query->have_posts()):
            ?>
            
            <div class="col-md-8">
              <?php
              while($new_query->have_posts()):
                  $new_query->the_post();
              ?>
              <article class="box-contacts blog-post">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="image">
                <div>
                  <h3><?php echo the_title() ?></h3>
                  <h5>by <?php the_author(); ?></h5>
                  <p><?php the_excerpt() ?></p>
                  <a href="<?php the_permalink(); ?>" class="more-btn">Read More</a>
                </div>
              </article>
              <?php
              endwhile;
              ?>
              <?php
              the_posts_pagination(array(
                  'mid_size' => 2,
                  'prev_text' => 'Previous Page',
                  'next_text' => 'Next Page',
                  'screen_reader_text' => 'Pages:'
              ));
              ?>
            </div>
            <?php
            endif;
            ?>
          </div>
          </div>
        </section>
    </div>
<?php
get_footer();
?>