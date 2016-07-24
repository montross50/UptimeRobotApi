<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Joli\Jane\Normalizer\ReferenceNormalizer;
use Joli\Jane\Normalizer\NormalizerArray;
class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new ReferenceNormalizer();
        $normalizers[] = new NormalizerArray();
        $normalizers[] = new AccountDetailsNormalizer();
        $normalizers[] = new AccountNormalizer();
        $normalizers[] = new GetMonitorsResponseNormalizer();
        $normalizers[] = new MonitorNormalizer();
        $normalizers[] = new AlertContactNormalizer();
        $normalizers[] = new LogNormalizer();
        $normalizers[] = new ResponseTimeNormalizer();
        $normalizers[] = new MonitorResponseNormalizer();
        $normalizers[] = new GetAlertContactsResponseNormalizer();
        $normalizers[] = new AlertContactArrayNormalizer();
        $normalizers[] = new AlertContactResponseNormalizer();
        $normalizers[] = new ErrorResponseNormalizer();
        return $normalizers;
    }
}