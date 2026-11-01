<?php
/**
 * Dashboard welcome notice.
 *
 * Shows a single dismissible notice on the Dashboard and Themes screens to
 * users who can manage themes. Dismissal is stored per user and works
 * without JavaScript. It is cleared when the theme is activated again.
 *
 * @package Apex_Grid
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'apex_grid_notice_is_visible' ) ) :
	/**
	 * Checks whether the notice should be shown to the current user on the current screen.
	 *
	 * @since 1.0.0
	 *
	 * @return bool
	 */
	function apex_grid_notice_is_visible() {
		if ( ! current_user_can( 'switch_themes' ) ) {
			return false;
		}

		if ( get_user_meta( get_current_user_id(), 'apex_grid_notice_dismissed', true ) ) {
			return false;
		}

		$screen = get_current_screen();

		return $screen && in_array( $screen->id, array( 'dashboard', 'themes' ), true );
	}
endif;

if ( ! function_exists( 'apex_grid_render_notice' ) ) :
	/**
	 * Prints the notice.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function apex_grid_render_notice() {
		if ( ! apex_grid_notice_is_visible() ) {
			return;
		}

		$theme       = wp_get_theme( get_template() );
		$dismiss_url = wp_nonce_url( add_query_arg( 'apex-grid-dismiss-notice', '1' ), 'apex_grid_dismiss_notice', 'apex_grid_nonce' );
		?>
		<div class="notice notice-info apex-grid-notice">
			<div class="apex-grid-notice__media">
				<img src="<?php echo esc_url( get_theme_file_uri( 'screenshot.png' ) ); ?>" width="1200" height="900" alt="<?php echo esc_attr( sprintf( /* translators: %s: Theme name. */ __( '%s theme preview', 'apex-grid' ), $theme->get( 'Name' ) ) ); ?>" />
			</div>
			<div class="apex-grid-notice__content">
				<p class="apex-grid-notice__kicker"><?php esc_html_e( 'Theme activated', 'apex-grid' ); ?></p>
				<h2 class="apex-grid-notice__title">
					<?php
					/* translators: %s: Theme name. */
					printf( esc_html__( 'Thanks for using %s!', 'apex-grid' ), '<span>' . esc_html( $theme->get( 'Name' ) ) . '</span>' );
					?>
				</h2>
				<p class="apex-grid-notice__text"><?php esc_html_e( 'Find documentation, updates and more from the theme author.', 'apex-grid' ); ?></p>
			</div>
			<p class="apex-grid-notice__actions">
				<a class="apex-grid-notice__button" href="<?php echo esc_url( $theme->get( 'AuthorURI' ) ); ?>" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Visit Website', 'apex-grid' ); ?>
					<span class="screen-reader-text"><?php esc_html_e( '(opens in a new tab)', 'apex-grid' ); ?></span>
				</a>
			</p>
			<a class="notice-dismiss apex-grid-notice__dismiss" href="<?php echo esc_url( $dismiss_url ); ?>">
				<span class="screen-reader-text"><?php esc_html_e( 'Dismiss this notice.', 'apex-grid' ); ?></span>
			</a>
		</div>
		<?php
	}
endif;
add_action( 'admin_notices', 'apex_grid_render_notice' );

if ( ! function_exists( 'apex_grid_dismiss_notice' ) ) :
	/**
	 * Saves the dismissal for the current user and redirects back.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function apex_grid_dismiss_notice() {
		if ( ! isset( $_GET['apex-grid-dismiss-notice'] ) || ! current_user_can( 'switch_themes' ) ) {
			return;
		}

		check_admin_referer( 'apex_grid_dismiss_notice', 'apex_grid_nonce' );

		update_user_meta( get_current_user_id(), 'apex_grid_notice_dismissed', 1 );

		wp_safe_redirect( remove_query_arg( array( 'apex-grid-dismiss-notice', 'apex_grid_nonce' ) ) );
		exit;
	}
endif;
add_action( 'admin_init', 'apex_grid_dismiss_notice' );

if ( ! function_exists( 'apex_grid_reset_notice' ) ) :
	/**
	 * Shows the notice again after the theme is activated.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function apex_grid_reset_notice() {
		delete_metadata( 'user', 0, 'apex_grid_notice_dismissed', '', true );
	}
endif;
add_action( 'after_switch_theme', 'apex_grid_reset_notice' );

if ( ! function_exists( 'apex_grid_enqueue_notice_styles' ) ) :
	/**
	 * Enqueues the notice styles on screens where it is shown.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function apex_grid_enqueue_notice_styles() {
		if ( ! apex_grid_notice_is_visible() ) {
			return;
		}

		wp_enqueue_style(
			'apex-grid-admin-notice',
			get_theme_file_uri( 'assets/css/admin-notice.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'admin_enqueue_scripts', 'apex_grid_enqueue_notice_styles' );
