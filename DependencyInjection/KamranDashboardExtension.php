<?php

/*
 * This file is part of the CCDNForum ForumBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/>
 *
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kamran\DashboardBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;


class KamranDashboardExtension extends Extension
{
    public function getAlias()
    {
        return 'kamran_dashboard';
    }

    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        //$this->setComponentParameters($config,$container);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
        $loader->load('templating.yml');

        /*
        if($config['title']) {
            $managerDefinition = $container->getDefinition('kamran_dashboard.dashboard_builder');
            $managerDefinition->addMethodCall('setApplicationTitle', array('Developer Code Helper'));
        }
        */

    }

    public function setComponentParameters(array $config, ContainerBuilder $container){
        //$container->setParameter('ccdn_component_dashboard.component.integrator.chain.class', $config['component']['integrator']['chain']['class']);
    }
}
