<?php

namespace Montross50\UptimeRobotApi\SDK\Endpoint;

class NewAlertContact extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * New alert contacts of any type (mobile/SMS alert contacts are not supported yet) can be created using this method. The alert contacts created using the API are validated with the same way as they were created from uptimerobot.com (activation link for e-mails, tc.).
     *
     * @param array $queryParameters {
     *     @var string $apiKey API key
     *     @var string $format Response format
     *     @var string $noJsonCallback Return raw json
     *     @var string $alertContactType 
     *     @var string $alertContactValue 
     *     @var string $alertContactFriendlyName 
     * }
     */
    function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return '/newAlertContact';
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('apiKey', 'format', 'noJsonCallback', 'alertContactType', 'alertContactValue', 'alertContactFriendlyName'));
        $optionsResolver->setRequired(array('apiKey', 'alertContactType', 'alertContactValue'));
        $optionsResolver->setDefaults(array('format' => 'json', 'noJsonCallback' => '1'));
        $optionsResolver->setAllowedTypes('apiKey', array('string'));
        $optionsResolver->setAllowedTypes('format', array('string'));
        $optionsResolver->setAllowedTypes('noJsonCallback', array('string'));
        $optionsResolver->setAllowedTypes('alertContactType', array('string'));
        $optionsResolver->setAllowedTypes('alertContactValue', array('string'));
        $optionsResolver->setAllowedTypes('alertContactFriendlyName', array('string'));
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
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContactResponse', 'json');
        }
        if (400 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\NewAlertContactBadRequestException();
        }
        if (500 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\NewAlertContactInternalServerErrorException();
        }
    }
}