<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="myCarousel" class="carousel slide">
				<!-- Carousel items -->
				<div class="carousel-inner">
				
					<div class="active item">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/slide-1.jpg"/>
						<div class="carousel-caption">
							<h4>Nudestrap - Wordpress Twitter Bootstrap theme</h4>
							<p>
								This is a great theme for everyone really...
							</p>
						</div>
					</div>
					
					<div class="item">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/slide-2.jpg"/>
						<div class="carousel-caption">
							<h4>Nudestrap - Wordpress Twitter Bootstrap theme</h4>
							<p>
								This is a great theme for everyone really...
							</p>
						</div>
					</div>
					
					<div class="item">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/slide-3.jpg"/>
						<div class="carousel-caption">
							<h4>Nudestrap - Wordpress Twitter Bootstrap theme</h4>
							<p>
								This is a great theme for everyone really...
							</p>
						</div>
					</div>
					
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		
		<div id="content-column" class="span8 border-box">
		
			<div id="inner-content">
				<?php get_template_part( 'loop', 'page' ); ?>
			</div>
		</div>
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>
