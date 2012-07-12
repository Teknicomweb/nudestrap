<?php get_header(); ?>

	<div id="content-column" class="span8 border-box">
		<div id="inner-content">
			<?php get_template_part( 'loop', 'page' ); ?>
		</div>
	</div>
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
