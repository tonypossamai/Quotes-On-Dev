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

				<!-- display form html -->

				<?php //else display ?>

					<!--  MESSAGE: Sorry you must be logged in to submit a quote! -->

				<?php // endif; ?>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
