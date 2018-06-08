<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new AccountDetailsNormalizer();
        $normalizers[] = new AccountNormalizer();
        $normalizers[] = new GetMonitorsResponseNormalizer();
        $normalizers[] = new MonitorArrayNormalizer();
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