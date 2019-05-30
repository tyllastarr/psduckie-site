<?php get_header(); ?>

<div id="content">


<!-- Loop -->

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header-single">
        <span span class="title-single"><h2><?php the_title(); ?></h2><hr /></span>
    </div><!--end post header-->
    <span class="date"><?php _e( 'Posted On', 'neo-trendy' ); ?> <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>"><?php the_time( 'M j Y' ); ?></a></span>
    <span class="author"><?php _e( 'by', 'neo-trendy' ); ?> <?php the_author_posts_link(); ?></span>
    <div class="entry-single-description clear">

        <div class="entry-single-content">

            <?php the_content(); ?>

        </div>
        
        <?php wp_link_pages(); ?>

        <div class="post-footer-single">
            <span class="postTags"><?php _e( 'Tagged with', 'neo-trendy' ); ?>: <?php the_tags( ' ', ', ', ' ' ); ?></span> <span class="sep">/</span> 
            <span class="postCategory"><?php _e( 'Category', 'neo-trendy' ); ?>: <?php the_category( ', ' ); ?></span> <span class="sep">/</span> 
            <?php comments_popup_link( __( 'Leave a comment', 'neo-trendy' ), __( '1 Comment', 'neo-trendy' ), __( '% Comments', 'neo-trendy' ) ); ?>
            <span class="post-footer-edit-single"><?php edit_post_link( __(' <span class="sep">/</span> EDIT', 'neo-trendy' ) ); ?></span>
        </div>

        <p class="last-updated"><?php _e( 'Last Updated on:', 'neo-trendy' ); ?> <span class="last-updated-by"><u><?php the_modified_time('F jS, Y'); ?></u></span> <?php _e( 'at', 'neo-trendy' ); ?> <span class="last-updated-by"><u><?php the_modified_time('g:i a'); ?></u></span>, <?php _e( 'by', 'neo-trendy' ); ?> <span class="last-updated-by"><u><?php the_modified_author(); ?></span></u> </p><br />

        <!--BEGIN .author-bio-->
            
        <div class="author-bio">
            <p><b><?php _e( 'Written by', 'neo-trendy' ); ?> <i><?php the_author_link(); ?></i></b></p>
            <p><?php echo get_avatar( get_the_author_meta('email'), '90' ); ?><?php the_author_meta('description'); ?></p><br />
        </div>
        <!--END .author-bio-->

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
</div><!--end #content-->
<?php else : ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>