<?php

namespace Montross50\UptimeRobotApi\SDK\Endpoint;

class DeleteAlertContact extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Alert contacts can be deleted using this method.
     *
     * @param array $queryParameters {
     *     @var string $apiKey API key
     *     @var string $format Response format
     *     @var string $noJsonCallback Return raw json
     *     @var string $alertContactID ID of the alert contact to delete
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
        return '/deleteAlertContact';
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
        $optionsResolver->setDefined(array('apiKey', 'format', 'noJsonCallback', 'alertContactID'));
        $optionsResolver->setRequired(array('apiKey', 'alertContactID'));
        $optionsResolver->setDefaults(array('format' => 'json', 'noJsonCallback' => '1'));
        $optionsResolver->setAllowedTypes('apiKey', array('string'));
        $optionsResolver->setAllowedTypes('format', array('string'));
        $optionsResolver->setAllowedTypes('noJsonCallback', array('string'));
        $optionsResolver->setAllowedTypes('alertContactID', array('string'));
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
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContactResponse', 'json');
        }
        if (400 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\DeleteAlertContactBadRequestException();
        }
        if (500 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\DeleteAlertContactInternalServerErrorException();
        }
    }
}