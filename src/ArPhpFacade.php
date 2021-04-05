<?php

namespace AtmCode\ArPhp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AtmCode\ArPhpLaravel\Skeleton\SkeletonClass
 */
class ArPhpFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ar-php-laravel';
    }
}
