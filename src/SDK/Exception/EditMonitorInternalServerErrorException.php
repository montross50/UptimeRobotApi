<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class EditMonitorInternalServerErrorException extends \RuntimeException implements ServerException
{
    public function __construct()
    {
        parent::__construct('server error', 500);
    }
}
