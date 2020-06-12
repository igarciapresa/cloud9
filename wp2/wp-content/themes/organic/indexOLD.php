<?php
    get_header();
?>


<!-- Navigation Area
===================================== -->
<?php get_template_part('nav'); ?>

<?php
/* Loop del post destacado */
$args = array(
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
        
<div class="row">
    <?php $args=array(
                'posts_per_page' => 1,);
        $myquery = new WP_Query($args);
    ?>
</div>

<nav>
    <ul class="pagination pagination-lg">
        <?php
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => 'Previous Page',
            'next_text' => 'Next Page',
            'screen_reader_text' => 'Pages:'
        )); ?>
        ?>
    </ul>
</nav>
        
<?php
    get_footer();
?>