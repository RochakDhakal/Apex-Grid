<?php
/**
 * Title: 404 content
 * Slug: apex-grid/hidden-404
 * Inserter: no
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-apex-grid-racing-stripe apex-grid-stripe-short"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-apex-grid-racing-stripe apex-grid-stripe-short"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"900","letterSpacing":"-0.025em","lineHeight":"1"}},"textColor":"primary","fontSize":"display","fontFamily":"display"} -->
<p class="has-primary-color has-text-color has-display-font-family has-display-font-size" style="font-weight:900;letter-spacing:-0.025em;line-height:1">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Page not found', '404 heading', 'apex-grid' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"text-secondary"} -->
<p class="has-text-secondary-color has-text-color"><?php esc_html_e( 'This page went off track. It may have moved, or the link may be wrong. Try a search or head back to the start line.', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'Search form label', 'apex-grid' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search…', 'Search input placeholder', 'apex-grid' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'Search button text', 'apex-grid' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Back to home', 'Button label', 'apex-grid' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
