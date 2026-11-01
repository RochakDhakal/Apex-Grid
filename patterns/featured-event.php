<?php
/**
 * Title: Featured event
 * Slug: apex-grid/featured-event
 * Categories: apex-grid-sections, featured
 * Keywords: event, race, countdown, register, quick links
 * Description: Event card with image, date, location and a static countdown, next to a grid of quick links. All details are editable sample content.
 * Viewport Width: 1400
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

$apex_grid_url    = trailingslashit( get_template_directory_uri() );
$apex_grid_images = array(
	$apex_grid_url . 'assets/images/streaks-red.webp',
);
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Featured event', 'Block name', 'apex-grid' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"className":"is-style-apex-grid-stripe","fontSize":"x-large"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-x-large-font-size"><?php echo esc_html_x( 'Next on track', 'Section heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:cover {"url":"<?php echo esc_url( $apex_grid_images[0] ); ?>","dimRatio":100,"gradient":"bottom-fade","minHeight":440,"contentPosition":"bottom left","className":"is-style-apex-grid-carbon-texture","style":{"border":{"radius":"4px","width":"1px","color":"var:preset|color|border-base"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-apex-grid-carbon-texture has-border-color" style="border-color:var(--wp--preset--color--border-base);border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:440px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $apex_grid_images[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-bottom-fade-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"left":{"color":"var:preset|color|primary","width":"2px"}}},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-left-color:var(--wp--preset--color--primary);border-left-width:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"is-style-apex-grid-live-dot","textColor":"success"} -->
<p class="is-style-apex-grid-live-dot has-success-color has-text-color"><?php echo esc_html_x( 'Registration open', 'Sample event status', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xx-large"} -->
<h3 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Night Sprint · Round 4', 'Sample event title', 'apex-grid' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"white","fontSize":"x-small","fontFamily":"mono"} -->
<p class="has-white-color has-text-color has-mono-font-family has-x-small-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Sat 14 Dec · 19:00', 'Sample event date', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted","fontSize":"x-small","fontFamily":"mono"} -->
<p class="has-muted-color has-text-color has-mono-font-family has-x-small-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Riverside Circuit', 'Sample event location', 'apex-grid' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontWeight":"900","lineHeight":"1"}},"textColor":"primary-bright","fontSize":"huge","fontFamily":"display"} -->
<p class="has-text-align-right has-primary-bright-color has-text-color has-display-font-family has-huge-font-size" style="font-weight:900;line-height:1"><?php echo esc_html_x( '12', 'Sample countdown number', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"muted","fontSize":"label","fontFamily":"mono"} -->
<p class="has-text-align-right has-muted-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Days to go', 'Sample countdown label', 'apex-grid' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"shadow":"var:preset|shadow|glow-red"}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="box-shadow:var(--wp--preset--shadow--glow-red)"><?php echo esc_html_x( 'Register', 'Button label', 'apex-grid' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:pattern {"slug":"apex-grid/quick-links"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
