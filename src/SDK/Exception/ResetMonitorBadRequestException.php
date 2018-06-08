<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class ResetMonitorBadRequestException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('bad parameter', 400);
    }
}
