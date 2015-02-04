<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="primary-content col-xs-12 col-md-8">
			<main role="main" class="">
				<!-- section -->
				<section>

					<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</section>
				<!-- /section -->
			</main>
		</div>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
