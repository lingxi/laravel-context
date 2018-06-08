<?php

namespace Kenuocn\Context;

use Illuminate\Support\Facades\Facade;

/**
 * Class ContextFacade
 * @package Kenuocn\Context
 */
class ContextFacade extends Facade
{
    /**
     * Get the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'context';
    }
}
