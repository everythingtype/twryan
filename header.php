<!doctype html>  
<!--[if lte IE 8]> <html class="legacy"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php 
		wp_title( '&mdash;', true, 'right' );
		bloginfo( 'name' ); 
		$site_description = get_bloginfo( 'description', 'display' );

		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' &mdash; ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
		?></title>
	
		<meta name="author" content="http://www.everything-type-company.com, http://martyspellerberg.com" />

		<!-- Fav Icons: Browser, iOS, Windows 8 -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon.ico">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-72.png" />
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-57.png" />
		<meta name="application-name" content="<?php bloginfo( 'name' ); ?>"/> 
		<meta name="msapplication-TileColor" content="#ffffff"/> 
		<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-144.png"/>

		<?php wp_head(); ?>

</head>
<body>