<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class DeleteMonitorInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('server error');
    }
}
