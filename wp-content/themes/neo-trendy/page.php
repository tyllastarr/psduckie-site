<?php get_header(); ?>
<div id="content">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header-single">
        <span span class="title-single"><h2><?php the_title(); ?></h2></span>
    </div><!--end post header-->
    <div class="entry-single clear">
        <div class="entry-single-content">

            <?php the_content(); ?>

        </div>
        
        <?php wp_link_pages(); ?>

        <div class="post-footer-single">
            <?php comments_popup_link( __( 'Leave a comment', 'neo-trendy' ), __( '1 Comment', 'neo-trendy' ), __( '% Comments', 'neo-trendy' ) ); ?>
            <?php edit_post_link( __(' <span class="sep">/</span> EDIT', 'neo-trendy' ) ); ?>
        </div>
        <p class="last-updated"><?php _e( 'Last Updated on:', 'neo-trendy' ); ?> <span class="last-updated-by"><u><?php the_modified_time('F jS, Y'); ?></u></span> <?php _e( 'at', 'neo-trendy' ); ?> <span class="last-updated-by"><u><?php the_modified_time('g:i a'); ?></u></span>, <?php _e( 'by', 'neo-trendy' ); ?> <span class="last-updated-by"><u><?php the_modified_author(); ?></span></u> </p><br />
    </div><!--end entry--> <!--end post footer-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>



    <div>
            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template( '/comments.php' );
                endif;
            ?>
    </div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>