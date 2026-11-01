<?php
/**
 * Title: Quick links
 * Slug: apex-grid/quick-links
 * Categories: apex-grid-sections, call-to-action
 * Keywords: links, cards, grid, navigation, shortcuts
 * Description: A 2×3 grid of link cards, each with a coloured accent bar. Edit the titles, text and links.
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

$apex_grid_links = array(
	array( 'primary', _x( 'Events', 'Quick link title', 'apex-grid' ), _x( 'Calendar & sign-ups', 'Quick link label', 'apex-grid' ) ),
	array( 'accent', _x( 'Results', 'Quick link title', 'apex-grid' ), _x( 'Times & reports', 'Quick link label', 'apex-grid' ) ),
	array( 'highlight', _x( 'Standings', 'Quick link title', 'apex-grid' ), _x( 'Season table', 'Quick link label', 'apex-grid' ) ),
	array( 'success', _x( 'Community', 'Quick link title', 'apex-grid' ), _x( 'News & discussion', 'Quick link label', 'apex-grid' ) ),
	array( 'primary-bright', _x( 'Gallery', 'Quick link title', 'apex-grid' ), _x( 'Photos from the track', 'Quick link label', 'apex-grid' ) ),
	array( 'white', _x( 'Membership', 'Quick link title', 'apex-grid' ), _x( 'Join the grid', 'Quick link label', 'apex-grid' ) ),
);
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Quick links', 'Block name', 'apex-grid' ); ?>"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"9rem"}} -->
<div class="wp-block-group">
<?php foreach ( $apex_grid_links as $apex_grid_link ) : ?>
<!-- wp:group {"className":"is-style-apex-grid-stat-card","style":{"border":{"top":{"color":"var:preset|color|<?php echo esc_attr( $apex_grid_link[0] ); ?>","width":"3px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"0.375rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-apex-grid-stat-card" style="border-top-color:var(--wp--preset--color--<?php echo esc_attr( $apex_grid_link[0] ); ?>);border-top-width:3px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-link-color has-large-font-size"><a href="#"><?php echo esc_html( $apex_grid_link[1] ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted","fontSize":"label","fontFamily":"mono"} -->
<p class="has-muted-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html( $apex_grid_link[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
