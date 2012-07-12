<?php get_header(); ?>

	
		<div id="content-column" class="span8 border-box">
		
				<div id="inner-content" class=" border-box">
					<?php
						/* Run the loop to output the posts */
						get_template_part( 'loop', 'index' );
					?>
				</div>
			
		</div>
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>
