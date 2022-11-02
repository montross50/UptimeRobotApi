<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class GetAlertContactsBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('bad parameter');
    }
}
