<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class DeleteAlertContactBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('bad parameter');
    }
}