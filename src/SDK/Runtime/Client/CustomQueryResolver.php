<?php

namespace Montross50\UptimeRobotApi\SDK\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;

interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}
