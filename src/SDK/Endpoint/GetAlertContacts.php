<?php

namespace Montross50\UptimeRobotApi\SDK\Endpoint;

class GetAlertContacts extends \Montross50\UptimeRobotApi\SDK\Runtime\Client\BaseEndpoint implements \Montross50\UptimeRobotApi\SDK\Runtime\Client\Endpoint
{
    /**
     * The list of alert contacts can be called with this method.
     *
     * @param array $queryParameters {
     *     @var string $apiKey API key
     *     @var string $format Response format
     *     @var string $noJsonCallback Return raw json
     *     @var string $alertcontacts if not used, will return all alert contacts in an account. Else, it is possible to define any number of alert contacts with their IDs like: alertcontacts=236-1782-4790
     *     @var string $offset used for pagination. Defines the record to start paginating. Default is 0
     *     @var string $limit used for pagination. Defines the max number of records to return for the response. Default and max. is 50
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Montross50\UptimeRobotApi\SDK\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/getAlertContacts';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('apiKey', 'format', 'noJsonCallback', 'alertcontacts', 'offset', 'limit'));
        $optionsResolver->setRequired(array('apiKey'));
        $optionsResolver->setDefaults(array('format' => 'json', 'noJsonCallback' => '1'));
        $optionsResolver->setAllowedTypes('apiKey', array('string'));
        $optionsResolver->setAllowedTypes('format', array('string'));
        $optionsResolver->setAllowedTypes('noJsonCallback', array('string'));
        $optionsResolver->setAllowedTypes('alertcontacts', array('string'));
        $optionsResolver->setAllowedTypes('offset', array('string'));
        $optionsResolver->setAllowedTypes('limit', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\GetAlertContactsBadRequestException
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\GetAlertContactsInternalServerErrorException
     *
     * @return null|\Montross50\UptimeRobotApi\SDK\Model\GetAlertContactsResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Montross50\\UptimeRobotApi\\SDK\\Model\\GetAlertContactsResponse', 'json');
        }
        if (400 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\GetAlertContactsBadRequestException();
        }
        if (500 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\GetAlertContactsInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}
