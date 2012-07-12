			</div><!-- Content Container Ends Here -->

		<footer id="site-footer" class="">
		
			<!-- FOOTER WIDGETS. Called in sidebar-footer.php -->
			<?php get_sidebar( 'footer' ); ?>
			
			<div id="footer-bottom">
				<p id="copyright" class="span4"><a href="<?php echo get_option('home'); ?>">&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></a></p>
				<p id="credits" class="span4">Nudestrap Wordpress Theme. Developed by <a href="http://teknicom.net/">Teknicom Web &copy;</a></p>
			</div>
		</footer>

	</div><!-- Page Wrap Ends Here -->

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
