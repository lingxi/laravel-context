<?php

namespace Kenuocn\Context;

use Illuminate\Support\ServiceProvider;

/**
 * Class ContextServiceProvider
 * @package Kenuocn\Context
 */
class ContextServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;


    /**
     *
     */
    public function register()
    {
        $this->app->singleton('context', function () {
            return Context::create();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [
            'context',
        ];
    }
}
