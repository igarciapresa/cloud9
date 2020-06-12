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
        <!-- Subheader Area
        ===================================== -->
        <header class="bg-grad-stellar mt70">

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100">Blog Post Read<small class="color-light alpha7">some notes.</small></h3>
                    </div>
                    <div class="col-md-6 text-right pt35">
                        <ul class="breadcrumb">
                            <li><a href="blog-post-read.html#">Home</a></li>
                            <li><a href="blog-post-read.html#">Blog Page</a></li>
                            <li><a href="blog-post-read.html#">Blog Posts</a></li>
                            <li>Blog Post Read</li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>
        
        <div id="blog" class="pt20 pb50">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-8 mt25">
                        <div class="blog-three-mini">
                            <h2 class="color-dark"><a href="blog-post-read.html#"><?php the_post(); the_title(); ?></a></h2>
                            <div class="blog-three-attrib">
                                <div><i class="fa fa-calendar"></i><?php the_time('j-M-Y'); ?></div> | 
                                <div><i class="fa fa-pencil"></i><a href="blog-post-read.html#"><?php the_author(); ?></a></div> | 
                                <div><i class="fa fa-comment-o"></i><a href="blog-post-read.html#"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a></div> | 
                                <div><a href="blog-post-read.html#"><i class="fa fa-thumbs-o-up"></i></a>150 Likes</div> | 
                                <div>
                                    Share:  <a href="blog-post-read.html#"><i class="fa fa-facebook-official"></i></a>
                                            <a href="blog-post-read.html#"><i class="fa fa-twitter"></i></a>
                                            <a href="blog-post-read.html#"><i class="fa fa-linkedin"></i></a>
                                            <a href="blog-post-read.html#"><i class="fa fa-google-plus"></i></a>
                                            <a href="blog-post-read.html#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>

                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <!-- Blog Sidebar
                ===================================== --> 
                <?php get_sidebar(); ?>
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
        </div>

<?php
    get_footer();
?>