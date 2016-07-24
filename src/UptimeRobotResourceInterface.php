<?php

namespace Montross50\UptimeRobotApi;

interface UptimeRobotResourceInterface {
    /**
     * Account details (max number of monitors that can be added and number of up/down/paused monitors) can be grabbed
     * using this method.
     *
     * @param array $parameters    {
     * @var string $apiKey         API key
     * @var string $format         Response format
     * @var string $noJsonCallback Return raw json
     *                             }
     * @param string $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Montross50\UptimeRobotApi\SDK\Model\AccountDetails
     */
    public function getAccountDetails($parameters = array(), $fetch = self::FETCH_OBJECT);
    
    /**
     * This is a Swiss-Army knife type of a method for getting any information on monitors. By default, it lists all
     * the monitors in a user's account, their friendly names, types (http, keyword, port, etc.), statuses (up, down,
     * etc.) and uptime ratios. There are optional parameters which lets the getMonitors method to output information
     * on any given monitors rather than all of them.
     *
     * @param array $parameters              {
     * @var string $apiKey                   API key
     * @var string $format                   Response format
     * @var string $noJsonCallback           Return raw json
     * @var string $monitors                 optional (if not used, will return all monitors in an account. Else, it is
     *                                       possible to define any number of monitors with their IDs like:
     *                                       monitors=15830-32696-83920)
     * @var string $types                    optional (if not used, will return all monitors types (HTTP, keyword,
     *                                       ping..) in an account. Else, it is possible to define any number of
     *                                       monitor types like: types=1-3-4)
     * @var string $statuses                 optional (if not used, will return all monitors statuses (up, down,
     *                                       paused) in an account. Else, it is possible to define any number of
     *                                       monitor statuses like: statuses=2-9)
     * @var string $customUptimeRatio        optional (defines the number of days to calculate the uptime ratio(s) for.
     *                                       Ex: customUptimeRatio=7-30-45 to get the uptime ratios for those periods)
     * @var string $logs                     ptional (defines if the logs of each monitor will be returned. Should be
     *                                       set to 1 for getting the logs. Default is 0)
     * @var string $logsLimit                optional (the number of logs to be returned (descending order). If empty,
     *                                       all logs are returned.
     * @var string $responseTimes            optional (defines if the response time data of each monitor will be
     *                                       returned. Should be set to 1 for getting them. Default is 0)
     * @var string $responseTimesLimit
     * @var string $responseTimesAverage     optional (by default, response time value of each check is returned. The
     *                                       API can return average values in given minutes. Default is 0. For ex: the
     *                                       Uptime Robot dashboard displays the data averaged/grouped in 30 minutes)
     * @var string $responseTimesStartDate   optional (the number of response time logs to be returned (descending
     *                                       order). If empty, last 24 hours of logs are returned (if
     *                                       responseTimesStartDate and responseTimesEndDate are not used).
     * @var string $responseTimesEndDate     optional and works only for the Pro Plan as 24 hour+ logs are kept only in
     *                                       the Pro Plan (ending date of the response times, formatted as 2015-04-23
     *                                       and must be used with responseTimesStartDate) (can only be used if
     *                                       monitors parameter is used with a single monitorID and
     *                                       responseTimesEndDate - responseTimesStartDate can't be more than 7 days)
     * @var string $alertContacts            optional (defines if the notified alert contacts of each notification will
     *                                       be returned. Should be set to 1 for getting them. Default is 0. Requires
     *                                       logs to be set to1)
     * @var string $showMonitorAlertContacts optional (defines if the alert contacts set for the monitor to be
     *                                       returned. Default is 0)
     * @var string $showTimezone             optional (defines if the user's timezone should be returned. Should be set
     *                                       to 1 for getting it. Default is 0)
     * @var string $offset                   optional (used for pagination. Defines the record to start paginating.
     *                                       Default is 0)
     * @var string $limit                    optional (used for pagination. Defines the max number of records to return
     *                                       for the response. Default and max. is 50)
     * @var string $search                   optional (a keyword of your choice to search within monitorURL and
     *                                       monitorFriendlyName and get filtered results)
     *                                       }
     * @param string $fetch                  Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Montross50\UptimeRobotApi\SDK\Model\GetMonitorsResponse
     */
    public function getMonitors($parameters = array(), $fetch = self::FETCH_OBJECT);
    
    /**
     * New monitors of any type can be created using this method.
     *
     * @param array $parameters          {
     * @var string $apiKey               API key
     * @var string $format               Response format
     * @var string $noJsonCallback       Return raw json
     * @var string $monitorFriendlyName  name of monitor
     * @var string $monitorURL           URL to monitor
     * @var string $monitorType          type of monitor
     * @var string $monitorSubType       required for port monitoring
     * @var string $monitorPort          required for port monitoring
     * @var string $monitorKeywordType   required for keyword monitoring
     * @var string $monitorKeywordValue  required for keyword monitoring
     * @var string $monitorHTTPUsername
     * @var string $monitorHTTPPassword
     * @var string $monitorAlertContacts the alert contacts to be notified when the monitor goes up/down.Multiple
     *                                   alertContactIDs can be sent like monitorAlertContacts=457_0_0-373_5_0-8956_2_3
     *                                   where alertContactIDs are seperated with - and threshold + recurrence are
     *                                   seperated with _. For ex: monitorAlertContacts=457_5_0 refers to 457 being the
     *                                   alertContactID, 0 being the threshold and 0 being the recurrence. As the
     *                                   threshold and recurrence is only available in the Pro Plan, they are always 0
     *                                   in the Free Plan)
     * @var string $monitorInterval      in minutes
     *                                   }
     * @param string $fetch              Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Montross50\UptimeRobotApi\SDK\Model\MonitorResponse
     */
    public function createMonitor($parameters = array(), $fetch = self::FETCH_OBJECT);
    
