<?php get_header(); ?>

	<div id="content-column" class="span8 border-box">
	
		<div id="inner-content">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<h2 class="pagetitle"><?php the_title(); ?></h2>
					
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					<div class="entry">
						
						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
						
						<?php the_tags( 'Tags: ', ', ', ''); ?>

					</div>
					
					<?php edit_post_link('Edit this entry','','.'); ?>
					
				</div>

			<?php comments_template(); ?>

			<?php endwhile; endif; ?>
			
		</div>
		
	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>