<?php
/*
Template Name: Author
*/
get_header();
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <?php get_template_part('nav'); ?>
    </header>
    <div class="breadcrumbs-custom context-dark bg-overlay-46 single-thumbnail small-header">
        <h2 class="breadcrumbs-custom-title"><?php echo get_the_author_meta('display_name',$curauth->id) ?></h2>
        <br>
        <h4><?php echo get_author_role($curauth->id) ?></h4>
        <div class="box-position" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/search.jpg)"></div>
    </div>
    <section class="section section-md section-first bg-default">
        <div class="container">
    
            <article class="box-contacts author-info">
                <img src="<?php echo get_avatar_url($curauth->id) ?>" alt="image">
                <div>
                    <h3><?php echo get_the_author_meta('display_name',$curauth->id) ?></h3>
                    <?php if(get_the_author_meta('facebook',$curauth->id)!=''){?> <a href="<?php the_author_meta('facebook',$curauth->id) ?>" class="social"><img src="<?php echo get_template_directory_uri()?>/assets/images/facebook.png" alt="facebook"></a><?php }; ?>
                    <?php if(get_the_author_meta('instagram',$curauth->id)!=''){?> <a href="<?php the_author_meta('instagram',$curauth->id) ?>" class="social"><img src="<?php echo get_template_directory_uri()?>/assets/images/instagram.png" alt="instagram"></a><?php }; ?>
                    <?php if(get_the_author_meta('twitter',$curauth->id)!=''){?> <a href="<?php the_author_meta('twitter',$curauth->id) ?>" class="social"><img src="<?php echo get_template_directory_uri()?>/assets/images/twitter.png" alt="twitter"></a><?php }; ?>
                    <p><?php the_author_meta('description',$curauth->id) ?></p>
                </div>
            </article>
            
            <!-- Recent Author Posts -->
            <?php 
            $args=['posts_per_page' => 3,
                             'author' => $curauth->id,
                             'post_type' => 'post',
                        ];
            $myquery = new WP_Query($args);
            ?>
            <?php 
            if($myquery->have_posts()): ?>
              <section class="section section-md bg-default">
                <div class="container">
                  <div class="oh">
                    <h2 class="wow slideInUp" data-wow-delay="0s"><?php echo get_the_author_meta('display_name',$curauth->id) ?> Latest Posts</h2>
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
        </div>
    </section>
</div>
<?php
get_footer();
?>