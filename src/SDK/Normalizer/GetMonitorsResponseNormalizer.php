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
class GetMonitorsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('stat', $data)) {
            $object->setStat($data['stat']);
        }
        if (\array_key_exists('offset', $data)) {
            $object->setOffset($data['offset']);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('monitors', $data)) {
            $object->setMonitors($this->denormalizer->denormalize($data['monitors'], \Montross50\UptimeRobotApi\SDK\Model\MonitorArray::class, 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('stat') && null !== $data->getStat()) {
            $dataArray['stat'] = $data->getStat();
        }
        if ($data->isInitialized('offset') && null !== $data->getOffset()) {
            $dataArray['offset'] = $data->getOffset();
        }
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('total') && null !== $data->getTotal()) {
            $dataArray['total'] = $data->getTotal();
        }
        if ($data->isInitialized('monitors') && null !== $data->getMonitors()) {
            $dataArray['monitors'] = $data->getMonitors() === null ? null : new \Montross50\UptimeRobotApi\SDK\Runtime\JsonObject($this->normalizer->normalize($data->getMonitors(), 'json', $context));
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse::class => false];
    }
}