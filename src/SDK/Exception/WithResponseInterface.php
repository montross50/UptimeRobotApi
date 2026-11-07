<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}