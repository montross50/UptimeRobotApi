<?php

namespace Montross50\UptimeRobotApi\SDK\Endpoint;

class ResetMonitor extends \Montross50\UptimeRobotApi\SDK\Runtime\Client\BaseEndpoint implements \Montross50\UptimeRobotApi\SDK\Runtime\Client\Endpoint
{
    /**
     * Monitors can be reset (deleting all stats and response time data) using this method.
     * @param array $queryParameters {
     *     @var string $apiKey API key
     *     @var string $format Response format
     *     @var string $noJsonCallback Return raw json
     *     @var string $monitorID ID of monitor to reset
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Montross50\UptimeRobotApi\SDK\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/resetMonitor';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['apiKey', 'format', 'noJsonCallback', 'monitorID']);
        $optionsResolver->setRequired(['apiKey', 'monitorID']);
        $optionsResolver->setDefaults(['format' => 'json', 'noJsonCallback' => '1']);
        $optionsResolver->addAllowedTypes('apiKey', ['string']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('noJsonCallback', ['string']);
        $optionsResolver->addAllowedTypes('monitorID', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\ResetMonitorBadRequestException
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\ResetMonitorInternalServerErrorException
     *
     * @return null|\Montross50\UptimeRobotApi\SDK\Model\MonitorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Montross50\UptimeRobotApi\SDK\Model\MonitorResponse', 'json');
        }
        if (400 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\ResetMonitorBadRequestException($response);
        }
        if (500 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\ResetMonitorInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}