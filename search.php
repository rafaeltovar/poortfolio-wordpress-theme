<?php
/**
 *
 * Search Template
 */
 
get_header(); ?>

<div class="large-9 columns" role="main">
	<h4><?php printf( __( 'Search: %s', 'poortfolio' ), '<em>' . get_search_query() . '</em>' ); ?></h4>
	<hr />
	
	<?php if ( have_posts() ) : // resultados ?>
    <ul class="search">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'search' ); ?>
	<?php endwhile; ?>
    </ul>
				
	<!-- pagination -->
	<div class="pagination-centered">
		<?php poortfolio_pagination(); ?>
	</div>

	<?php else : // NO se ha encontrado nada?>
	<header>
        <h1><?php _e( 'No se han encontrado resultados', 'poortfolio' ); ?></h1>
        <p><?php _e( 'No se han encontrado resultados con su b&uacute;squeda, pruebe con otro t&eacute;rmino.', 'poortfolio' ); ?></p>
    </header>
    <?php endif ;?>
    
</div><!--/.large-9 -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>