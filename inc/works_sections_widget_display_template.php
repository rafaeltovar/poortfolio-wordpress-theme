<?php if($parent==0): ?>
	<h4 class="section-title"><?php echo $category->name; ?></h4>

<?php elseif(sizeof($posts)>0): ?>

<ul class="works-list">
	<li class="section-title"><?php echo $category->name; ?></li>
	<?php foreach($posts as $post): ?>
	<li <?php echo ($current==$post->ID? "class=\"active\"": ''); ?>>
		<a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a>
	</li>
	<?php endforeach;  ?>
</ul>

<?php endif; ?>