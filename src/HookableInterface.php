<?php
/**
 * Hookeable classes can be passed a Hooker which will register
 * their methods in the WordPress hook system.
 *
 * @author Dan Bissonnet <dan@danisadesigner.com>
 */
namespace DBisso\Hooker;

interface HookableInterface {
	public function hook( HookerInterface $hooker, $prefix = null );
}
