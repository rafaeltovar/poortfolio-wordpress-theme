<?php _e('Widget Title', 'poortfolio'); ?>:<br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo stripslashes($instance['title']); ?>" />
<br /><br />


<?php _e('Number of posts', 'poortfolio'); ?>: <br />
<small><?php _e('(0 is infinite)', 'poortfolio'); ?></small><br/>
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'num-posts' ); ?>" value="<?php echo stripslashes($instance['num-posts']); ?>" />

<input type="hidden" name="submitted" value="1" />