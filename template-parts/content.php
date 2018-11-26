<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

// Code to set variable for source and source url (get_post_meta). They will be echoed inside the IF ELSE Statements below
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php //get the content ?>

	<?php 
		// If statement: if the_source and the_source_url field are not empty, then show them
		// else statement: Else if the source only has content show the source only
		// Else show empty span
	?>

	<div class="entry-content">

	</div><!-- .entry-content -->
</article><!-- #post-## -->

<!-- if else statement to change in between Arquive and Home page -->

<?php // if is_home() or is_single() ?>

	<!-- show button that loads another post -->

	<button class="new-quote-button">Show me another!</button>

<?php // end if; ?>