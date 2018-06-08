<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class GetAlertContactsInternalServerErrorException extends \RuntimeException implements ServerException
{
    function __construct()
    {
        parent::__construct('server error', 500);
    }
}
