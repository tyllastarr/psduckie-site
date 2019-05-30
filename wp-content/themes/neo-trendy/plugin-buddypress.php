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

    </div><!--end entry--> <!--end post footer-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>