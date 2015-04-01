<?php get_header(); ?>

<div class="container main-container">

	<div class="row">

		<?php get_sidebar(); ?>

		<main role="main" class="col-xs-12 col-md-9">
			<!-- section -->
			<section>

				<!-- article -->
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
</div>	


<?php get_footer(); ?>