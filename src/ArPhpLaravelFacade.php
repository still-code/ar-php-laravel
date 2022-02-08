<?php

namespace AtmCode\ArPhpLaravel;

use Illuminate\Support\Facades\Facade;

class ArPhpLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ArPhpLaravel::class;
    }
}
