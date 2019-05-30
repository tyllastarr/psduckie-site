<?php get_header(); ?>

	<div id="content">
		 <h2 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'neo-trendy' ); ?></h2>

		 <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'neo-trendy' ); ?></p>

                    <?php get_search_form(); ?>

                    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
