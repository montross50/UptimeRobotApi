<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Montross50\UptimeRobotApi\SDK\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Montross50\\UptimeRobotApi\\SDK\\Model\\AccountDetails' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\AccountDetailsNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\Account' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\AccountNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\GetMonitorsResponse' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\GetMonitorsResponseNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\MonitorArray' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\MonitorArrayNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\Monitor' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\MonitorNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContact' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\AlertContactNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\Log' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\LogNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\ResponseTime' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\ResponseTimeNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\MonitorResponse' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\MonitorResponseNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\GetAlertContactsResponse' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\GetAlertContactsResponseNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContactArray' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\AlertContactArrayNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContactResponse' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\AlertContactResponseNormalizer', 'Montross50\\UptimeRobotApi\\SDK\\Model\\ErrorResponse' => 'Montross50\\UptimeRobotApi\\SDK\\Normalizer\\ErrorResponseNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Montross50\\UptimeRobotApi\\SDK\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}
