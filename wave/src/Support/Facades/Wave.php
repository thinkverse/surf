<?php

namespace Wave\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void routes()
 * @method static void api()
 */
class Wave extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'wave';
    }
}
