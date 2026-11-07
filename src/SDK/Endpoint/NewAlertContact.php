<?php

namespace Montross50\UptimeRobotApi\SDK\Endpoint;

class NewAlertContact extends \Montross50\UptimeRobotApi\SDK\Runtime\Client\BaseEndpoint implements \Montross50\UptimeRobotApi\SDK\Runtime\Client\Endpoint
{
    /**
     * New alert contacts of any type (mobile/SMS alert contacts are not supported yet) can be created using this method. The alert contacts created using the API are validated with the same way as they were created from uptimerobot.com (activation link for e-mails, tc.).
     * @param array $queryParameters {
     *     @var string $apiKey API key
     *     @var string $format Response format
     *     @var string $noJsonCallback Return raw json
     *     @var string $alertContactType
     *     @var string $alertContactValue
     *     @var string $alertContactFriendlyName
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
        return '/newAlertContact';
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
        $optionsResolver->setDefined(['apiKey', 'format', 'noJsonCallback', 'alertContactType', 'alertContactValue', 'alertContactFriendlyName']);
        $optionsResolver->setRequired(['apiKey', 'alertContactType', 'alertContactValue']);
        $optionsResolver->setDefaults(['format' => 'json', 'noJsonCallback' => '1']);
        $optionsResolver->addAllowedTypes('apiKey', ['string']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('noJsonCallback', ['string']);
        $optionsResolver->addAllowedTypes('alertContactType', ['string']);
        $optionsResolver->addAllowedTypes('alertContactValue', ['string']);
        $optionsResolver->addAllowedTypes('alertContactFriendlyName', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\NewAlertContactBadRequestException
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\NewAlertContactInternalServerErrorException
     *
     * @return null|\Montross50\UptimeRobotApi\SDK\Model\AlertContactResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Montross50\UptimeRobotApi\SDK\Model\AlertContactResponse', 'json');
        }
        if (400 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\NewAlertContactBadRequestException($response);
        }
        if (500 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\NewAlertContactInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}