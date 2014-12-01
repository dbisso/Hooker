<?php
/**
 * Provides auto-hooking for filters, actions and shortcodes.
 *
 * @version 4.0-alpha
 * @author Dan Bissonnet <dan@danisadesigner.com>
 */
namespace DBisso\Util;

/**
 * \DBisso\Util\Hooker
 */
interface HookerInterface {
	public function hook( $hooked_class = null, $hook_prefix = '' );
}

