<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class DeleteMonitorBadRequestException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('bad parameter', 400);
    }
}
