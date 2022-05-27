<?php

namespace Helaplus\Laravelchapchap\Facades;

use Illuminate\Support\Facades\Facade;

class Laravelchapchap extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravelchapchap';
    }
}
