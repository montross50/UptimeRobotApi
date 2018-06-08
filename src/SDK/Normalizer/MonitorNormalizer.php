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

class MonitorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\UptimeRobotApi\\SDK\\Model\\Monitor';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\UptimeRobotApi\SDK\Model\Monitor;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\UptimeRobotApi\SDK\Model\Monitor();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'friendlyname')) {
            $object->setFriendlyname($data->{'friendlyname'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'subtype')) {
            $object->setSubtype($data->{'subtype'});
        }
        if (property_exists($data, 'keywordtype')) {
            $object->setKeywordtype($data->{'keywordtype'});
        }
        if (property_exists($data, 'keywordvalue')) {
            $object->setKeywordvalue($data->{'keywordvalue'});
        }
        if (property_exists($data, 'httpusername')) {
            $object->setHttpusername($data->{'httpusername'});
        }
        if (property_exists($data, 'httppassword')) {
            $object->setHttppassword($data->{'httppassword'});
        }
        if (property_exists($data, 'port')) {
            $object->setPort($data->{'port'});
        }
        if (property_exists($data, 'interval')) {
            $object->setInterval($data->{'interval'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'alltimeuptimeratio')) {
            $object->setAlltimeuptimeratio($data->{'alltimeuptimeratio'});
        }
        if (property_exists($data, 'customuptimeratio')) {
            $object->setCustomuptimeratio($data->{'customuptimeratio'});
        }
        if (property_exists($data, 'alertcontact')) {
            $values = array();
            foreach ($data->{'alertcontact'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContact', 'json', $context);
            }
            $object->setAlertcontact($values);
        }
        if (property_exists($data, 'log')) {
            $values_1 = array();
            foreach ($data->{'log'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Montross50\\UptimeRobotApi\\SDK\\Model\\Log', 'json', $context);
            }
            $object->setLog($values_1);
        }
        if (property_exists($data, 'responsetime')) {
            $values_2 = array();
            foreach ($data->{'responsetime'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Montross50\\UptimeRobotApi\\SDK\\Model\\ResponseTime', 'json', $context);
            }
            $object->setResponsetime($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getFriendlyname()) {
            $data->{'friendlyname'} = $object->getFriendlyname();
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getSubtype()) {
            $data->{'subtype'} = $object->getSubtype();
        }
        if (null !== $object->getKeywordtype()) {
            $data->{'keywordtype'} = $object->getKeywordtype();
        }
        if (null !== $object->getKeywordvalue()) {
            $data->{'keywordvalue'} = $object->getKeywordvalue();
        }
        if (null !== $object->getHttpusername()) {
            $data->{'httpusername'} = $object->getHttpusername();
        }
        if (null !== $object->getHttppassword()) {
            $data->{'httppassword'} = $object->getHttppassword();
        }
        if (null !== $object->getPort()) {
            $data->{'port'} = $object->getPort();
        }
        if (null !== $object->getInterval()) {
            $data->{'interval'} = $object->getInterval();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getAlltimeuptimeratio()) {
            $data->{'alltimeuptimeratio'} = $object->getAlltimeuptimeratio();
        }
        if (null !== $object->getCustomuptimeratio()) {
            $data->{'customuptimeratio'} = $object->getCustomuptimeratio();
        }
        if (null !== $object->getAlertcontact()) {
            $values = array();
            foreach ($object->getAlertcontact() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'alertcontact'} = $values;
        }
        if (null !== $object->getLog()) {
            $values_1 = array();
            foreach ($object->getLog() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'log'} = $values_1;
        }
        if (null !== $object->getResponsetime()) {
            $values_2 = array();
            foreach ($object->getResponsetime() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'responsetime'} = $values_2;
        }
        return $data;
    }
}
