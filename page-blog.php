<?php
/*
Template Name: Blog
*/
?>


<?php get_header(); ?>

	<div id="content-column" class="span8 blog-page">

		<div id="inner-content">
			<?php get_template_part( 'loop', 'page' ); ?>
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$blog_args = array(
				'posts_per_page' =>  10,
				'orderby'         => 'post_date',
				'order'           => 'DESC',
				'post_type'       => 'post',
				'post_status'     => 'publish',
				'paged' 		  => $paged
				);
			$wp_query = null;
			$wp_query = new WP_Query( $blog_args );
				
			$thumb_size = array(100,100);
			if ( $wp_query->have_posts() ) :
			
				pagination($wp_query->max_num_pages);
				while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				
				<div class="blog-entry border-box">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<?php // include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					<?php the_excerpt(); ?>
					
				</div>
				<?php endwhile; ?>
				<?php pagination($wp_query->max_num_pages); ?>
			
				<?php // include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
			<?php else : ?>

				<h2>Not Found</h2>

			<?php endif; wp_reset_postdata(); ?>
		</div>


	</div>
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
