<?php
namespace Montross50\UptimeRobotApi;

use Http\Mock\Client as MockClient;
use Montross50\UptimeRobotApi\SDK\Client;
use Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse;
use Nyholm\Psr7\Response;

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

    public function testGetMonitorsDeserializesResponse()
    {
        config(['uptimerobot.apiKey' => 'foo']);
        $http = new MockClient();
        $http->addResponse(new Response(200, ['Content-Type' => 'application/json'], json_encode([
            'stat' => 'ok',
            'monitors' => ['monitor' => [['id' => '777', 'friendlyname' => 'Example', 'url' => 'https://example.com']]],
        ])));
        $this->app->instance(Client::class, Client::create($http));

        $response = $this->app->make(UptimeRobotResourceInterface::class)->getMonitors();

        $this->assertInstanceOf(GetMonitorsResponse::class, $response);
        $this->assertSame('ok', $response->getStat());
        $monitor = $response->getMonitors()->getMonitor()[0];
        $this->assertSame('777', $monitor->getId());
        $this->assertSame('Example', $monitor->getFriendlyname());
        $request = $http->getLastRequest();
        $this->assertSame('api.uptimerobot.com', $request->getUri()->getHost());
        $this->assertStringContainsString('apiKey=foo', $request->getUri()->getQuery());
    }
}