    /**
     * Monitors can be deleted using this method.
     *
     * @param array $parameters    {
     * @var string $apiKey         API key
     * @var string $format         Response format
     * @var string $noJsonCallback Return raw json
     * @var string $monitorID      ID of monitor to delete
     *                             }
     * @param string $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Montross50\UptimeRobotApi\SDK\Model\MonitorResponse
     */
    public function deleteMonitor($parameters = array(), $fetch = self::FETCH_OBJECT);
    
    /**
     * Monitors can be edited using this method. Important: The type of a monitor can not be edited (like changing a
     * HTTP monitor into a Port monitor). For such cases, deleting the monitor and re-creating a new one is adviced.
     *
     * @param array $parameters          {
     * @var string $apiKey               API key
     * @var string $format               Response format
     * @var string $noJsonCallback       Return raw json
     * @var string $monitorFriendlyName  name of monitor
     * @var string $monitorURL           URL to monitor
     * @var string $monitorType          type of monitor
     * @var string $monitorSubType       required for port monitoring
     * @var string $monitorPort          required for port monitoring
     * @var string $monitorKeywordType   required for keyword monitoring
     * @var string $monitorKeywordValue  required for keyword monitoring
     * @var string $monitorHTTPUsername  in order to remove any previously added username, simply send the value empty
     *                                   like monitorHTTPUsername=
     * @var string $monitorHTTPPassword  in order to remove any previously added password, simply send the value empty
     *                                   like monitorHTTPPassword=)
     * @var string $monitorAlertContacts the alert contacts to be notified when the monitor goes up/down.Multiple
     *                                   alertContactIDs can be sent like monitorAlertContacts=457_0_0-373_5_0-8956_2_3
     *                                   where alertContactIDs are seperated with - and threshold + recurrence are
     *                                   seperated with _. For ex: monitorAlertContacts=457_5_0 refers to 457 being the
     *                                   alertContactID, 0 being the threshold and 0 being the recurrence. As the
     *                                   threshold and recurrence is only available in the Pro Plan, they are always 0
     *                                   in the Free Plan) (in order to remove any previously added alert contacts,
     *                                   simply send the value empty like monitorAlertContacts=
     * @var string $monitorInterval      in minutes
     *                                   }
     * @param string $fetch              Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Montross50\UptimeRobotApi\SDK\Model\MonitorResponse
     */
    public function editMonitor($parameters = array(), $fetch = self::FETCH_OBJECT);
    
    /**
     * The list of alert contacts can be called with this method.
     *
     * @param array $parameters    {
     * @var string $apiKey         API key
     * @var string $format         Response format
     * @var string $noJsonCallback Return raw json
     * @var string $alertcontacts  if not used, will return all alert contacts in an account. Else, it is possible to
     *                             define any number of alert contacts with their IDs like: alertcontacts=236-1782-4790
     * @var string $offset         used for pagination. Defines the record to start paginating. Default is 0
     * @var string $limit          used for pagination. Defines the max number of records to return for the response.
     *                             Default and max. is 50
     *                             }
     * @param string $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Montross50\UptimeRobotApi\SDK\Model\GetAlertContactsResponse
     */
    public function getAlertContacts($parameters = array(), $fetch = self::FETCH_OBJECT);
    
    /**
     * New alert contacts of any type (mobile/SMS alert contacts are not supported yet) can be created using this
     * method. The alert contacts created using the API are validated with the same way as they were created from
     * uptimerobot.com (activation link for e-mails, tc.).
     *
     * @param array $parameters    {
     * @var string $apiKey         API key
     * @var string $format         Response format
     * @var string $noJsonCallback Return raw json
     * @var string $alertContactType
     * @var string $alertContactValue
     * @var string $alertContactFriendlyName
     *                             }
     * @param string $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Montross50\UptimeRobotApi\SDK\Model\AlertContactResponse
     */
    public function newAlertContact($parameters = array(), $fetch = self::FETCH_OBJECT);
    
    /**
     * Alert contacts can be deleted using this method.
     *
     * @param array $parameters    {
     * @var string $apiKey         API key
     * @var string $format         Response format
     * @var string $noJsonCallback Return raw json
     * @var string $alertContactID ID of the alert contact to delete
     *                             }
     * @param string $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Montross50\UptimeRobotApi\SDK\Model\AlertContactResponse
     */
    public function deleteAlertContact($parameters = array(), $fetch = self::FETCH_OBJECT);
}