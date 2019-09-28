<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>
<!DOCTYPE html>
<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141671542-1"></script>
		<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'UA-141671542-1');
	</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <base target="_blank"> -->
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Lisa Savoie's Portfolio for LS Codes, LLC">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="container">
		<div class="page-header clearfix">
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<span class="title"><?php bloginfo('name'); ?></span>
			</a>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</header>

	<div id="main" class="site-main clearfix">
