<?php

namespace Lingxi\Context;

use Illuminate\Support\ServiceProvider;

class ContextServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('context', function () {
            return Context::create();
        });
    }

    public function provides()
    {
        return [
            'context',
        ];
    }
}
