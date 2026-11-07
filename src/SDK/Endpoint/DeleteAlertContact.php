<?php

namespace Montross50\UptimeRobotApi\SDK\Endpoint;

class DeleteAlertContact extends \Montross50\UptimeRobotApi\SDK\Runtime\Client\BaseEndpoint implements \Montross50\UptimeRobotApi\SDK\Runtime\Client\Endpoint
{
    /**
     * Alert contacts can be deleted using this method.
     * @param array $queryParameters {
     *     @var string $apiKey API key
     *     @var string $format Response format
     *     @var string $noJsonCallback Return raw json
     *     @var string $alertContactID ID of the alert contact to delete
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
        return '/deleteAlertContact';
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
        $optionsResolver->setDefined(['apiKey', 'format', 'noJsonCallback', 'alertContactID']);
        $optionsResolver->setRequired(['apiKey', 'alertContactID']);
        $optionsResolver->setDefaults(['format' => 'json', 'noJsonCallback' => '1']);
        $optionsResolver->addAllowedTypes('apiKey', ['string']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('noJsonCallback', ['string']);
        $optionsResolver->addAllowedTypes('alertContactID', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\DeleteAlertContactBadRequestException
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\DeleteAlertContactInternalServerErrorException
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
            throw new \Montross50\UptimeRobotApi\SDK\Exception\DeleteAlertContactBadRequestException($response);
        }
        if (500 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\DeleteAlertContactInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}