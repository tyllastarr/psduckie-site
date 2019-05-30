<!DOCTYPE html>
<html <?php language_attributes(); ?>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
<?php global $neo_trendy_do_not_duplicate; ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'neo-trendy' ); ?></a>

    <div id="neo-trendy-header" class="masthead" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'neo-trendy-menu-masthead', 'container_class' => 'neo_trendy_menu_class' ) ); ?>

 <!-- Start .header -->
 <div class="header">
    <!-- START HEADER IMAGE AREA -->
        <hgroup>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </hgroup>
<?php $header_image = get_header_image();
        if ( ! empty( $header_image ) ) { ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
            </a>
<?php } // if ( ! empty( $header_image ) )
?>

<!-- END HEADER IMAGE & ADV AREA -->

</div>
<!-- End .header -->

     
</div>
<!-- End #neo_trendy-header .masthead -->    

        <!-- END HEADER -->

<!-- Start .wrap -->
<div class="wrap">