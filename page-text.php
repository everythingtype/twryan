<?php /* 
Template Name: Text Page 
*/ ?>

<?php get_header(); ?>

<div class="page">	

	<div id="header">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<?php wp_nav_menu( array('theme_location' => 'navigation' )); ?>
	</div>
	
	<?php if ( is_page('contact') ) : ?>
		<div class="content">
	<?php else : ?>
		<div class="content textpage">
	<?php endif; ?>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>