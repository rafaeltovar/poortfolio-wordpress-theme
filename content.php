<?php
/**
 * Content
 *
 * Displays content shown in the 'index.php' loop, default for 'standard' post format
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<hgroup>
			<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'poortfolio' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</hgroup>
	</header>

	<?php the_content(__('Continue Reading...', 'poortfolio')); ?>
	
	<?php if ( function_exists( 'the_msls' ) ): ?><p><?php the_msls(); ?></p><?php endif; ?>
	
	<div class="meta panel radius">
		<p>
			<i class="icon-info-sign"></i> <?php _e('Written by', 'poortfolio'); ?> <?php the_author_link(); ?> <?php _e('on', 'poortfolio'); ?> <?php the_time(get_option('date_format')); ?> 
			 | <i class="icon-bookmark-empty"></i> <?php the_category(', '); ?> | <a href="<?php the_permalink(); ?>#comments"><i class="icon-comments-alt"></i> <?php echo get_comments_number(); ?></a><?php the_tags('<br/><i class="icon-tags"></i> <span class="radius secondary label">','</span> <span class="radius secondary label">','</span>'); ?>		</p>
	</div>
	<hr/>

</article>