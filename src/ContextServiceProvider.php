<?php

namespace Lingxi\Context;

use Illuminate\Support\ServiceProvider;

class ContextServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton('context', function () {
            return Context::create();
        });
    }
}
