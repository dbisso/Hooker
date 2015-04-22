<?php
/**
 * Provides auto-hooking for filters, actions and shortcodes.
 *
 * @author Dan Bissonnet <dan@danisadesigner.com>
 */
namespace DBisso\Util;

/**
 * \DBisso\Util\Hooker
 */
interface HookerInterface {
	public function hook( $hooked_class = null, $hook_prefix = '' );
}
