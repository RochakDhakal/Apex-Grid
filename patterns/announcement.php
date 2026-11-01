<?php
/**
 * Title: Announcement
 * Slug: apex-grid/announcement
 * Categories: apex-grid-sections, call-to-action
 * Keywords: announcement, notice, pinned, alert, news
 * Description: Highlighted pinned announcement card with a red-tinted border.
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"className":"is-style-apex-grid-stat-card apex-grid-announcement","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"left":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-apex-grid-stat-card apex-grid-announcement" style="border-left-color:var(--wp--preset--color--primary);border-left-width:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"is-style-apex-grid-kicker"} -->
<p class="is-style-apex-grid-kicker"><?php echo esc_html_x( 'Pinned · Announcement', 'Sample label', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Season calendar is live', 'Sample announcement title', 'apex-grid' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"text-secondary"} -->
<p class="has-text-secondary-color has-text-color"><?php esc_html_e( 'All rounds, track days and social nights for the new season are now published. Save the dates and sign up early — places are limited.', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Read more', 'Button label', 'apex-grid' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
