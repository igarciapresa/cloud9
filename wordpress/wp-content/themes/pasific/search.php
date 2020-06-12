<?php
    get_header();
?>

<?php
$total_results = $wp_the_query->found_posts;

if(have_posts()){
    $title_search = 1;
    echo $title_archives;
}
?>

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

<?php
    get_footer();
?>