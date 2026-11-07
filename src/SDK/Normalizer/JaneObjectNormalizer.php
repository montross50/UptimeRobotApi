<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Montross50\UptimeRobotApi\SDK\Runtime\Normalizer\CheckArray;
use Montross50\UptimeRobotApi\SDK\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Montross50\UptimeRobotApi\SDK\Model\AccountDetails::class => \Montross50\UptimeRobotApi\SDK\Normalizer\AccountDetailsNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\Account::class => \Montross50\UptimeRobotApi\SDK\Normalizer\AccountNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse::class => \Montross50\UptimeRobotApi\SDK\Normalizer\GetMonitorsResponseNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\MonitorArray::class => \Montross50\UptimeRobotApi\SDK\Normalizer\MonitorArrayNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\Monitor::class => \Montross50\UptimeRobotApi\SDK\Normalizer\MonitorNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\AlertContact::class => \Montross50\UptimeRobotApi\SDK\Normalizer\AlertContactNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\Log::class => \Montross50\UptimeRobotApi\SDK\Normalizer\LogNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\ResponseTime::class => \Montross50\UptimeRobotApi\SDK\Normalizer\ResponseTimeNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\MonitorResponse::class => \Montross50\UptimeRobotApi\SDK\Normalizer\MonitorResponseNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\GetAlertContactsResponse::class => \Montross50\UptimeRobotApi\SDK\Normalizer\GetAlertContactsResponseNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\AlertContactArray::class => \Montross50\UptimeRobotApi\SDK\Normalizer\AlertContactArrayNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\AlertContactResponse::class => \Montross50\UptimeRobotApi\SDK\Normalizer\AlertContactResponseNormalizer::class,
        
        \Montross50\UptimeRobotApi\SDK\Model\ErrorResponse::class => \Montross50\UptimeRobotApi\SDK\Normalizer\ErrorResponseNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Montross50\UptimeRobotApi\SDK\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}