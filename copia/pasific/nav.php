<nav class="navbar navbar-pasific navbar-mp megamenu navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand navbar-brand-img page-scroll ml20" href="<?php echo get_option('home'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-default-img.png" alt="logo">
            </a>
        </div>

        <div class="navbar-collapse collapse navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo get_option('home'); ?>" class="color-light">Home</a></li>
                <li><a href="<?php echo get_option('blog'); ?>" class="color-light">Blog</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('races')->ID); ?>" class="color-light">Races</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('private')->ID); ?>" class="color-light">Private Zone</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('contact')->ID); ?>" class="color-light">Contact</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('archives')->ID); ?>" class="color-light">Archives</a></li>
            </ul>
        </div>
    </div>
</nav>