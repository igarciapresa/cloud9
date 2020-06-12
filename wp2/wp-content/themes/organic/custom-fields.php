<?php

/**
* Add new fields for user skills in user profile
*/
function add_custom_fields($user){ ?>

<h3>Profile Picture</h3>
<table class="form-table">
    <tr>
        <th><label for="userpic">User Picture url</label></th>
        <td>
            <input type="text" name="userpic" id="userpic" value="<?php echo esc_attr(get_the_author_meta('userpic',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your user picture url.</span>
        </td>
    </tr>
</table>

<h3>Social Media Profiles</h3>
<table class="form-table">
    <tr>
        <th><label for="facebook">Facebook</label></th>
        <td>
            <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr(get_the_author_meta('facebook',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your facebook profile url.</span>
        </td>
        <th><label for="instagram">Instagram</label></th>
        <td>
            <input type="text" name="instagram" id="instagram" value="<?php echo esc_attr(get_the_author_meta('instagram',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your instagram profile url.</span>
        </td>
        <th><label for="twitter">Twitter</label></th>
        <td>
            <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your twitter profile url.</span>
        </td>
    </tr>
</table>

<h3>User Skills</h3>
<table class="form-table">
    <tr>
        <th><label for="skill1">Skill 1</label></th>
        <td>
            <input type="text" name="skill1" id="skill1" value="<?php echo esc_attr(get_the_author_meta('skill1',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your first skill.</span>
        </td>
        <td>
            <input type="text" name="skill1v" id="skill1v" value="<?php echo esc_attr(get_the_author_meta('skill1v',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your first skill value.</span>
        </td>
    </tr>
</table>
<table class="form-table">
    <tr>
        <th><label for="skill2">Skill 2</label></th>
        <td>
            <input type="text" name="skill2" id="skill2" value="<?php echo esc_attr(get_the_author_meta('skill2',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your second skill.</span>
        </td>
        <td>
            <input type="text" name="skill2v" id="skill2v" value="<?php echo esc_attr(get_the_author_meta('skill2v',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your second skill value.</span>
        </td>
    </tr>
</table>
<table class="form-table">
    <tr>
        <th><label for="skill3">Skill 3</label></th>
        <td>
            <input type="text" name="skill3" id="skill3" value="<?php echo esc_attr(get_the_author_meta('skill3',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your third skill.</span>
        </td>
        <td>
            <input type="text" name="skill3v" id="skill3v" value="<?php echo esc_attr(get_the_author_meta('skill3v',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your third skill value.</span>
        </td>
    </tr>
</table>
<table class="form-table">
    <tr>
        <th><label for="skill4">Skill 4</label></th>
        <td>
            <input type="text" name="skill4" id="skill4" value="<?php echo esc_attr(get_the_author_meta('skill4',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your fourth skill.</span>
        </td>
        <td>
            <input type="text" name="skill4v" id="skill4v" value="<?php echo esc_attr(get_the_author_meta('skill4v',$user->ID)) ?>">
            <br />
            <span class="description">Please enter your fourth skill value.</span>
        </td>
    </tr>
</table>

<?php
}
add_action('edit_user_profile','add_custom_fields');
add_action('show_user_profile','add_custom_fields');

/**
 * Save additional profile skills fields.
 */
function save_custom_fields($user_id){
    if(!current_user_can('edit_user',$user_id)){
        return false;
    } else{
        update_user_meta($user_id,'userpic',$_POST['userpic']);

        update_user_meta($user_id,'facebook',$_POST['facebook']);
        update_user_meta($user_id,'instagram',$_POST['instagram']);
        update_user_meta($user_id,'twitter',$_POST['twitter']);
    
        update_user_meta($user_id,'skill1',$_POST['skill1']);
        update_user_meta($user_id,'skill1v',$_POST['skill1v']);
    
        update_user_meta($user_id,'skill2',$_POST['skill2']);
        update_user_meta($user_id,'skill2v',$_POST['skill2v']);
    
        update_user_meta($user_id,'skill3',$_POST['skill3']);
        update_user_meta($user_id,'skill3v',$_POST['skill3v']);
    
        update_user_meta($user_id,'skill4',$_POST['skill4']);
        update_user_meta($user_id,'skill4v',$_POST['skill4v']);
    }
    
}

add_action('personal_options_update','save_custom_fields');
add_action('edit_user_profile_update','save_custom_fields');
?>