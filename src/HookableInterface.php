<?php
/**
 * Hookeable classes can be passed a Hooker which will register their methods as filter
 * and actions to the WordPress hook system.
 *
 * @author Dan Bissonnet <dan@danisadesigner.com>
 */
namespace DBisso\Hooker;

/**
 * \DBisso\Util\HookableInterface
 */
interface HookableInterface {
	static public function bootstrap( HookerInterface $hooker );
}
