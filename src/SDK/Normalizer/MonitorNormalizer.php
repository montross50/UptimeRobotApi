<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Montross50\UptimeRobotApi\SDK\Runtime\Normalizer\CheckArray;
use Montross50\UptimeRobotApi\SDK\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Montross50\UptimeRobotApi\SDK\Model\Monitor::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Montross50\UptimeRobotApi\SDK\Model\Monitor::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Montross50\UptimeRobotApi\SDK\Model\Monitor();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
            $values = [];
            foreach ($data['alertcontact'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Montross50\UptimeRobotApi\SDK\Model\AlertContact::class, 'json', $context);
            }
            $object->setAlertcontact($values);
        }
        if (\array_key_exists('log', $data)) {
            $values_1 = [];
            foreach ($data['log'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Montross50\UptimeRobotApi\SDK\Model\Log::class, 'json', $context);
            }
            $object->setLog($values_1);
        }
        if (\array_key_exists('responsetime', $data)) {
            $values_2 = [];
            foreach ($data['responsetime'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Montross50\UptimeRobotApi\SDK\Model\ResponseTime::class, 'json', $context);
            }
            $object->setResponsetime($values_2);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('friendlyname') && null !== $data->getFriendlyname()) {
            $dataArray['friendlyname'] = $data->getFriendlyname();
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('subtype') && null !== $data->getSubtype()) {
            $dataArray['subtype'] = $data->getSubtype();
        }
        if ($data->isInitialized('keywordtype') && null !== $data->getKeywordtype()) {
            $dataArray['keywordtype'] = $data->getKeywordtype();
        }
        if ($data->isInitialized('keywordvalue') && null !== $data->getKeywordvalue()) {
            $dataArray['keywordvalue'] = $data->getKeywordvalue();
        }
        if ($data->isInitialized('httpusername') && null !== $data->getHttpusername()) {
            $dataArray['httpusername'] = $data->getHttpusername();
        }
        if ($data->isInitialized('httppassword') && null !== $data->getHttppassword()) {
            $dataArray['httppassword'] = $data->getHttppassword();
        }
        if ($data->isInitialized('port') && null !== $data->getPort()) {
            $dataArray['port'] = $data->getPort();
        }
        if ($data->isInitialized('interval') && null !== $data->getInterval()) {
            $dataArray['interval'] = $data->getInterval();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('alltimeuptimeratio') && null !== $data->getAlltimeuptimeratio()) {
            $dataArray['alltimeuptimeratio'] = $data->getAlltimeuptimeratio();
        }
        if ($data->isInitialized('customuptimeratio') && null !== $data->getCustomuptimeratio()) {
            $dataArray['customuptimeratio'] = $data->getCustomuptimeratio();
        }
        if ($data->isInitialized('alertcontact') && null !== $data->getAlertcontact()) {
            $values = [];
            foreach ($data->getAlertcontact() as $value) {
                $values[] = $value === null ? null : new \Montross50\UptimeRobotApi\SDK\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['alertcontact'] = $values;
        }
        if ($data->isInitialized('log') && null !== $data->getLog()) {
            $values_1 = [];
            foreach ($data->getLog() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Montross50\UptimeRobotApi\SDK\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['log'] = $values_1;
        }
        if ($data->isInitialized('responsetime') && null !== $data->getResponsetime()) {
            $values_2 = [];
            foreach ($data->getResponsetime() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Montross50\UptimeRobotApi\SDK\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['responsetime'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Montross50\UptimeRobotApi\SDK\Model\Monitor::class => false];
    }
}