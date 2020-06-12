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
        <h2 class="breadcrumbs-custom-title">ARCHIVES</h2>
        <div class="box-position" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/archives.jpg)"></div>
    </div>
    <section class="section section-md section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts archives-container">
                <div class="box-contacts-body archives-card">
                  <h4>Latest Posts</h4>
                    <ul>
                        <?php $query = new WP_Query( 'posts_per_page=5' );
                            while ($query -> have_posts()) : $query -> the_post();
                        ?>
             
                        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
             
                        <?php 
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </ul>
                </div>
              </article>
            </div>
            
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts archives-container">
                <div class="box-contacts-body archives-card">
                  <h4>Authors</h4>
                    <?php
                        $args = array(
                            'orderby'     => 'post_count',
                            'order'     => 'DESC',
                            'exclude_admin' => 0, // Para que no excluya los posts del admin
                            'optioncount' => 1,
                            'hide_empty'  => 0,
                        );
                        wp_list_authors($args);
                    ?>
                </div>
              </article>
            </div>
            
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts archives-container">
                <div class="box-contacts-body archives-card">
                  <h4>Categories</h4>
                    <?php
                        wp_list_categories('title_li');
                    ?>
                </div>
              </article>
            </div>
            
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts archives-container">
                <div class="box-contacts-body archives-card">
                  <h4>Tags</h4>
                    <?php get_post_tags(); ?>
                </div>
              </article>
            </div>
            
            <?php   
            $args = array(
                'role__in' => ['author','editor','administrator'],
                'fields' => ['display_name','ID']); //podemos añadirle tambien 'role__in' => ['author','editor'].
                $users = get_users($args);
                foreach($users as $user){
                    
            ?> 
                <div class="col-sm-8 col-md-6 col-lg-4">
                  <article class="box-contacts archives-container">
                    <div class="box-contacts-body archives-card">
                    <h4>Posts by <?php echo $user->display_name ?></h4>
                      <ul>
                      <?php 
                          $posts = get_posts(['author' => $user->ID]);
                          foreach($posts as $post){
                              echo '<li><a href="' . get_the_permalink() .'">' . $post->post_title . '</a></li>';
                          }
                      ?>
                      </ul>
                    </div>
                  </article>
                </div>
                <?php } ?>
                
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts archives-container">
                <div class="box-contacts-body archives-card">
                  <h4>Daily Posts</h4>
                    <?php wp_get_archives(['type'=>'daily']); ?>
                </div>
              </article>
            </div>
            
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts archives-container">
                <div class="box-contacts-body archives-card">
                  <h4>Monthly Posts</h4>
                    <?php wp_get_archives(['type'=>'monthly']); ?>
                </div>
              </article>
            </div>
            
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts archives-container">
                <div class="box-contacts-body archives-card">
                  <h4>Yearly Posts</h4>
                    <?php wp_get_archives(['type'=>'yearly']); ?>
                </div>
              </article>
            </div>
          </div>
            
        </div>
    </section>
</div>
<?php
get_footer();
?>