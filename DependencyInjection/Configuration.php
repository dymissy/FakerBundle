<?php

namespace EmanueleMinotto\FakerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This class validates and merges configuration from your app files.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder.
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('faker');

        $rootNode
            ->info('Faker Bundle configuration')
            ->addDefaultsIfNotSet()
            ->children()
                ->booleanNode('twig')
                    ->defaultValue('false')
                    ->info('Twig global variable')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}