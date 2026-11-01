<?php
/**
 * Title: Footer
 * Slug: apex-grid/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Keywords: footer, copyright, social
 * Description: Compact footer for the main column with racing stripe, site title, short text, horizontal navigation, social icons and a copyright line.
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Footer', 'Block name', 'apex-grid' ); ?>"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|border-base","width":"1px","style":"solid"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-top-color:var(--wp--preset--color--border-base);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"},"layout":{"selfStretch":"fixed","flexSize":"22rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-apex-grid-racing-stripe apex-grid-stripe-short"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-apex-grid-racing-stripe apex-grid-stripe-short"/>
<!-- /wp:separator -->

<!-- wp:site-title {"level":0,"fontSize":"large"} /-->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'A home for people who live for the next lap. Events, results and stories from the paddock and the community.', 'apex-grid' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ariaLabel":"<?php echo esc_attr_x( 'Footer', 'Navigation label', 'apex-grid' ); ?>","overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1.25rem"}},"fontSize":"small"} -->
<!-- wp:home-link {"label":"<?php echo esc_attr_x( 'Home', 'Menu item', 'apex-grid' ); ?>"} /-->

<!-- wp:page-list /-->
<!-- /wp:navigation -->

<!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"1rem"}}}} -->
<ul class="wp-block-social-links has-small-icon-size is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"discord"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|border-base","width":"1px","style":"solid"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-base);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"textColor":"muted","fontSize":"label","fontFamily":"mono","style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<p class="has-muted-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php /* translators: %s: Current year. */ echo esc_html( sprintf( __( '© %s · All rights reserved', 'apex-grid' ), gmdate( 'Y' ) ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"label","fontFamily":"mono","style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<p class="has-muted-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php /* translators: %s: WordPress link. */ printf( esc_html__( 'Powered by %s', 'apex-grid' ), '<a href="' . esc_url( __( 'https://wordpress.org', 'apex-grid' ) ) . '">WordPress</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
