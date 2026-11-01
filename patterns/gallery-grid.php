<?php
/**
 * Title: Gallery grid
 * Slug: apex-grid/gallery-grid
 * Categories: apex-grid-sections, gallery
 * Keywords: gallery, photos, images, grid
 * Description: Section heading and a cropped two-column gallery. Replace the sample images with your own photos.
 * Viewport Width: 1400
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

$apex_grid_url    = trailingslashit( get_template_directory_uri() );
$apex_grid_images = array(
	$apex_grid_url . 'assets/images/streaks-red.webp',
	$apex_grid_url . 'assets/images/streaks-cyan.webp',
	$apex_grid_url . 'assets/images/streaks-night.webp',
	$apex_grid_url . 'assets/images/streaks-grid.webp',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"className":"is-style-apex-grid-stripe","fontSize":"x-large"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-x-large-font-size"><?php echo esc_html_x( 'Gallery', 'Section heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":2,"linkTo":"none","aspectRatio":"16/9","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-2 is-cropped">
<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $apex_grid_images[0] ); ?>" alt="<?php echo esc_attr_x( 'Abstract light streaks in red and cyan', 'Sample image description', 'apex-grid' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $apex_grid_images[1] ); ?>" alt="<?php echo esc_attr_x( 'Abstract light streaks in red and cyan', 'Sample image description', 'apex-grid' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $apex_grid_images[2] ); ?>" alt="<?php echo esc_attr_x( 'Abstract light streaks in red and cyan', 'Sample image description', 'apex-grid' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $apex_grid_images[3] ); ?>" alt="<?php echo esc_attr_x( 'Abstract light streaks in red and cyan', 'Sample image description', 'apex-grid' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->
</figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->
