<?php
/**
 * Title: Posts grid
 * Slug: apex-grid/posts-grid
 * Categories: apex-grid-sections, posts
 * Block Types: core/query
 * Keywords: posts, grid, cards, blog, news
 * Description: Three-column grid of post cards with featured image, category, title, excerpt and date. Collapses to two and one column.
 * Viewport Width: 1400
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Posts grid', 'Block name', 'apex-grid' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"className":"is-style-apex-grid-stripe","fontSize":"x-large"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-x-large-font-size"><?php echo esc_html_x( 'Latest stories', 'Section heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":12,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<!-- wp:group {"className":"is-style-apex-grid-stat-card","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|50","left":"0"},"blockGap":"var:preset|spacing|30"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-apex-grid-stat-card" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","sizeSlug":"medium_large"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
