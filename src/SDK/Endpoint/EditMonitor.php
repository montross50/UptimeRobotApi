<?php

namespace Montross50\UptimeRobotApi\SDK\Endpoint;

class EditMonitor extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Monitors can be edited using this method. Important: The type of a monitor can not be edited (like changing a HTTP monitor into a Port monitor). For such cases, deleting the monitor and re-creating a new one is adviced.
     *
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
     *     @var string $monitorHTTPUsername in order to remove any previously added username, simply send the value empty like monitorHTTPUsername=
     *     @var string $monitorHTTPPassword in order to remove any previously added password, simply send the value empty like monitorHTTPPassword=)
     *     @var string $monitorAlertContacts the alert contacts to be notified when the monitor goes up/down.Multiple alertContactIDs can be sent like monitorAlertContacts=457_0_0-373_5_0-8956_2_3 where alertContactIDs are seperated with - and threshold + recurrence are seperated with _. For ex: monitorAlertContacts=457_5_0 refers to 457 being the alertContactID, 0 being the threshold and 0 being the recurrence. As the threshold and recurrence is only available in the Pro Plan, they are always 0 in the Free Plan) (in order to remove any previously added alert contacts, simply send the value empty like monitorAlertContacts=
     *     @var string $monitorInterval in minutes
     *     @var string $monitorID ID of monitor to edit
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
        return '/editMonitor';
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
        $optionsResolver->setDefined(array('apiKey', 'format', 'noJsonCallback', 'monitorFriendlyName', 'monitorURL', 'monitorType', 'monitorSubType', 'monitorPort', 'monitorKeywordType', 'monitorKeywordValue', 'monitorHTTPUsername', 'monitorHTTPPassword', 'monitorAlertContacts', 'monitorInterval', 'monitorID'));
        $optionsResolver->setRequired(array('apiKey', 'monitorID'));
        $optionsResolver->setDefaults(array('format' => 'json', 'noJsonCallback' => '1'));
        $optionsResolver->setAllowedTypes('apiKey', array('string'));
        $optionsResolver->setAllowedTypes('format', array('string'));
        $optionsResolver->setAllowedTypes('noJsonCallback', array('string'));
        $optionsResolver->setAllowedTypes('monitorFriendlyName', array('string'));
        $optionsResolver->setAllowedTypes('monitorURL', array('string'));
        $optionsResolver->setAllowedTypes('monitorType', array('string'));
        $optionsResolver->setAllowedTypes('monitorSubType', array('string'));
        $optionsResolver->setAllowedTypes('monitorPort', array('string'));
        $optionsResolver->setAllowedTypes('monitorKeywordType', array('string'));
        $optionsResolver->setAllowedTypes('monitorKeywordValue', array('string'));
        $optionsResolver->setAllowedTypes('monitorHTTPUsername', array('string'));
        $optionsResolver->setAllowedTypes('monitorHTTPPassword', array('string'));
        $optionsResolver->setAllowedTypes('monitorAlertContacts', array('string'));
        $optionsResolver->setAllowedTypes('monitorInterval', array('string'));
        $optionsResolver->setAllowedTypes('monitorID', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\EditMonitorBadRequestException
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\EditMonitorInternalServerErrorException
     *
     * @return null|\Montross50\UptimeRobotApi\SDK\Model\MonitorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Montross50\\UptimeRobotApi\\SDK\\Model\\MonitorResponse', 'json');
        }
        if (400 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\EditMonitorBadRequestException();
        }
        if (500 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\EditMonitorInternalServerErrorException();
        }
    }
}