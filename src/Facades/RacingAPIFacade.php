<?php

namespace RacingPackage\Facades;

use Illuminate\Support\Facades\Facade;
use RacingPackage\Contracts\ClientInterface;

/**
 * @method static \RacingPackage\Contracts\ClientInterface driver(string $driver = null)
 *
*/
class RacingAPIFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return ClientInterface::class;
    }
}