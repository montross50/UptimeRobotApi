<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class LogNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Montross50\\UptimeRobotApi\\SDK\\Model\\Log') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Montross50\UptimeRobotApi\SDK\Model\Log) {
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
        $object = new \Montross50\UptimeRobotApi\SDK\Model\Log();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'datetime')) {
            $object->setDatetime($data->{'datetime'});
        }
        if (property_exists($data, 'alertcontact')) {
            $values = array();
            foreach ($data->{'alertcontact'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContact', 'raw', $context);
            }
            $object->setAlertcontact($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getDatetime()) {
            $data->{'datetime'} = $object->getDatetime();
        }
        if (null !== $object->getAlertcontact()) {
            $values = array();
            foreach ($object->getAlertcontact() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'alertcontact'} = $values;
        }
        return $data;
    }
}