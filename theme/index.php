<?php get_header(); ?>

<div class="container">

	<div class="row">

		<main role="main" class="col-xs-12 col-md-8">
		<!-- section -->
			<section>

				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</main>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
