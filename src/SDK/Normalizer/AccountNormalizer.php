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
class AccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Montross50\UptimeRobotApi\SDK\Model\Account::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Montross50\UptimeRobotApi\SDK\Model\Account::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Montross50\UptimeRobotApi\SDK\Model\Account();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('monitorLimit', $data)) {
            $object->setMonitorLimit($data['monitorLimit']);
        }
        if (\array_key_exists('monitorInterval', $data)) {
            $object->setMonitorInterval($data['monitorInterval']);
        }
        if (\array_key_exists('upMonitors', $data)) {
            $object->setUpMonitors($data['upMonitors']);
        }
        if (\array_key_exists('downMonitors', $data)) {
            $object->setDownMonitors($data['downMonitors']);
        }
        if (\array_key_exists('pausedMonitors', $data)) {
            $object->setPausedMonitors($data['pausedMonitors']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('monitorLimit') && null !== $data->getMonitorLimit()) {
            $dataArray['monitorLimit'] = $data->getMonitorLimit();
        }
        if ($data->isInitialized('monitorInterval') && null !== $data->getMonitorInterval()) {
            $dataArray['monitorInterval'] = $data->getMonitorInterval();
        }
        if ($data->isInitialized('upMonitors') && null !== $data->getUpMonitors()) {
            $dataArray['upMonitors'] = $data->getUpMonitors();
        }
        if ($data->isInitialized('downMonitors') && null !== $data->getDownMonitors()) {
            $dataArray['downMonitors'] = $data->getDownMonitors();
        }
        if ($data->isInitialized('pausedMonitors') && null !== $data->getPausedMonitors()) {
            $dataArray['pausedMonitors'] = $data->getPausedMonitors();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Montross50\UptimeRobotApi\SDK\Model\Account::class => false];
    }
}