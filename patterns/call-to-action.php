<?php
/**
 * Title: Call to action
 * Slug: apex-grid/call-to-action
 * Categories: apex-grid-sections, call-to-action
 * Keywords: cta, join, signup, membership, banner
 * Description: Full-width call to action with racing stripe, heading, text and two buttons.
 * Viewport Width: 1400
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Call to action', 'Block name', 'apex-grid' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"is-style-apex-grid-speed-lines","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"width":"1px","color":"var:preset|color|border-base","radius":"4px"}},"gradient":"member-card","layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group is-style-apex-grid-speed-lines has-border-color has-member-card-gradient-background has-background" style="border-color:var(--wp--preset--color--border-base);border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","className":"is-style-apex-grid-kicker"} -->
<p class="has-text-align-center is-style-apex-grid-kicker"><?php echo esc_html_x( 'Membership', 'CTA kicker', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html_x( 'Ready to join the grid?', 'CTA heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"text-secondary"} -->
<p class="has-text-align-center has-text-secondary-color has-text-color"><?php esc_html_e( 'Members get early event sign-ups, track-day discounts and a seat at every race night.', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"shadow":"var:preset|shadow|glow-red"}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="box-shadow:var(--wp--preset--shadow--glow-red)"><?php echo esc_html_x( 'Become a member', 'Button label', 'apex-grid' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Contact us', 'Button label', 'apex-grid' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
