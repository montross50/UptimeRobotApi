<?php

namespace Montross50\UptimeRobotApi\SDK\Endpoint;

class CreateMonitor extends \Montross50\UptimeRobotApi\SDK\Runtime\Client\BaseEndpoint implements \Montross50\UptimeRobotApi\SDK\Runtime\Client\Endpoint
{
    /**
     * New monitors of any type can be created using this method.
     * @param array $queryParameters {
     *     @var string $apiKey API key
     *     @var string $format Response format
     *     @var string $noJsonCallback Return raw json
     *     @var string $monitorFriendlyName name of monitor
     *     @var string $monitorURL URL to monitor
     *     @var string $monitorType type of monitor
     *     @var string $monitorSubType required for port monitoring
     *     @var string $monitorPort required for port monitoring
     *     @var string $monitorKeywordType required for keyword monitoring
     *     @var string $monitorKeywordValue required for keyword monitoring
     *     @var string $monitorHTTPUsername
     *     @var string $monitorHTTPPassword
     *     @var string $monitorAlertContacts the alert contacts to be notified when the monitor goes up/down.Multiple alertContactIDs can be sent like monitorAlertContacts=457_0_0-373_5_0-8956_2_3 where alertContactIDs are seperated with - and threshold + recurrence are seperated with _. For ex: monitorAlertContacts=457_5_0 refers to 457 being the alertContactID, 0 being the threshold and 0 being the recurrence. As the threshold and recurrence is only available in the Pro Plan, they are always 0 in the Free Plan)
     *     @var string $monitorInterval in minutes
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
        return '/newMonitor';
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
        $optionsResolver->setDefined(['apiKey', 'format', 'noJsonCallback', 'monitorFriendlyName', 'monitorURL', 'monitorType', 'monitorSubType', 'monitorPort', 'monitorKeywordType', 'monitorKeywordValue', 'monitorHTTPUsername', 'monitorHTTPPassword', 'monitorAlertContacts', 'monitorInterval']);
        $optionsResolver->setRequired(['apiKey', 'monitorFriendlyName', 'monitorURL', 'monitorType']);
        $optionsResolver->setDefaults(['format' => 'json', 'noJsonCallback' => '1']);
        $optionsResolver->addAllowedTypes('apiKey', ['string']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('noJsonCallback', ['string']);
        $optionsResolver->addAllowedTypes('monitorFriendlyName', ['string']);
        $optionsResolver->addAllowedTypes('monitorURL', ['string']);
        $optionsResolver->addAllowedTypes('monitorType', ['string']);
        $optionsResolver->addAllowedTypes('monitorSubType', ['string']);
        $optionsResolver->addAllowedTypes('monitorPort', ['string']);
        $optionsResolver->addAllowedTypes('monitorKeywordType', ['string']);
        $optionsResolver->addAllowedTypes('monitorKeywordValue', ['string']);
        $optionsResolver->addAllowedTypes('monitorHTTPUsername', ['string']);
        $optionsResolver->addAllowedTypes('monitorHTTPPassword', ['string']);
        $optionsResolver->addAllowedTypes('monitorAlertContacts', ['string']);
        $optionsResolver->addAllowedTypes('monitorInterval', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\CreateMonitorBadRequestException
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\CreateMonitorInternalServerErrorException
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
            throw new \Montross50\UptimeRobotApi\SDK\Exception\CreateMonitorBadRequestException($response);
        }
        if (500 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\CreateMonitorInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}