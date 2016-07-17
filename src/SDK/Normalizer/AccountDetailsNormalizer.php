<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class AccountDetailsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Montross50\\UptimeRobotApi\\SDK\\Model\\AccountDetails') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Montross50\UptimeRobotApi\SDK\Model\AccountDetails) {
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
        $object = new \Montross50\UptimeRobotApi\SDK\Model\AccountDetails();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'stat')) {
            $object->setStat($data->{'stat'});
        }
        if (property_exists($data, 'account')) {
            $object->setAccount($this->serializer->deserialize($data->{'account'}, 'Montross50\\UptimeRobotApi\\SDK\\Model\\Account', 'raw', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStat()) {
            $data->{'stat'} = $object->getStat();
        }
        if (null !== $object->getAccount()) {
            $data->{'account'} = $this->serializer->serialize($object->getAccount(), 'raw', $context);
        }
        return $data;
    }
}