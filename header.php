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

		<?php wp_head(); ?>

</head>
<body>