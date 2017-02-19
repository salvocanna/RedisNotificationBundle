<?php

namespace SalvoCanna\RedisNotificationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sc_redis_notification_bundle');
        /*$rootNode
            ->children()
            ->scalarNode('notification_class')
            ->cannotBeEmpty()
            ->defaultValue('AppBundle\\Entity\\Notification')
            ->info('Entity for a notification (default: AppBundle\\Entity\\Notification)')
            ->end();
         */

        return $treeBuilder;
    }
}
