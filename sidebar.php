<aside id="sidebar" class="span4 border-box">

	<?php
		if (   ! is_active_sidebar( 'sidebar-widgets' )	)
			return;

			/* Sidebar Widgets */
		if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar') )
		
	?>

</aside>