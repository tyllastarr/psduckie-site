<?php get_header(); ?>

<div id="content">


<!-- Loop -->

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="post-header">
        <span class="title"><h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e( 'Go to this Article', 'neo-trendy' ); ?> : <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></span>
        <span class="date"><?php _e( 'Posted On', 'neo-trendy' ); ?> <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>"><?php the_time( 'M j Y' ); ?></a></span>
        <span class="author"><?php _e( 'by', 'neo-trendy' ); ?> <?php the_author_posts_link(); ?></span>

     <div class="entry clear">
        <?php the_post_thumbnail(); ?>

        <div class="excerpt-pc">
            <?php the_excerpt(); ?>
        </div>

        <?php wp_link_pages(); ?>

        <div class="post-footer-index">
            <span class="postTags"><?php _e( 'Tagged with', 'neo-trendy' ); ?>: <?php the_tags( ' ', ', ', ' ' ); ?></span> <span class="sep">/</span> 
            <span class="postCategory"><?php _e( 'Category', 'neo-trendy' ); ?>: <?php the_category( ', ' ); ?></span> <span class="sep">/</span> 
            <?php comments_popup_link( __( 'Leave a comment', 'neo-trendy' ), __( '1 Comment', 'neo-trendy' ), __( '% Comments', 'neo-trendy' ) ); ?>
            <span class="post-footer-edit-index"><?php edit_post_link( __(' <span class="sep">/</span> EDIT', 'neo-trendy' ) ); ?></span>
        </div>
        <div class="divider">
            <br /><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/images/end.png" />
        </div>
     </div><!--end entry--> <!--end post footer-->
    </div> <!--end post header-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <?php the_posts_pagination(); ?>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>