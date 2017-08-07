<?php

namespace Montross50\UptimeRobotApi;

use Http\Message\MessageFactory\GuzzleMessageFactory;
use Illuminate\Support\ServiceProvider;
use Joli\Jane\Encoder\RawEncoder;
use Montross50\UptimeRobotApi\SDK\Normalizer\NormalizerFactory;
use Montross50\UptimeRobotApi\SDK\Resource\UptimeRobotResource;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

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
        $this->mergeConfigFrom(
            __DIR__ . '/../config/uptimerobot.php', 'uptimerobot'
        );
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(UptimeRobotManager::class,function($app){

            $client = app(UptimeRobotClient::class,['options'=>['base_uri'=>config('uptimerobot.apiUrl')]]);
            $serializer = new Serializer(
                    NormalizerFactory::create(),
                    [
                        new JsonEncoder(
                            new JsonEncode(),
                            new JsonDecode()
                        ),
                        new RawEncoder()
                    ]
                );
            $messageFactory = new GuzzleMessageFactory();
            $api = new UptimeRobotResource($client,$messageFactory,$serializer);
            $urm = new UptimeRobotManager($api);
            $apiKey = config('uptimerobot.apiKey', '');
            $urm->setApiKey($apiKey);
            return $urm;
        });
    }
}