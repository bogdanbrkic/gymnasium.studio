<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Berg
 */

?>


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

<div class="clear"></div>

