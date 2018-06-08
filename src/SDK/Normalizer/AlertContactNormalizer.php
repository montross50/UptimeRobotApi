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
class AlertContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContact';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\UptimeRobotApi\SDK\Model\AlertContact;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\UptimeRobotApi\SDK\Model\AlertContact();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'value')) {
            $object->setValue($data->{'value'});
        }
        if (property_exists($data, 'friendlyname')) {
            $object->setFriendlyname($data->{'friendlyname'});
        }
        if (property_exists($data, 'threshold')) {
            $object->setThreshold($data->{'threshold'});
        }
        if (property_exists($data, 'recurrence')) {
            $object->setRecurrence($data->{'recurrence'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        }
        if (null !== $object->getFriendlyname()) {
            $data->{'friendlyname'} = $object->getFriendlyname();
        }
        if (null !== $object->getThreshold()) {
            $data->{'threshold'} = $object->getThreshold();
        }
        if (null !== $object->getRecurrence()) {
            $data->{'recurrence'} = $object->getRecurrence();
        }
        return $data;
    }
}