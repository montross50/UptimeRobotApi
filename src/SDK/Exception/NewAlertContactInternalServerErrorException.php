<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class NewAlertContactInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('server error');
    }
}
