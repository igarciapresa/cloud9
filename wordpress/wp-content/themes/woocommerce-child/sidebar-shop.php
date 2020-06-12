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
    
</div>