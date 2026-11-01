<?php
/**
 * Title: Latest posts list
 * Slug: apex-grid/latest-posts-list
 * Categories: apex-grid-sections, posts
 * Block Types: core/query
 * Keywords: posts, activity, list, latest, news
 * Description: Compact activity-style list of the five latest posts with author avatar, title, author and date.
 * Viewport Width: 1400
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Latest posts', 'Block name', 'apex-grid' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"is-style-apex-grid-stripe","fontSize":"x-large"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-x-large-font-size"><?php echo esc_html_x( 'Latest from the paddock', 'Section heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-apex-grid-live-dot","textColor":"muted"} -->
<p class="is-style-apex-grid-live-dot has-muted-color has-text-color"><?php echo esc_html_x( 'Live feed', 'Section label', 'apex-grid' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:group {"className":"is-style-apex-grid-stat-card","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-apex-grid-stat-card" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-template {"className":"apex-grid-activity-list","style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:avatar {"size":36} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.125rem"},"layout":{"selfStretch":"fill"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"letterSpacing":"0.05em"}},"fontSize":"medium"} /-->

<!-- wp:post-author-name {"style":{"typography":{"fontWeight":"400"}},"textColor":"muted","fontSize":"label"} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"format":"M j"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<p class="has-muted-color has-text-color" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'No posts yet. Your latest posts will appear here.', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
