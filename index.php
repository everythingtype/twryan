<?php get_header(); ?>
<div class="page">	

	<div id="header">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<?php wp_nav_menu( array('theme_location' => 'navigation' )); ?>
	</div>
	
	<div class="content">

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
					<h2>
						<?php if ( !is_single() && !is_page() ) { ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php } ?>
							<?php the_title(); ?>
						<?php if ( !is_single() && !is_page() ) { ?></a><?php } ?>
					</h2>
					<p class="date"><?php the_time('F j, Y'); ?></p>

					<?php the_content(); ?>

			<?php endwhile; ?>

		<?php else : ?>
			<p>Page not found.</p>
		<?php endif; ?>
	</div>

</div>
<?php get_footer(); ?>