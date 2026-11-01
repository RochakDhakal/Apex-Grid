<?php
/**
 * Title: Stats bar
 * Slug: apex-grid/stats-bar
 * Categories: apex-grid-sections, about
 * Keywords: stats, numbers, counters, figures
 * Description: Four large figures with mono labels, divided by borders. The numbers are editable sample content.
 * Viewport Width: 1400
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

$apex_grid_stats = array(
	array( '250+', _x( 'Members', 'Sample stat label', 'apex-grid' ) ),
	array( '48', _x( 'Events hosted', 'Sample stat label', 'apex-grid' ) ),
	array( '12', _x( 'Track days a year', 'Sample stat label', 'apex-grid' ) ),
	array( '6', _x( 'Seasons', 'Sample stat label', 'apex-grid' ) ),
);
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Stats (sample numbers — edit me)', 'Block name', 'apex-grid' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|border-base","width":"1px","style":"solid"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-base);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"1px"},"border":{"width":"1px","color":"var:preset|color|border-base","radius":"4px"}},"backgroundColor":"border-base","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"9rem"}} -->
<div class="wp-block-group has-border-color has-border-base-background-color has-background" style="border-color:var(--wp--preset--color--border-base);border-width:1px;border-radius:4px">
<?php foreach ( $apex_grid_stats as $apex_grid_stat ) : ?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0.25rem"}},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"900","lineHeight":"1"}},"textColor":"white","fontSize":"huge","fontFamily":"display"} -->
<p class="has-white-color has-text-color has-display-font-family has-huge-font-size" style="font-weight:900;line-height:1"><?php echo esc_html( $apex_grid_stat[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted","fontSize":"label","fontFamily":"mono"} -->
<p class="has-muted-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html( $apex_grid_stat[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
