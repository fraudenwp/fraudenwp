<?php
/**
 * CPTUI Extended Support.
 *
 * This file holds customizations and functions needed to add our support integration
 * for built-in support tasks for the user.
 *
 * @package CPTUIExtended
 * @author Pluginize
 * @since 1.0.0
 */

/**
 * Adds "Help" toggle to CPTUI pages.
 *
 * @since 1.0.0
 *
 * @internal
 */
function cptui_add_help_button() {
	printf(
		'<a style="float:right; margin:1em; position:absolute; top:10px; right:10px;" id="support-beacon" class="button" href="%s" data-search="%s" target="_blank" rel=”noopener”>%s</a>',
		esc_url( 'https://docs.pluginize.com' ),
		esc_attr__( 'Custom Post Type UI', 'cptuiext' ),
		esc_html__( 'Need Help?', 'cptuiext' )
	);
}
add_action( 'cptui_below_post_type_tab_menu', 'cptui_add_help_button' );
