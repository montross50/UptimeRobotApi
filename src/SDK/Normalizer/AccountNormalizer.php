<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Montross50\UptimeRobotApi\SDK\Runtime\Normalizer\CheckArray;
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
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Montross50\\UptimeRobotApi\\SDK\\Model\\Account';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Montross50\\UptimeRobotApi\\SDK\\Model\\Account';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Montross50\UptimeRobotApi\SDK\Model\Account();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('monitorLimit', $data)) {
            $object->setMonitorLimit($data['monitorLimit']);
        }
        if (\array_key_exists('monitorInterval', $data)) {
            $object->setMonitorInterval($data['monitorInterval']);
        }
        if (\array_key_exists('upMonitors', $data)) {
            $object->setUpMonitors($data['upMonitors']);
        }
        if (\array_key_exists('downMonitors', $data)) {
            $object->setDownMonitors($data['downMonitors']);
        }
        if (\array_key_exists('pausedMonitors', $data)) {
            $object->setPausedMonitors($data['pausedMonitors']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMonitorLimit()) {
            $data['monitorLimit'] = $object->getMonitorLimit();
        }
        if (null !== $object->getMonitorInterval()) {
            $data['monitorInterval'] = $object->getMonitorInterval();
        }
        if (null !== $object->getUpMonitors()) {
            $data['upMonitors'] = $object->getUpMonitors();
        }
        if (null !== $object->getDownMonitors()) {
            $data['downMonitors'] = $object->getDownMonitors();
        }
        if (null !== $object->getPausedMonitors()) {
            $data['pausedMonitors'] = $object->getPausedMonitors();
        }
        return $data;
    }
}