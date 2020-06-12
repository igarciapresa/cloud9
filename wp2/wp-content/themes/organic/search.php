<?php
/*
Template Name: Archives
*/
get_header();
?>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <?php get_template_part('nav'); ?>
    </header>
    <div class="breadcrumbs-custom context-dark bg-overlay-46 single-thumbnail small-header">
        <h2 class="breadcrumbs-custom-title">SEARCH</h2>
        <br>
        <h4>Results for: <?php the_search_query(); ?></h4>
        <div class="box-position" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/search.jpg)"></div>
    </div>
    <section class="section section-md section-first bg-default">
        <div class="container">
            <?php if (have_posts()): ?>
            <table class="table search-table">
                <thead>
                    <tr >
                        <th>#</th>
                        <th>Published on</th>
                        <th>Author</th>
                        <th>Post Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while(have_posts()):
                        the_post();  
                        get_template_part('templates/content','list');
                    endwhile;
                    ?>
                    </ul>
                    <?php 
                    endif;
                    wp_reset_postdata();
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?php
get_footer();
?>