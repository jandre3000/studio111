<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article class="entry-content post-<?php the_ID(); ?>">
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
			<p class="post_date"><?php the_time('d M Y'); ?></p>

			<h3 class="entry-title">
				<?php the_title(); ?>
			</h3>
			<?php the_content(); ?>
		<?php endif; ?>
	</article><!-- #post -->
