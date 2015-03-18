<?php namespace MyVendor\MyPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * License: MIT
 * Github: https://github.com/laracasts
 * @package laracasts/flash
 */
class PackageFacade extends Facade {

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mypackage';
    }

} 