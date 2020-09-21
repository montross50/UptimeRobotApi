<?php
namespace Montross50\UptimeRobotApi;

use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Strategy\MockClientStrategy;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void 
    {
        parent::setUp();
        
    }
    
    protected function getPackageProviders($app)
    {
        return [\Montross50\UptimeRobotApi\UptimeRobotApiServiceProvider::class];
    }

    
}
