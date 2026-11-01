<?php
/**
 * Title: Hero
 * Slug: apex-grid/hero
 * Categories: apex-grid-sections, banner, featured
 * Keywords: hero, cover, banner, intro, header
 * Description: Full-height hero with kicker, two-line display heading (second line in gradient text), intro and two buttons. Ships with a sample photo; replace it from the Media Library in the Cover settings.
 * Viewport Width: 1400
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

$apex_grid_url    = trailingslashit( get_template_directory_uri() );
$apex_grid_images = array(
	$apex_grid_url . 'assets/images/hero.jpg',
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( $apex_grid_images[0] ); ?>","dimRatio":80,"gradient":"member-card","minHeight":90,"minHeightUnit":"vh","contentPosition":"center left","align":"full","className":"is-style-apex-grid-speed-lines apex-grid-bottom-fade apex-grid-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left is-style-apex-grid-speed-lines apex-grid-bottom-fade apex-grid-hero" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);min-height:90vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $apex_grid_images[0] ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-member-card-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-apex-grid-kicker"} -->
<p class="is-style-apex-grid-kicker"><?php echo esc_html_x( 'Est. 2026 · Monaco', 'Hero kicker', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"is-style-apex-grid-gradient-text","style":{"typography":{"lineHeight":"1","letterSpacing":"-0.025em"}},"fontSize":"display"} -->
<h1 class="wp-block-heading is-style-apex-grid-gradient-text has-display-font-size" style="letter-spacing:-0.025em;line-height:1"><?php echo esc_html_x( 'Apex Grid', 'Hero heading, first line', 'apex-grid' ); ?><br><mark><?php echo esc_html_x( 'Club', 'Hero heading, second line', 'apex-grid' ); ?></mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"text-secondary","fontSize":"large"} -->
<p class="has-text-secondary-color has-text-color has-large-font-size"><?php esc_html_e( 'Track days, race nights and a community that lives for the next lap. Join the grid, follow the season and meet people who share the obsession.', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"style":{"shadow":"var:preset|shadow|glow-red"}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="box-shadow:var(--wp--preset--shadow--glow-red)"><?php echo esc_html_x( 'Join the club', 'Button label', 'apex-grid' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Upcoming events', 'Button label', 'apex-grid' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
