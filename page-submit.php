<?php
/**
 * The template for displaying submit pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section>
				<header>
					<div class="page-title"><?php the_title(); ?></div>
				</header>

				<?php // if user is logged in & can edit posts ?>

				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<fieldset>
						<label>
							<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
						</label>
						<button class="search-submit">
							<?php echo esc_html( 'Search' ); ?>
						</button>
					</fieldset>
				</form>

				<?php //else display ?>

					<input><!--  MESSAGE: Sorry you must be logged in to submit a quote! -->

				<?php // endif; ?>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
