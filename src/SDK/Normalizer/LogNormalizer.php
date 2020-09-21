<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Montross50\UptimeRobotApi\SDK\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\UptimeRobotApi\\SDK\\Model\\Log';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Montross50\\UptimeRobotApi\\SDK\\Model\\Log';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Montross50\UptimeRobotApi\SDK\Model\Log();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('datetime', $data)) {
            $object->setDatetime($data['datetime']);
        }
        if (\array_key_exists('alertcontact', $data)) {
            $values = array();
            foreach ($data['alertcontact'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContact', 'json', $context);
            }
            $object->setAlertcontact($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getDatetime()) {
            $data['datetime'] = $object->getDatetime();
        }
        if (null !== $object->getAlertcontact()) {
            $values = array();
            foreach ($object->getAlertcontact() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['alertcontact'] = $values;
        }
        return $data;
    }
}
