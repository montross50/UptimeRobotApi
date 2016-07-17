<?php
namespace Montross50\UptimeRobotApi;

/**
 * Created by PhpStorm.
 * User: tschmidt
 * Date: 7/16/16
 * Time: 8:53 PM
 */
class ManagerTests extends TestCase{
    
    public function testApiKeyInsertion()
    {
        $key = 'foo';
        \Config::set('uptimerobot.apiKey',$key);
        /**
         * @var $api UptimeRobotManager
         */
        $api = \App::make(UptimeRobotManager::class);
        $this->assertEquals($key,$api->getApiKey());
    }
    
    public function testMergeApiKeyAddsKey()
    {
        $key = 'foo';
        \Config::set('uptimerobot.apiKey',$key);
        /**
         * @var $api UptimeRobotManager
         */
        $api = \App::make(UptimeRobotManager::class);
        $params = $api->mergeApiKey([]);
        $this->assertArrayHasKey('apiKey',$params);
        $this->assertEquals($key,$params['apiKey']);
    }
    
    public function testMergeApiKeyDoesNotOverridePassedInKey()
    {
        $key = 'foo';
        \Config::set('uptimerobot.apiKey',$key);
        /**
         * @var $api UptimeRobotManager
         */
        $api = \App::make(UptimeRobotManager::class);
        $params = $api->mergeApiKey(['apiKey'=>'bar']);
        $this->assertArrayHasKey('apiKey',$params);
        $this->assertEquals('bar',$params['apiKey']);
    }
}