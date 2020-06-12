<div id="sidebar" class="col-md-4 mt50 animated" data-animation="fadeInRight" data-animation-delay="250">           
    <!-- Search
    ===================================== -->
    <div class="pr25 pl25 clearfix"> 
        <?php get_search_form() ?>
    </div>

    <!-- Widget tag cloud
    ===================================== -->
    <div class="pr25 pl25 clearfix"> 
        <h4>Tag Cloud</h4>
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets')) : ?>
        <div class="warning">Sorry, no widgets instaled for this theme. Go to the admin area and drag your widgets into the sidebar.</div>
        <?php endif; ?>
    </div>
    
    <!-- Custom Posts
    ===================================== -->
    <div class="mt25 pr25 pl25 clearfix">
        <h4>Training Plans</h4>
        <ul>
            <?php $args = array('type'=>'postbypost', 'post_type'=>'my_trips', 'post_per_page'=>5);
            wp_get_archives($args);
            ?>
        </ul>
    </div>

    
    <!-- Latest Posts
    ===================================== -->
    <div class="mt25 pr25 pl25 clearfix">
        <h4>Latest Posts</h4>
        <?php $args = array('type'=>'postbypost', 'limit'=>4);
        wp_get_archives($args);
        ?>
    </div>
    
    <!-- Authors
    ===================================== -->
    <div class="mt25 pr25 pl25 clearfix">
        <h4>Authors</h4>
        <ul class="authors_list">
        <?php
            $args = array(
                'optioncount' => 1,
                'hide_empty' => 0,
            );
            wp_list_authors($args);
        ?>
        </ul>
    </div>
    
    
    <!-- Categories
    ===================================== -->
    <div class="mt25 pr25 pl25 clearfix">
        <h4>Categories</h4>
        <ul>
        <?php
            wp_list_categories('title_li');
        ?>
        </ul>
    </div>

    <!-- Pages
    ===================================== -->
    <div class="mt25 pr25 pl25 clearfix">
        <h4>Categories</h4>
        <ul>
        <?php
            wp_list_pages('title_li');
        ?>
        </ul>
    </div>                  
    
</div>