<?php
/**
 * The template for displaying archives pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="browse-archives">
				<header class="entry-header">
				<h1 class="entry-title"><?php echo the_title(); ?></h1>
				</header>

				<div class="post-archives clearfix">
					<h2>Quote Authors</h2>
					<ul>
						<?php
							$posts = get_posts(array('posts_per_page' => -1 ) ); // returns an array of posts
							foreach ( $posts as $post ) : setup_postdata( $post );
						?>
							<li>
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</li>
					
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</div>
					<!-- Display Authors links here to show archive of single post by author
					with 'Show me another' button-->
				<?php 
					// get_posts() with posts_per_page as arg ( 1 per page)
					// using foreach loop and setup_postdata
				?>
			
				<div class="category-archives clearfix">
					<h2>Categories</h2>
					<div class="display-categories">
							<!-- Display Categories links here to show archive of posts of this category -->
						<?php wp_tag_cloud( array('taxonomy' => 'category', 'posts_per_page' => -1, 'smallest' => 1, 'largest' => 1, 'unit' => 'rem') );?>	
					</div>
				</div>

				<div class="category-archives clearfix">	
					<h2>Tags</h2>
					<div class="display-tags">
						<?php wp_tag_cloud( array('smallest' => 1, 'largest' => 1, 'unit' => 'rem') ); //Use the Wordpress method to show a tag cloud NO LOOP REQUIRED?>			
					</div>
				</div>
			</section>

		</main><!-- #main -->
		<?php get_footer(); ?>
	</div><!-- #primary -->

