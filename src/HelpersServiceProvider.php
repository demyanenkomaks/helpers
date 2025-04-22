<?php

namespace Maksde\Helpers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/helpers.php', 'helpers');
    }

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'helpers');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/lang' => lang_path('vendor/helpers'),
            ], 'helpers-lang');

            $this->publishes([
                __DIR__.'/../config/helpers.php' => config_path('helpers.php'),
            ], 'helpers-config');
        }
    }
}
