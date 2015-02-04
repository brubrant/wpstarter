<!-- sidebar -->
<div class="secondary-content col-xs-12 col-md-4">
	<aside class="sidebar" role="complementary">

		<?php get_template_part('searchform'); ?>

		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>

		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
		</div>

	</aside>
	<!-- /sidebar -->
	
</div>
