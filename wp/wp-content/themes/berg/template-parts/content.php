<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Berg
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<h2 class="entry-title">
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php berg_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<div class="entry-content">

		<?php if ( !is_singular() && function_exists('has_post_thumbnail') && has_post_thumbnail() ) { ?>

		    <div class="post-thumb">
				<a class="post-url" title="<?php get_the_title(); ?>" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('berg_mili-thumb'); ?>
				</a>
			</div>

		<?php } ?>

		<?php if( !is_singular() ) : ?>
			<?php the_excerpt(); ?>
		<?php else: ?>
			<?php the_content(); ?>
		<?php endif; ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'berg' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="clear"></div>
	<div class="entry-footer">
		<?php berg_entry_footer(); ?>
	</div><!-- .entry-footer -->
	<div class="clear"></div>

</article><!-- #post-## -->