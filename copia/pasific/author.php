<?php
    get_header();

    $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>

<div class="row">
    
    <!-- Sidebar
    ===================================== --> 
    <?php get_sidebar(); ?>
</div>

<?php
    get_footer();
?>