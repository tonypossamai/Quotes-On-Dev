<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

				<footer id="colophon" class="site-footer" role="contentinfo">
					
					<div class="site-info">
					<nav id="site-navigation" class="main-navigation menu-main-navigation-container" role="navigation">			
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>			
					</nav><!-- #site-navigation -->
						<p>Brought to you by <a href="<?php echo esc_url( 'https://github.com/tonypossamai' ); ?>"><?php the_author()?></a></p>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->
				
			</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

	<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<?php echo esc_html( 'Primary Menu' ); ?>
		</button> -->
