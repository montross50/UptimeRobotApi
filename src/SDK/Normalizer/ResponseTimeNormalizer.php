<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class ResponseTimeNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Montross50\\UptimeRobotApi\\SDK\\Model\\ResponseTime') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Montross50\UptimeRobotApi\SDK\Model\ResponseTime) {
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
        $object = new \Montross50\UptimeRobotApi\SDK\Model\ResponseTime();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'value')) {
            $object->setValue($data->{'value'});
        }
        if (property_exists($data, 'datetime')) {
            $object->setDatetime($data->{'datetime'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        }
        if (null !== $object->getDatetime()) {
            $data->{'datetime'} = $object->getDatetime();
        }
        return $data;
    }
}