<?php
/**
 * Title: Posts feed
 * Slug: apex-grid/posts-feed
 * Inserter: no
 * Keywords: blog, posts, feed, query, cards
 * Description: Feed-style post cards with author, date, title, excerpt, featured image, category and comment count. Sticky posts are highlighted as pinned.
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"name":"<?php echo esc_attr_x( 'Posts feed', 'Block name', 'apex-grid' ); ?>"},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<!-- wp:group {"className":"is-style-apex-grid-stat-card apex-grid-feed-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-apex-grid-stat-card apex-grid-feed-card" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"is-style-apex-grid-kicker apex-grid-pinned-label"} -->
<p class="is-style-apex-grid-kicker apex-grid-pinned-label"><?php echo esc_html_x( 'Pinned', 'Label for sticky posts', 'apex-grid' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":40} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":32} /-->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","sizeSlug":"large"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|border-base","width":"1px","style":"solid"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-base);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-comments-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:pattern {"slug":"apex-grid/hidden-no-results"} /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
