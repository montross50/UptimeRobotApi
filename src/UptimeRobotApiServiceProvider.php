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
        $this->app->bind(UptimeRobotResourceInterface::class, function ($app) {
            $api = $app->make(Client::class);
            $urm = new UptimeRobotManager($api);
            $apiKey = config('uptimerobot.apiKey', '');
            $urm->setApiKey($apiKey);
            return $urm;
        });
        $this->app->bind(Client::class,function($app){
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri($app['config']['uptimerobot.apiUrl']);
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
            return Client::create($httpClient);
        });
    }
}
