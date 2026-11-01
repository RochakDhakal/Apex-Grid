<?php
/**
 * Title: Blog heading
 * Slug: apex-grid/hidden-blog-heading
 * Inserter: no
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"is-style-apex-grid-stripe","fontSize":"huge"} -->
<h1 class="wp-block-heading is-style-apex-grid-stripe has-huge-font-size"><?php echo esc_html_x( 'Latest', 'Blog page heading', 'apex-grid' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'News, race reports and stories from the community.', 'apex-grid' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
