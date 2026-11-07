<?php

namespace Montross50\UptimeRobotApi;

use Illuminate\Support\ServiceProvider;
use Montross50\UptimeRobotApi\SDK\Client;

class UptimeRobotApiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/uptimerobot.php' => config_path('uptimerobot.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/uptimerobot.php',
            'uptimerobot'
        );
        $this->app->bindIf(Client::class, function () {
            return Client::create();
        });
        $this->app->bind(UptimeRobotResourceInterface::class, function ($app) {
            $urm = new UptimeRobotManager($app->make(Client::class));
            $apiKey = config('uptimerobot.apiKey', '');
            $urm->setApiKey($apiKey);
            return $urm;
        });
    }
}
