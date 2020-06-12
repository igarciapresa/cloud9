<?php
    get_header();
?>

<?php
$total_results = $wp_the_query->found_posts;
$found = 'No Posts Found';
if($total_results>1){
    $found = $total_results.' Posts Found';
} else if($total_results=1){
    $found = $total_results.' Post Found';
}
echo '<h4>'.$found.'</h4>';

if(have_posts()){
    if(is_category()){
        $title_archives = 'Category Archives For: ' . '<span>' . single_cat_title('',false) . '</span>';
    } else if(is_tag()){
        $title_archives = 'Tag Archives For: ' . '<span>' . single_tag_title('',false) . '</span>';
    } else if(is_day()){
        $title_archives = 'Daily Archives For: ' . '<span>' . get_the_date() . '</span>';
    } else if(is_month()){
        $title_archives = 'Monthly Archives For: ' . '<span>' . get_the_date('F Y') . '</span>';
    } else if(is_year()){
        $title_archives = 'Yearly Archives For: ' . '<span>' . get_the_date('Y') . '</span>';
    } else{
        $title_archives = 'Archives';
    }
    echo '<h4>'.$title_archives.'</h4>';
}
?>
<div class="row">
    <table class="col-md-8 mt25">
        <thead>
            <tr>
                <th>#</th>
                <th>Published on</th>
                <th>Author</th>
                <th>Post Title</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while(have_posts()) : the_post();
                get_template_part('content','list');
            endwhile;
            ?>
        </tbody>
    </table>
    <!-- Sidebar
    ===================================== --> 
    <?php get_sidebar(); ?>
</div>


<?php
    get_footer();
?>