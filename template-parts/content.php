<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

// Code to set variable for source and source url (get_post_meta). They will be echoed inside the IF ELSE Statements below

$source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
$source_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<p><?php the_content();?></p>
	</div>

	<div class="entry-meta">

			<h2 class="entry-title">–<?php the_title();?></h2>

		</div>
		<?php if ($source && $source_url) : ?>
			
			<span class="source">, <a class="source-url" href="<?php echo $source_url?>"><?php echo $source ?></a></span>
		

		<?php elseif ($source) : ?>
			
			<span class="source"><?php echo $source ?></span>
		
		<?php else : ?>
			<span></span>
		<?php endif; ?>
	
	
</article><!-- #post-## -->

<!-- if else statement to change in between Archive and Home page -->

<?php if (is_home() || is_single()) : ?>

	<button class="new-quote-button">Show me another!</button> <!-- show button that loads another post -->

<?php else : ?>
	<span></span>

<?php endif; ?>
