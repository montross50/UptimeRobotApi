<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class EditMonitorInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('server error');
    }
}
