<?php

if ( post_password_required() )
	return;
?>

<div class="comments">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h4 class="">
			<?php
				printf( _n( 'One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'neo-trendy' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>
	<ol class="commentlist">

		<?php wp_list_comments(); ?>

	</ol>
		
		<?php paginate_comments_links(); ?>


	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments .comments-area -->