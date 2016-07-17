<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class AccountNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Montross50\\UptimeRobotApi\\SDK\\Model\\Account') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Montross50\UptimeRobotApi\SDK\Model\Account) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (empty($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Montross50\UptimeRobotApi\SDK\Model\Account();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
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