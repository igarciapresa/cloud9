<?php
    global $count;
    $count++;
?>

<tr>
    <th><?php echo $count; ?></th>
    <td><?php  the_time('j M, Y'); ?></td>
    <td><?php the_author(); ?></td>
    <td><a href="<?php echo the_permalink(); ?>"><?php  the_title(); ?></a></td>
</tr>