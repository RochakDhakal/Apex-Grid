<?php
/**
 * Apex Grid functions and definitions.
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

if ( is_admin() ) {
	require_once get_theme_file_path( 'inc/dashboard-notice.php' );
}

if ( ! function_exists( 'apex_grid_setup' ) ) :
	/**
	 * Sets up theme defaults.
	 *
	 * Block themes get most features from theme.json; this only loads the
	 * layout stylesheet into the editor so the Site Editor matches the front end.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function apex_grid_setup() {
		add_editor_style( 'assets/css/layout.css' );
	}
endif;
add_action( 'after_setup_theme', 'apex_grid_setup' );

if ( ! function_exists( 'apex_grid_enqueue_styles' ) ) :
	/**
	 * Enqueues front-end styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function apex_grid_enqueue_styles() {
		wp_enqueue_style(
			'apex-grid-layout',
			get_theme_file_uri( 'assets/css/layout.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'apex_grid_enqueue_styles' );

if ( ! function_exists( 'apex_grid_enqueue_block_styles' ) ) :
	/**
	 * Enqueues per-block stylesheets so they load only when the block is on the page.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function apex_grid_enqueue_block_styles() {
		$blocks = array( 'cover', 'group', 'heading', 'paragraph', 'post-template', 'search', 'separator', 'table' );

		foreach ( $blocks as $block ) {
			wp_enqueue_block_style(
				'core/' . $block,
				array(
					'handle' => 'apex-grid-' . $block,
					'src'    => get_theme_file_uri( "assets/css/blocks/{$block}.css" ),
					'path'   => get_theme_file_path( "assets/css/blocks/{$block}.css" ),
					'ver'    => wp_get_theme()->get( 'Version' ),
				)
			);
		}
	}
endif;
add_action( 'init', 'apex_grid_enqueue_block_styles' );

if ( ! function_exists( 'apex_grid_register_block_styles' ) ) :
	/**
	 * Registers block style variations.
	 *
	 * The outline button style is provided by core and styled in theme.json.
	 * The CSS for each variation lives in assets/css/blocks/.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function apex_grid_register_block_styles() {
		$styles = array(
			'core/group'     => array(
				'apex-grid-stat-card'      => __( 'Card', 'apex-grid' ),
				'apex-grid-carbon-texture' => __( 'Carbon texture', 'apex-grid' ),
				'apex-grid-speed-lines'    => __( 'Speed lines', 'apex-grid' ),
			),
			'core/cover'     => array(
				'apex-grid-carbon-texture' => __( 'Carbon texture', 'apex-grid' ),
				'apex-grid-speed-lines'    => __( 'Speed lines', 'apex-grid' ),
			),
			'core/heading'   => array(
				'apex-grid-stripe'        => __( 'Racing stripe', 'apex-grid' ),
				'apex-grid-gradient-text' => __( 'Gradient text', 'apex-grid' ),
			),
			'core/paragraph' => array(
				'apex-grid-kicker'   => __( 'Kicker', 'apex-grid' ),
				'apex-grid-live-dot' => __( 'Live dot', 'apex-grid' ),
			),
			'core/separator' => array(
				'apex-grid-racing-stripe' => __( 'Racing stripe', 'apex-grid' ),
			),
			'core/table'     => array(
				'apex-grid-leaderboard' => __( 'Leaderboard', 'apex-grid' ),
			),
		);

		foreach ( $styles as $block => $variations ) {
			foreach ( $variations as $name => $label ) {
				register_block_style(
					$block,
					array(
						'name'  => $name,
						'label' => $label,
					)
				);
			}
		}
	}
endif;
add_action( 'init', 'apex_grid_register_block_styles' );

if ( ! function_exists( 'apex_grid_register_pattern_categories' ) ) :
	/**
	 * Registers custom block pattern categories.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function apex_grid_register_pattern_categories() {
		register_block_pattern_category(
			'apex-grid-sections',
			array(
				'label'       => __( 'Apex Grid: Sections', 'apex-grid' ),
				'description' => __( 'Hero, stats, events, posts and call-to-action sections.', 'apex-grid' ),
			)
		);

		register_block_pattern_category(
			'apex-grid-pages',
			array(
				'label'       => __( 'Apex Grid: Pages', 'apex-grid' ),
				'description' => __( 'Full page layouts built from Apex Grid sections.', 'apex-grid' ),
			)
		);
	}
endif;
add_action( 'init', 'apex_grid_register_pattern_categories' );

if ( ! function_exists( 'apex_grid_related_posts_query' ) ) :
	/**
	 * Limits the "Related posts" query loop to the current post's categories.
	 *
	 * Applies only to Post Template blocks with the class `apex-grid-related-posts`.
	 *
	 * @since 1.0.0
	 *
	 * @param array    $query Query vars for WP_Query.
	 * @param WP_Block $block The Post Template block instance.
	 * @return array Filtered query vars.
	 */
	function apex_grid_related_posts_query( $query, $block ) {
		$class_name = isset( $block->parsed_block['attrs']['className'] ) ? $block->parsed_block['attrs']['className'] : '';

		if ( ! is_singular() || false === strpos( $class_name, 'apex-grid-related-posts' ) ) {
			return $query;
		}

		$post_id      = get_queried_object_id();
		$category_ids = wp_get_post_categories( $post_id );

		if ( ! empty( $category_ids ) ) {
			$query['category__in'] = $category_ids;
		}

		$query['post__not_in']        = array_merge( isset( $query['post__not_in'] ) ? (array) $query['post__not_in'] : array(), array( $post_id ) );
		$query['ignore_sticky_posts'] = true;

		return $query;
	}
endif;
add_filter( 'query_loop_block_query_vars', 'apex_grid_related_posts_query', 10, 2 );
