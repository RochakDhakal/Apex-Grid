<?php
/**
 * Title: Sidebar header
 * Slug: apex-grid/sidebar-header
 * Categories: header
 * Block Types: core/template-part/header
 * Keywords: sidebar, navigation, menu, header
 * Description: Vertical sidebar with racing stripe, site identity, sectioned navigation, search, social icons and a contact button. Becomes a top bar with a drawer menu below 1024px.
 * Viewport Width: 320
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_attr_x( 'Sidebar', 'Block name', 'apex-grid' ); ?>"},"className":"apex-grid-sidebar__inner","style":{"spacing":{"padding":{"top":"0","right":"0.75rem","bottom":"1.5rem","left":"0.75rem"},"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group apex-grid-sidebar__inner" style="padding-top:0;padding-right:0.75rem;padding-bottom:1.5rem;padding-left:0.75rem"><!-- wp:separator {"className":"is-style-apex-grid-racing-stripe","style":{"spacing":{"margin":{"right":"-0.75rem","left":"-0.75rem"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-apex-grid-racing-stripe" style="margin-right:-0.75rem;margin-left:-0.75rem"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"apex-grid-sidebar__brand","style":{"spacing":{"blockGap":"0.75rem","padding":{"top":"0.25rem","right":"0.25rem","bottom":"0.25rem","left":"0.25rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group apex-grid-sidebar__brand" style="padding-top:0.25rem;padding-right:0.25rem;padding-bottom:0.25rem;padding-left:0.25rem"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"ariaLabel":"<?php echo esc_attr_x( 'Primary', 'Navigation label', 'apex-grid' ); ?>","showSubmenuIcon":false,"submenuVisibility":"always","overlayMenu":"mobile","icon":"menu","className":"apex-grid-sidebar__nav","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<!-- wp:navigation-submenu {"label":"<?php echo esc_attr_x( 'Main', 'Sidebar menu section label', 'apex-grid' ); ?>","kind":"custom"} -->
<!-- wp:home-link {"label":"Home","className":"apex-grid-icon-home"} /-->
<!-- /wp:navigation-submenu -->

<!-- wp:navigation-submenu {"label":"<?php echo esc_attr_x( 'Explore', 'Sidebar menu section label', 'apex-grid' ); ?>","kind":"custom"} -->
<!-- wp:page-list /-->
<!-- /wp:navigation-submenu -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'Search form label', 'apex-grid' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search…', 'Search input placeholder', 'apex-grid' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'Search button text', 'apex-grid' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->

<!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<ul class="wp-block-social-links has-small-icon-size is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"discord"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"className":"apex-grid-sidebar__cta","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons apex-grid-sidebar__cta"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Contact us', 'Button label', 'apex-grid' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:navigation --></div>
<!-- /wp:group -->
