<?php get_header(); ?>
<div class="content">

    
            <?php if ( is_active_sidebar( 'static-area' ) ) : ?>
                <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'static-area' ); ?>
                </div><!-- #secondary -->
            <?php endif; ?>


    

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
        <span class="date"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/images/cal.png" /> <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>"><?php the_time( 'M j Y' ); ?></a></span>
        <span class="author"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/images/aut.png" /> <?php the_author_posts_link(); ?></span>
        <span class="postCategory"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/images/cat.png" /> <?php the_category( ', ' ); ?></span>
        <span class="title"><h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e( 'Go to this Article', 'neo-trendy' ); ?> : <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></span>
<hr />

    <!--end post header-->
    <div class="entry clear">
        <?php the_post_thumbnail(); ?>

        <div class="excerpt-pc">
            <?php the_excerpt(); ?>
        </div>

        <?php wp_link_pages(); ?>

        <div class="post-footer-index">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e( 'Read the Article', 'neo-trendy' ); ?> : <?php the_title_attribute(); ?>"><?php _e( 'Read the Article', 'neo-trendy' ); ?></a>
            
        </div>
        
    </div><!--end entry--> <!--end post footer-->
    </div>
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