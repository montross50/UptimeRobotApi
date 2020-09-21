<?php
namespace Montross50\UptimeRobotApi;

use Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse;

class ManagerTests extends TestCase
{
    
    public function testApiKeyInsertion()
    {
        $key = 'foo';
        config(['uptimerobot.apiKey' => $key]);
        /**
         * @var $api UptimeRobotManager
         */
        $api = \App::make(UptimeRobotResourceInterface::class);
        $this->assertEquals($key, $api->getApiKey());
    }
    
    public function testMergeApiKeyAddsKey()
    {
        $key = 'foo';
        config(['uptimerobot.apiKey' => $key]);
        /**
         * @var $api UptimeRobotManager
         */
        $api = \App::make(UptimeRobotResourceInterface::class);
        $params = $api->mergeApiKey([]);
        $this->assertArrayHasKey('apiKey', $params);
        $this->assertEquals($key, $params['apiKey']);
    }
    
    public function testMergeApiKeyDoesNotOverridePassedInKey()
    {
        $key = 'foo';
        config(['uptimerobot.apiKey' => $key]);
        /**
         * @var $api UptimeRobotManager
         */
        $api = \App::make(UptimeRobotResourceInterface::class);
        $params = $api->mergeApiKey(['apiKey'=>'bar']);
        $this->assertArrayHasKey('apiKey', $params);
        $this->assertEquals('bar', $params['apiKey']);
    }

//    public function testGetMonitors()
//    {
//
//        $api = app(UptimeRobotResourceInterface::class);
//        $monitors = $api->getMonitors();
//        $this->assertInstanceOf(GetMonitorsResponse::class,$monitors);
//    }
}
