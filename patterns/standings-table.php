<?php
/**
 * Title: Standings table
 * Slug: apex-grid/standings-table
 * Categories: apex-grid-sections, text
 * Keywords: standings, leaderboard, table, results, points
 * Description: Leaderboard-style table with sample rows. Replace the names and points with your own results.
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

$apex_grid_rows = array(
	array( '1', 'Alex Rivera', _x( 'Pro', 'Sample class', 'apex-grid' ), '186' ),
	array( '2', 'Sam Okafor', _x( 'Pro', 'Sample class', 'apex-grid' ), '171' ),
	array( '3', 'Mira Chen', _x( 'Am', 'Sample class', 'apex-grid' ), '158' ),
	array( '4', 'Jonas Berg', _x( 'Am', 'Sample class', 'apex-grid' ), '140' ),
	array( '5', 'Priya Nair', _x( 'Rookie', 'Sample class', 'apex-grid' ), '127' ),
);

$apex_grid_tbody = '';
foreach ( $apex_grid_rows as $apex_grid_row ) {
	$apex_grid_tbody .= '<tr><td>' . implode( '</td><td>', array_map( 'esc_html', $apex_grid_row ) ) . '</td></tr>';
}
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"is-style-apex-grid-stripe","fontSize":"x-large"} -->
<h2 class="wp-block-heading is-style-apex-grid-stripe has-x-large-font-size"><?php echo esc_html_x( 'Season standings', 'Section heading', 'apex-grid' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"is-style-apex-grid-leaderboard"} -->
<figure class="wp-block-table is-style-apex-grid-leaderboard"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html_x( 'Pos', 'Table header: position', 'apex-grid' ); ?></th><th><?php echo esc_html_x( 'Driver', 'Table header', 'apex-grid' ); ?></th><th><?php echo esc_html_x( 'Class', 'Table header', 'apex-grid' ); ?></th><th><?php echo esc_html_x( 'Points', 'Table header', 'apex-grid' ); ?></th></tr></thead><tbody><?php echo wp_kses_post( $apex_grid_tbody ); ?></tbody></table><figcaption class="wp-element-caption"><?php esc_html_e( 'Sample standings — replace with your own results.', 'apex-grid' ); ?></figcaption></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->
