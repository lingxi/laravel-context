<?php

namespace Lingxi\Context;

use Illuminate\Support\Facades\Facade;

class ContextFacade extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'context';
    }
}
