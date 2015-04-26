<?php
/**
 * Services that provide a way to automatically add hooks can implement this interface
 *
 * @author Dan Bissonnet <dan@danisadesigner.com>
 */
namespace DBisso\Hooker;

interface HookerInterface {
	public function hook( $hooked_class = null, $prefix = null );
}

