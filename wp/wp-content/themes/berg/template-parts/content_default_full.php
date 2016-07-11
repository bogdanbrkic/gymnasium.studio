<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Berg
 */

?>


<!--Item-->
<div class="post-snippet">
    <a href="<?php echo esc_url( get_permalink() ); ?>">
        <?php the_post_thumbnail('berg_extra_big'); ?>
    </a>
    <div class="post-title">
        <span class="label"><?php echo get_the_date('m/d/Y'); ?></span>
        <a href="<?php echo esc_url( get_permalink() ); ?>">
			<h4 class="inline-block"><?php the_title(); ?></h4>
		</a>
    </div>
    <ul class="post-meta list-unstyled list-inline">
        <li>
            <i class="ti-user"></i>
            <span>by
                <?php echo get_the_author(); ?>
            </span>
        </li>
        <li>
            <i class="ti-tag"></i>
            <span>
                <?php foreach((get_the_category()) as $category) {
 					echo '<a href="'.esc_url(get_category_link($category->cat_ID)).'" title="'.$category->cat_name.'">'.$category->cat_name.'</a> ';
 				}?>
            </span>
        </li>
    </ul>


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
</div>