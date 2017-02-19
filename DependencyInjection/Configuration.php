<?php

namespace SalvoCanna\RedisNotificationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('rnb');
        $rootNode
            ->children()
            ->scalarNode('redis_connection')
            ->defaultValue('snc_redis.default')
            ->info('Redis connection to use')
            ->end();

        return $treeBuilder;
    }
}
