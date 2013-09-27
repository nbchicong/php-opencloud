<?php

namespace OpenCloud\CloudMonitoring;

use OpenCloud\OpenStack;
use OpenCloud\Common\Service as AbstractService;

/**
 * The Rackspace Cloud Monitoring service.
 *
 * @copyright 2012-2013 Rackspace Hosting, Inc.
 *      See COPYING for licensing information
 * @package phpOpenCloud
 * @version 1.0
 * @author  Jamie Hannaford <jamie.hannaford@rackspace.com>
 * @extends AbstractService
 */
class Service extends AbstractService
{
    
    const DEFAULT_NAME = 'cloudMonitoring';
    
    /**
     * Cloud Monitoring resources.
     * 
     * @var     array
     * @access  private
     */
    private $resources = array(
        'Agent',
        'AgentConnection',
        'AgentHost',
        'AgentHostInfo',
        'AgentTarget',
        'AgentToken',
        'Alarm',
        'Changelog',
        'Check',
        'CheckType',
        'Entity',
        'Metric',
        'Notification',
        'NotificationHistory',
        'NotificationPlan',
        'NotificationType',
        'View',
        'Zone'
    );

    /**
     * Main service constructor.
     * 
     * @access public
     * @param OpenStack $connection
     * @param mixed $serviceName
     * @param mixed $serviceRegion
     * @param mixed $urlType
     * @return void
     */
    public function __construct(OpenStack $connection, $serviceName, $serviceRegion, $urlType)
    {
        parent::__construct(
            $connection, 'rax:monitor', $serviceName, $serviceRegion, $urlType
        );
    }

}