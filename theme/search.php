<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="primary-content col-xs-12 col-md-8">
			<main role="main" class="">
				<!-- section -->
				<section>

					<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

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
