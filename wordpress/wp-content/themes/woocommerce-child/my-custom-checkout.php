<?php
/*
Template Name: My Custom Checkout
*/
?>

<?php
get_header('shop');

get_template_part('nav');
?>

<div class="container">
    <div class="row">
        <div class="col-md8">
            <?php echo do_shortcode('[woocommerce_checkout]'); ?>
        </div>
        <div class="col-md-4">
            <?php ge_sidebar('shop'); ?>
        </div>
    </div>
</div>

<?php
get_footer('shop');
?>