<?php
/**
 * Title: Related posts
 * Slug: apex-grid/hidden-related-posts
 * Inserter: no
 *
 * The query is limited to the current post's categories by
 * apex_grid_related_posts_query() in functions.php (class apex-grid-related-posts).
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"wide","className":"apex-grid-related","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide apex-grid-related" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:heading {"className":"is-style-apex-grid-stripe","fontSize":"x-large"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-x-large-font-size"><?php echo esc_html_x( 'Related posts', 'Section heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"apex-grid-related-posts","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"}} -->
<!-- wp:group {"className":"is-style-apex-grid-stat-card","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"},"blockGap":"var:preset|spacing|30"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-apex-grid-stat-card" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","sizeSlug":"medium_large"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
