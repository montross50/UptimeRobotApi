<?php

namespace Montross50\UptimeRobotApi\SDK\Endpoint;

class GetMonitors extends \Montross50\UptimeRobotApi\SDK\Runtime\Client\BaseEndpoint implements \Montross50\UptimeRobotApi\SDK\Runtime\Client\Endpoint
{
    /**
     * This is a Swiss-Army knife type of a method for getting any information on monitors. By default, it lists all the monitors in a user's account, their friendly names, types (http, keyword, port, etc.), statuses (up, down, etc.) and uptime ratios. There are optional parameters which lets the getMonitors method to output information on any given monitors rather than all of them.
     * @param array $queryParameters {
     *     @var string $apiKey API key
     *     @var string $format Response format
     *     @var string $noJsonCallback Return raw json
     *     @var string $monitors optional (if not used, will return all monitors in an account. Else, it is possible to define any number of monitors with their IDs like: monitors=15830-32696-83920)
     *     @var string $types optional (if not used, will return all monitors types (HTTP, keyword, ping..) in an account. Else, it is possible to define any number of monitor types like: types=1-3-4)
     *     @var string $statuses optional (if not used, will return all monitors statuses (up, down, paused) in an account. Else, it is possible to define any number of monitor statuses like: statuses=2-9)
     *     @var string $customUptimeRatio optional (defines the number of days to calculate the uptime ratio(s) for. Ex: customUptimeRatio=7-30-45 to get the uptime ratios for those periods)
     *     @var string $logs ptional (defines if the logs of each monitor will be returned. Should be set to 1 for getting the logs. Default is 0)
     *     @var string $logsLimit optional (the number of logs to be returned (descending order). If empty, all logs are returned.
     *     @var string $responseTimes optional (defines if the response time data of each monitor will be returned. Should be set to 1 for getting them. Default is 0)
     *     @var string $responseTimesLimit
     *     @var string $responseTimesAverage optional (by default, response time value of each check is returned. The API can return average values in given minutes. Default is 0. For ex: the Uptime Robot dashboard displays the data averaged/grouped in 30 minutes)
     *     @var string $responseTimesStartDate optional (the number of response time logs to be returned (descending order). If empty, last 24 hours of logs are returned (if responseTimesStartDate and responseTimesEndDate are not used).
     *     @var string $responseTimesEndDate optional and works only for the Pro Plan as 24 hour+ logs are kept only in the Pro Plan (ending date of the response times, formatted as 2015-04-23 and must be used with responseTimesStartDate) (can only be used if monitors parameter is used with a single monitorID and responseTimesEndDate - responseTimesStartDate can't be more than 7 days)
     *     @var string $alertContacts optional (defines if the notified alert contacts of each notification will be returned. Should be set to 1 for getting them. Default is 0. Requires logs to be set to1)
     *     @var string $showMonitorAlertContacts optional (defines if the alert contacts set for the monitor to be returned. Default is 0)
     *     @var string $showTimezone optional (defines if the user's timezone should be returned. Should be set to 1 for getting it. Default is 0)
     *     @var string $offset optional (used for pagination. Defines the record to start paginating. Default is 0)
     *     @var string $limit optional (used for pagination. Defines the max number of records to return for the response. Default and max. is 50)
     *     @var string $search optional (a keyword of your choice to search within monitorURL and monitorFriendlyName and get filtered results)
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
        return '/getMonitors';
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
        $optionsResolver->setDefined(['apiKey', 'format', 'noJsonCallback', 'monitors', 'types', 'statuses', 'customUptimeRatio', 'logs', 'logsLimit', 'responseTimes', 'responseTimesLimit', 'responseTimesAverage', 'responseTimesStartDate', 'responseTimesEndDate', 'alertContacts', 'showMonitorAlertContacts', 'showTimezone', 'offset', 'limit', 'search']);
        $optionsResolver->setRequired(['apiKey']);
        $optionsResolver->setDefaults(['format' => 'json', 'noJsonCallback' => '1']);
        $optionsResolver->addAllowedTypes('apiKey', ['string']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('noJsonCallback', ['string']);
        $optionsResolver->addAllowedTypes('monitors', ['string']);
        $optionsResolver->addAllowedTypes('types', ['string']);
        $optionsResolver->addAllowedTypes('statuses', ['string']);
        $optionsResolver->addAllowedTypes('customUptimeRatio', ['string']);
        $optionsResolver->addAllowedTypes('logs', ['string']);
        $optionsResolver->addAllowedTypes('logsLimit', ['string']);
        $optionsResolver->addAllowedTypes('responseTimes', ['string']);
        $optionsResolver->addAllowedTypes('responseTimesLimit', ['string']);
        $optionsResolver->addAllowedTypes('responseTimesAverage', ['string']);
        $optionsResolver->addAllowedTypes('responseTimesStartDate', ['string']);
        $optionsResolver->addAllowedTypes('responseTimesEndDate', ['string']);
        $optionsResolver->addAllowedTypes('alertContacts', ['string']);
        $optionsResolver->addAllowedTypes('showMonitorAlertContacts', ['string']);
        $optionsResolver->addAllowedTypes('showTimezone', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['string']);
        $optionsResolver->addAllowedTypes('search', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\GetMonitorsBadRequestException
     * @throws \Montross50\UptimeRobotApi\SDK\Exception\GetMonitorsInternalServerErrorException
     *
     * @return null|\Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse', 'json');
        }
        if (400 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\GetMonitorsBadRequestException($response);
        }
        if (500 === $status) {
            throw new \Montross50\UptimeRobotApi\SDK\Exception\GetMonitorsInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}