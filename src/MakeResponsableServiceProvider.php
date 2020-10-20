<?php

namespace Jossephus\MakeResponsable;

use Illuminate\Support\ServiceProvider;
use Jossephus\MakeResponsable\Commands\MakeFooCommand;
use Jossephus\MakeResponsable\Commands\MakeResponsableCommand;

class MakeResponsableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeResponsableCommand::class,
            ]);
        }
    }
}
