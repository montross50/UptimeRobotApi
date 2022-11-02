<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class DeleteMonitorBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('bad parameter');
    }
}
