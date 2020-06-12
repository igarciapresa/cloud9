<?php
    get_header();
    the_post();
    $mypost_id = $post->ID;
    $cats = get_the_category();
    $catid = array();
    foreach($cats as $cat){
        $catid[]=$cat->term_id;
    }
?>

        <!-- Navigation Area
        ===================================== -->
        <?php get_template_part('nav'); ?>
        <div class="breadcrumbs-custom context-dark bg-overlay-46 single-thumbnail">
            <h2 class="breadcrumbs-custom-title"><?php the_title(); ?></h2>
            <ul class="breadcrumbs-custom-path">
                <li><i class="fa fa-calendar"></i> <?php the_time('j-M-Y'); ?></li>
                <li><i class="fa fa-pencil"></i> <a href="blog-post-read.html#"><?php the_author(); ?></a></li>
                <li><i class="fa fa-comment-o"></i> <a href="blog-post-read.html#"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a></li>
                <li><a href="blog-post-read.html#"><i class="fa fa-thumbs-o-up"></i> </a>150 Likes</li>
                <li>
                    Share:  <a href="blog-post-read.html#"><i class="fa fa-facebook-official"></i></a>
                            <a href="blog-post-read.html#"><i class="fa fa-twitter"></i></a>
                            <a href="blog-post-read.html#"><i class="fa fa-linkedin"></i></a>
                            <a href="blog-post-read.html#"><i class="fa fa-google-plus"></i></a>
                            <a href="blog-post-read.html#"><i class="fa fa-pinterest"></i></a>
                </li>
            </ul>
            <div class="box-position" style="background-image: url(<?php if ( has_post_thumbnail() ) { echo get_the_post_thumbnail_url();} ?>);"></div>
        </div>
        
        <section id="blog" class="section section-md section-first bg-default text-md-left">
            <div class="container">
                
                <div class="row">
                    <!-- Blog Sidebar
                    ===================================== --> 
                    <?php get_sidebar(); ?>
                    <div class="col-md-8 mt25">
                        <div class="blog-three-mini">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            $args = array(
              'nopaging' => false,
              'post_type' => array('post'),
              'posts_per_page' => 3,
              'category__in' => wp_get_post_categories($mypost_id),
              'post__not_in' => array($mypost_id),
              'tax_query' => array(
                    array(
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array(
                            'post-format-gallery',
                            'post-format-video',
                            'post-format-audio',
                            'post-format-image'
                        ),
                        'operator' => 'NOT IN'
                    )
                )
            );
            ?>
        </section>

<?php
    get_footer();
?>