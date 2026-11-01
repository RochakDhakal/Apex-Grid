<?php
/**
 * Title: Section heading
 * Slug: apex-grid/section-heading
 * Categories: apex-grid-sections, text
 * Keywords: heading, title, stripe, section
 * Description: Racing stripe and uppercase heading with a short supporting line.
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"is-style-apex-grid-stripe","fontSize":"x-large"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-x-large-font-size"><?php echo esc_html_x( 'Section title', 'Sample heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'A short line that introduces this section.', 'apex-grid' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
