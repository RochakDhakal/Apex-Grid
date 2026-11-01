<?php
/**
 * Title: Content sidebar
 * Slug: apex-grid/sidebar
 * Categories: apex-grid-sections
 * Block Types: core/template-part/uncategorized
 * Keywords: sidebar, widgets, categories, tags, search
 * Description: Right-hand content sidebar with search, latest posts, categories, tag cloud and a call to action.
 * Viewport Width: 400
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Content sidebar', 'Block name', 'apex-grid' ); ?>"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'Search form label', 'apex-grid' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search…', 'Search input placeholder', 'apex-grid' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'Search button text', 'apex-grid' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"className":"is-style-apex-grid-stripe","fontSize":"medium"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-medium-font-size"><?php echo esc_html_x( 'Latest posts', 'Sidebar heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":5,"displayPostDate":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"className":"is-style-apex-grid-stripe","fontSize":"medium"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-medium-font-size"><?php echo esc_html_x( 'Categories', 'Sidebar heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"className":"is-style-apex-grid-stripe","fontSize":"medium"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-medium-font-size"><?php echo esc_html_x( 'Tags', 'Sidebar heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"smallestFontSize":"0.75rem","largestFontSize":"0.75rem","className":"is-style-outline"} /--></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"apex-grid/announcement"} /--></div>
<!-- /wp:group -->
