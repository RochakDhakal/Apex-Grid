<?php
/**
 * Title: No results
 * Slug: apex-grid/hidden-no-results
 * Inserter: no
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"className":"is-style-apex-grid-stat-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-apex-grid-stat-card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Nothing on the grid yet', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"text-secondary"} -->
<p class="has-text-secondary-color has-text-color"><?php esc_html_e( 'We could not find anything here. Try a different search, or head back to the homepage.', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Back to home', 'Button label', 'apex-grid' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
