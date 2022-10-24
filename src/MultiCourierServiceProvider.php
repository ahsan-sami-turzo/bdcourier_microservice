<?php


namespace Radon\MultiCourier;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Radon\MultiCourier\Log\Log;

class MultiCourierServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     * @version v1.0.1
     * @since v1.0.1
     */
    public function register()
    {
        $this->app->bind('MultiCourier', function () {

            $provider = Config::get('multicourier.default_provider');
            $sender = Courier::getInstance();
            $sender->setProvider($provider);
            $sender->setConfig(config('multicourier.providers')[$provider]);
            return new MultiCourier($sender);
        });

        $this->app->bind('MultiCourierLogger', function () {
            return new Log;
        });

        $this->app->bind('MultiCourierRequest', function () {
            return new Request;
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     * @version v1.0.1
     * @since v1.0.1
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Config/multicourier.php' => config_path('multicourier.php'),
        ]);


    }

}
