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
class AlertContactArrayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Montross50\UptimeRobotApi\SDK\Model\AlertContactArray::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Montross50\UptimeRobotApi\SDK\Model\AlertContactArray::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Montross50\UptimeRobotApi\SDK\Model\AlertContactArray();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('alertcontact', $data)) {
            $values = [];
            foreach ($data['alertcontact'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Montross50\UptimeRobotApi\SDK\Model\AlertContact::class, 'json', $context);
            }
            $object->setAlertcontact($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('alertcontact') && null !== $data->getAlertcontact()) {
            $values = [];
            foreach ($data->getAlertcontact() as $value) {
                $values[] = $value === null ? null : new \Montross50\UptimeRobotApi\SDK\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['alertcontact'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Montross50\UptimeRobotApi\SDK\Model\AlertContactArray::class => false];
    }
}