<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\UptimeRobotApi\\SDK\\Model\\Account';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\UptimeRobotApi\SDK\Model\Account;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\UptimeRobotApi\SDK\Model\Account();
        if (property_exists($data, 'monitorLimit')) {
            $object->setMonitorLimit($data->{'monitorLimit'});
        }
        if (property_exists($data, 'monitorInterval')) {
            $object->setMonitorInterval($data->{'monitorInterval'});
        }
        if (property_exists($data, 'upMonitors')) {
            $object->setUpMonitors($data->{'upMonitors'});
        }
        if (property_exists($data, 'downMonitors')) {
            $object->setDownMonitors($data->{'downMonitors'});
        }
        if (property_exists($data, 'pausedMonitors')) {
            $object->setPausedMonitors($data->{'pausedMonitors'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMonitorLimit()) {
            $data->{'monitorLimit'} = $object->getMonitorLimit();
        }
        if (null !== $object->getMonitorInterval()) {
            $data->{'monitorInterval'} = $object->getMonitorInterval();
        }
        if (null !== $object->getUpMonitors()) {
            $data->{'upMonitors'} = $object->getUpMonitors();
        }
        if (null !== $object->getDownMonitors()) {
            $data->{'downMonitors'} = $object->getDownMonitors();
        }
        if (null !== $object->getPausedMonitors()) {
            $data->{'pausedMonitors'} = $object->getPausedMonitors();
        }
        return $data;
    }
}
