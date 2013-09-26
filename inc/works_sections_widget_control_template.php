<?php _e('Widget Title', 'poortfolio'); ?>:<br />
<input type="text" class="widefat" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo stripslashes($instance['title']); ?>" />
<br /><br />

<input type="hidden" name="submitted" value="1" />