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

class MonitorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Montross50\\UptimeRobotApi\\SDK\\Model\\Monitor';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Montross50\\UptimeRobotApi\\SDK\\Model\\Monitor';
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
        $object = new \Montross50\UptimeRobotApi\SDK\Model\Monitor();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('friendlyname', $data)) {
            $object->setFriendlyname($data['friendlyname']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('subtype', $data)) {
            $object->setSubtype($data['subtype']);
        }
        if (\array_key_exists('keywordtype', $data)) {
            $object->setKeywordtype($data['keywordtype']);
        }
        if (\array_key_exists('keywordvalue', $data)) {
            $object->setKeywordvalue($data['keywordvalue']);
        }
        if (\array_key_exists('httpusername', $data)) {
            $object->setHttpusername($data['httpusername']);
        }
        if (\array_key_exists('httppassword', $data)) {
            $object->setHttppassword($data['httppassword']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('interval', $data)) {
            $object->setInterval($data['interval']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('alltimeuptimeratio', $data)) {
            $object->setAlltimeuptimeratio($data['alltimeuptimeratio']);
        }
        if (\array_key_exists('customuptimeratio', $data)) {
            $object->setCustomuptimeratio($data['customuptimeratio']);
        }
        if (\array_key_exists('alertcontact', $data)) {
            $values = array();
            foreach ($data['alertcontact'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContact', 'json', $context);
            }
            $object->setAlertcontact($values);
        }
        if (\array_key_exists('log', $data)) {
            $values_1 = array();
            foreach ($data['log'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Montross50\\UptimeRobotApi\\SDK\\Model\\Log', 'json', $context);
            }
            $object->setLog($values_1);
        }
        if (\array_key_exists('responsetime', $data)) {
            $values_2 = array();
            foreach ($data['responsetime'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Montross50\\UptimeRobotApi\\SDK\\Model\\ResponseTime', 'json', $context);
            }
            $object->setResponsetime($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getFriendlyname()) {
            $data['friendlyname'] = $object->getFriendlyname();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getSubtype()) {
            $data['subtype'] = $object->getSubtype();
        }
        if (null !== $object->getKeywordtype()) {
            $data['keywordtype'] = $object->getKeywordtype();
        }
        if (null !== $object->getKeywordvalue()) {
            $data['keywordvalue'] = $object->getKeywordvalue();
        }
        if (null !== $object->getHttpusername()) {
            $data['httpusername'] = $object->getHttpusername();
        }
        if (null !== $object->getHttppassword()) {
            $data['httppassword'] = $object->getHttppassword();
        }
        if (null !== $object->getPort()) {
            $data['port'] = $object->getPort();
        }
        if (null !== $object->getInterval()) {
            $data['interval'] = $object->getInterval();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getAlltimeuptimeratio()) {
            $data['alltimeuptimeratio'] = $object->getAlltimeuptimeratio();
        }
        if (null !== $object->getCustomuptimeratio()) {
            $data['customuptimeratio'] = $object->getCustomuptimeratio();
        }
        if (null !== $object->getAlertcontact()) {
            $values = array();
            foreach ($object->getAlertcontact() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['alertcontact'] = $values;
        }
        if (null !== $object->getLog()) {
            $values_1 = array();
            foreach ($object->getLog() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['log'] = $values_1;
        }
        if (null !== $object->getResponsetime()) {
            $values_2 = array();
            foreach ($object->getResponsetime() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['responsetime'] = $values_2;
        }
        return $data;
    }
}
