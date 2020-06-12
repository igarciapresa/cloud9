<?php
/*
Template Name: Private
*/
get_header();

if(is_user_logged_in()){
    
} else{?>
    <div >
        <?php
        echo wp_login_form();
        echo wp_register();
        ?>
    </div>
<?php
}

get_footer();
?>