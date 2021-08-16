<?php

namespace ContainerQbD2IBh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LuYv1Z7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.luYv1Z7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.luYv1Z7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartRepository' => ['privates', 'App\\Repository\\ShopCartRepository', 'getShopCartRepositoryService', true],
        ], [
            'cartRepository' => 'App\\Repository\\ShopCartRepository',
        ]);
    }
}
