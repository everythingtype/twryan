<?php get_header(); ?>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<div id="projectheader" class="pinned">

					<div class="navblock">

						<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
						<div class="pagenav"><?php echo previous_page_not_post('Prev', 'true'); ?> <?php echo next_page_not_post('Next', 'true'); ?></div>

					</div>

					<div class="titleblock">

						<h2><?php the_title(); ?></h2>
						<h3 id="infolink">Info</h3>

					</div>

				</div>

				<div class="caption">

					<div class="projectinfo">
						<?php if ( get_field('full_title') ) : ?>
							<h4>Project</h4>
							<p><?php the_field('full_title'); ?></p>
						<?php endif; ?>

						<?php if ( get_field('location') ) : ?>
							<h4>Location</h4>
							<p><?php the_field('location'); ?></p>
						<?php endif; ?>

						<?php if ( get_field('client') ) : ?>
							<h4>Client</h4>
							<p><?php the_field('client'); ?></p>
						<?php endif; ?>

						<?php if ( get_field('type') ) : ?>
							<h4>Type</h4>
							<p><?php the_field('type'); ?></p>
						<?php endif; ?>

						<?php if ( get_field('year') ) : ?>
							<h4>Year</h4>
							<p><?php the_field('year'); ?></p>
						<?php endif; ?>

					</div>

					<div class="projectdetails">
						<?php the_content(); ?>
					</div>

				</div>

 				<?php the_twryan_gallery("$post->ID"); ?>

			<?php endwhile; ?>
		<?php endif; ?>



<?php get_footer(); ?>