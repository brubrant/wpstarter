<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="primary-content col-xs-12 col-md-8">
			<main role="main" class="">
			<!-- section -->
				<section>

					<article id="post-404">

						<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
						<h2>
							<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
						</h2>

					</article>
					<!-- /article -->

				</section>
				<!-- /section -->
			</main>
		</div>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
