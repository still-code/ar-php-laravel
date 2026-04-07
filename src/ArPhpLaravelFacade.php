<?php

namespace StillCode\ArPhpLaravel;

use Illuminate\Support\Facades\Facade;

class ArPhpLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return ArPhpLaravel::class;
    }
}
