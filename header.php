<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package edg Portfolio
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" />

<!-- Fonts CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/fonts.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	
<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Back to Top CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/back-to-top.css" rel="stylesheet">

<!-- FontAwesome Icons -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">


<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'edg_portfolio' ); ?></a>
	
	<!-- HEADER
	================================================== -->

	<!-- NAVBAR -->
    <div class="navbar-wrapper">

  <div class="navbar navbar-default">
  
    <div class="container">
      <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img style="width:70px;" src="http://ericadeguzman.com/assets/logo.svg"></a>

      </div>
	<?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'primary',
							'container'			=> 'nav',
							
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'		=> 'nav navbar-nav navbar-right',
							 //Process nav menu using our custom nav walker
 							 'walker' => new wp_bootstrap_navwalker())
							
						);
					?>

    </div><!--/container--> 
</div><!--/navbar--> 
  
</div>   <!--/wrapper--> 
<!-- END NAVBAR -->

	