<?php
/**
 * The template for displaying archives pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section>
				<div class="display-authors">
					<!-- Display Authors links here to show archive of single post by author
					with 'Show me another' button-->
				<?php 
					// get_posts() with posts_per_page as arg ( 1 per page)
					// using foreach loop and setup_postdata
				?>
				</div>
			</section>

			<section>
				<div class="display-categories">
					<!-- Display Categories links here to show archive of posts of this category -->
					<?php 
						// Use the Wordpress method to list your categories
						// NO LOOP REQUIRED
					?>

				</div>
			</section>

			<section>
				<div class="display-tags">
					<!-- Display Tags links here to show archive of posts of this tag -->
					<?php 
						// Use the Wordpress method to show a tag cloud
						// NO LOOP REQUIRED						
					?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
