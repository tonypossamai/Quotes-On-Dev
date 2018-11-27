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

				<?php if (is_user_logged_in() && current_user_can('edit_posts')) : ?>

					<form id="submit-form" method="post">	
							
						<p>Author of quote</p>
						<input type="text" id="author-name-field"/>

						<p>Quote</p>
						<textarea type="text" id="quote-content-field"></textarea>

						<p>Where did you find this quote? (e.g. book name)</p>
						<input type="text" id="quote-source-field"/>

						<p>Provide the URL of the quote source, if available.</p>
						<input type="text" id="quote-url-field"/>

						<input type="submit" class="submit-button" value="Submit quote"/>
					</form>
	
					<p class="success-message"></p>

				<?php else : ?>

					<p class="sorry-message"></p>
            		<a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">Click here to login</a>

				<?php endif; ?>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
