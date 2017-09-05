<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Sincro_Mailchimp
 *
 * @wordpress-plugin
 * Plugin Name:       Sincro Mailchimp
 * Plugin URI:        
 * Description:       Il plugin permette di registrare/eliminare la registrazione di un utente dalla Mailing List MailChimp tramite un'opzione dalla 	
 *				      pagina WordPress di modifica profilo utente
 * Version:           1.1.0
 * Author:            Dario Morbidi
 * Author URI:        
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sincro-mailchimp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sincro-mailchimp-activator.php
 */
function activate_sincro_mailchimp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sincro-mailchimp-activator.php';
	Sincro_Mailchimp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sincro-mailchimp-deactivator.php
 */
function deactivate_sincro_mailchimp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sincro-mailchimp-deactivator.php';
	Sincro_Mailchimp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sincro_mailchimp' );
register_deactivation_hook( __FILE__, 'deactivate_sincro_mailchimp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sincro-mailchimp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sincro_mailchimp() {

	$plugin = new Sincro_Mailchimp();
	$plugin->run();

}
run_sincro_mailchimp();
