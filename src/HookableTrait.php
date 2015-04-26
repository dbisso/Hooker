<?php
/**
 * Hookable classes can be passed a Hooker which will register their methods as filter
 * and actions to the WordPress hook system.
 *
 * @author Dan Bissonnet <dan@danisadesigner.com>
 */
namespace DBisso\Hooker;

trait HookableTrait {
	public function hook( HookerInterface $hooker, $prefix = null ) {
		$hooker->hook( $this, $prefix );
	}
}
