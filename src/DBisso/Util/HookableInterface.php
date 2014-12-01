<?php
/**
 * Hookeable classes can be passed a Hooker which will register their methods as filter
 * and actions to the WordPress hook system.
 *
 * @version 4.0-alpha
 * @author Dan Bissonnet <dan@danisadesigner.com>
 */
namespace DBisso\Util;

/**
 * \DBisso\Util\HookableInterface
 */
interface HookableInterface {
	static public function bootstrap( HookerInterface $hooker );
}
