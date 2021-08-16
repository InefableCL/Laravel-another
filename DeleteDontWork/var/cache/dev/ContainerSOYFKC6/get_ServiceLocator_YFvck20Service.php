<?php

namespace ContainerSOYFKC6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YFvck20Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YFvck20' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YFvck20'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartRepository' => ['privates', 'App\\Repository\\ShopCartRepository', 'getShopCartRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'shopItems' => ['privates', '.errored..service_locator.YFvck20.App\\Entity\\ShopItems', NULL, 'Cannot autowire service ".service_locator.YFvck20": it references class "App\\Entity\\ShopItems" but no such service exists.'],
        ], [
            'cartRepository' => 'App\\Repository\\ShopCartRepository',
            'em' => '?',
            'shopItems' => 'App\\Entity\\ShopItems',
        ]);
    }
}
