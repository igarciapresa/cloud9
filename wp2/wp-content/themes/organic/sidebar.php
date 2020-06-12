<div id="sidebar" class="col-md-4 mt50 animated" data-animation="fadeInRight" data-animation-delay="250">
            
    <!-- Search
    ===================================== -->
    <div>
        <?php get_search_form(); ?>
    </div>

    <!-- Widget tag cloud
    ===================================== -->
    <div class="list"> 
        <h5>Tag Cloud</h5>
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets')) : ?>
        <div class="warning">Sorry, no widgets installed for this theme. Go to the admin area and drag your widgets into the sidebar.</div>
        <?php endif; ?>
    </div>
    
    <!-- Latest Posts
    ===================================== -->
    <div class="list">
        <h5>Latest Posts</h5>
        <ul>
        <?php $args = array('type'=>'postbypost', 'limit'=>4);
        wp_get_archives($args);
        ?>
        </ul>
    </div>
    
    <!-- Authors
    ===================================== -->
    <div class="list">
        <h5>Authors</h5>
        <ul class="authors_list">
        <?php
            $args = array(
                'optioncount' => 1,
                'exclude_admin' => 0,
                'hide_empty' => 0,
            );
            wp_list_authors($args);
        ?>
        </ul>
    </div>
    
    <!-- Categories
    ===================================== -->
    <div class="list">
        <h5>Categories</h5>
        <ul>
        <?php
            wp_list_categories('title_li');
        ?>
        </ul>
    </div>

    <!-- Pages
    ===================================== -->
    <div class="list">
        <h5>Pages</h5>
        <ul>
        <?php
            wp_list_pages('title_li');
        ?>
        </ul>
    </div>                  
    
</div>