<?php
namespace Montross50\UptimeRobotApi;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    
    protected function getPackageProviders($app)
    {
        return [\Montross50\UptimeRobotApi\UptimeRobotApiServiceProvider::class];
    }
}
