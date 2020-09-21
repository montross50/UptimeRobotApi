<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class EditMonitorBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('bad parameter', 400);
    }
}
