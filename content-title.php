<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article class="post">
		<p class="post_date"><?php the_time('d M Y'); ?></p>

		<?php the_post_thumbnail(); ?>
		<h3 class="entry-title" id="post-<?php the_ID(); ?>" >
			<?php the_title(); ?>
		</h3>
	</article><!-- #post -->
