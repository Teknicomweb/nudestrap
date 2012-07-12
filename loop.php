<?php 
if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="loop-content">
		<h2 class="pagetitle"><?php the_title(); ?></h2>
		<?php the_content(); ?>
    </div>
	
<?php endwhile; ?>

<?php else : ?>

	<h2>Not Found</h2>

<?php endif; ?>