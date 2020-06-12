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
        <h2 class="breadcrumbs-custom-title">ARCHIVE</h2>
        <br>
        <?php
            if(have_posts()){
                if(is_category()){
                    $title_archives = 'Category Archives for: ' . '<span class="searchwords2">'. single_cat_title('',false).'</span>';
                }elseif (is_tag()){
                    $title_archives = 'Tag Archives for: ' . '<span class="searchwords2">'. single_tag_title('',false).'</span>';
                }elseif(is_day()){
                    $title_archives = 'Daily Archives: ' . '<span class="searchwords">'. get_the_date().'</span>';
                }elseif(is_month()){
                    $title_archives = 'Monthly Archives: ' . '<span class="searchwords">'. get_the_date('F Y').'</span>';
                }elseif(is_year()){
                    $title_archives = 'Yearly Archives: ' . '<span class="searchwords">'. get_the_date('Y').'</span>';
                }
            }
        ?>
        <h4><?php echo $title_archives; ?></h4>
        <div class="box-position" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/archive.jpg)"></div>
    </div>
    <section class="section section-md section-first bg-default">
        <div class="container">
            <div class="row">
            <?php get_sidebar(); ?>
            <div class="col-md-8">
                <?php
                    if (have_posts()):
                ?>
                <table class="col-lg-12 table">
                    <thead class="thead">
                        <tr >
                            <th scope="col">#</th>
                            <th scope="col">Post Date</th>
                            <th scope="col">Post Author</th>
                            <th scope="col">Post Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while(have_posts()):
                            the_post();  
                            get_template_part('templates/content','list');
                            endwhile;
                        ?>
                    </tbody>
                </table>
                <ul class="col-md-12 mb-5 pagination pagination-lg"> <?php 
                            the_posts_pagination(array(
                                 'mid_size' => 2,
                                 'prev_text' => 'Previous',
                                 'next_text' => 'Next',
                                 'screen_reader_text' => ' ',
                                )
                            );
                     ?>
                </ul>
                <?php
                    endif;
                    
                    ?>
            </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
?>