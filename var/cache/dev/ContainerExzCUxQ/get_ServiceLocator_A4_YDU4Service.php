<?php

namespace ContainerExzCUxQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A4_YDU4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a4.yDU4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a4.yDU4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'gite' => ['privates', '.errored..service_locator.a4.yDU4.App\\Entity\\Gite', NULL, 'Cannot autowire service ".service_locator.a4.yDU4": it references class "App\\Entity\\Gite" but no such service exists.'],
        ], [
            'doctrine' => '?',
            'gite' => 'App\\Entity\\Gite',
        ]);
    }
}
