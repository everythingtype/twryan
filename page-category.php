<?php 
/* Template Name: Category */ 
?>

<?php get_header(); ?>

<div class="page">	

	<div id="header">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<?php wp_nav_menu( array('theme_location' => 'navigation' )); ?>
	</div>


<ul class="viewtoggle">
	<li class="imageslink"><a href="#images">Images</a></li>
	<li class="listlink"><a href="#list">Text</a></li>
</ul>


		<div class="category">


			<div class="categorythumbs">

			<?php 

				$args = array(
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'post_parent' => $post->ID,
				'post_type' => 'page',
				'numberposts'     => -1,
				'post_status' => 'publish'
				); $postslist = get_posts($args);
				foreach ($postslist as $post) : setup_postdata($post); 
					if ( has_post_thumbnail() ) :
				?>

				<?php
				
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium', false );
				$src = $thumbnail[0];
				$width = $thumbnail[1];
				
				 ?>

				<a href="<?php the_permalink(); ?>" class="projectthumb" style="max-width: <?php echo $width; ?>px">
					<img src="<?php echo $src; ?>" />
					<span class="thumbtext"><?php the_title(); ?></span>
				</a>

				<?php 
					endif;
				endforeach; ?>
			
			</div>	
			
			<table class="categorytable">	
				<thead><tr><th>Name</th><th>Location</th><th>Type</th><th>Year</th></tr></thead>
				<tbody>
			<?php foreach ($postslist as $post) : setup_postdata($post); ?>
				<tr><td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td><td><?php the_field('location'); ?></td><td><?php the_field('type'); ?></td><td><?php the_field('year'); ?></td></tr>
			<?php endforeach; ?>
				</tbody>
			</table>
			<?php wp_reset_query(); ?>

		</div>

</div>

<?php get_footer(); ?>