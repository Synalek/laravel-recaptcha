<?php

namespace Synalek\Recaptcha\Providers;

use Synalek\Recaptcha\Captcha;

class Recaptcha extends \Illuminate\Support\ServiceProvider
{
    /**
     * The path to the config file
     */
    protected $configPath = __DIR__ . '/../../config/recaptcha.php';

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath, 'recaptcha');

        $this->app->singleton('recaptcha', function ($app) {
            return new Captcha(
                config('recaptcha.secret'),
                config('recaptcha.sitekey'),
                config('recaptcha.options')
            );
        });

        $this->app->alias('recaptcha', Captcha::class);
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            $this->configPath => config_path('recaptcha.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['recaptcha'];
    }
}
