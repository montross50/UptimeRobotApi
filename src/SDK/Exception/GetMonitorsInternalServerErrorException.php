<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class GetMonitorsInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('server error');
    }
}
