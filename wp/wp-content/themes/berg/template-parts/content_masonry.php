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
<div class="col-sm-6 post-snippet masonry-item">
    <a href="<?php echo esc_url( get_permalink() ); ?>">
        <?php the_post_thumbnail('berg_big_wh-thumb'); ?>
    </a>
    <div class="inner">
        <a href="<?php echo esc_url( get_permalink() ); ?>">
            <h4 class="title"><?php the_title(); ?></h4>
            <span class="date"><?php echo get_the_date('m/d/Y'); ?></span>
        </a>
        <?php the_excerpt(); ?>
    </div>
</div>