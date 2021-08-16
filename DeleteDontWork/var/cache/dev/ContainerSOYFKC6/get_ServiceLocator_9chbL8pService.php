<?php

namespace ContainerSOYFKC6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9chbL8pService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9chbL8p' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9chbL8p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\IndexController::shopCart' => ['privates', '.service_locator.luYv1Z7', 'get_ServiceLocator_LuYv1Z7Service', true],
            'App\\Controller\\IndexController::shopCartAdd' => ['privates', '.service_locator.ZQIo_BP', 'get_ServiceLocator_ZQIoBPService', true],
            'App\\Controller\\IndexController::shopCartDelete' => ['privates', '.service_locator.YFvck20', 'get_ServiceLocator_YFvck20Service', true],
            'App\\Controller\\IndexController::shopItem' => ['privates', '.service_locator.haQC.Zg', 'get_ServiceLocator_HaQC_ZgService', true],
            'App\\Controller\\IndexController::shopList' => ['privates', '.service_locator.NAhe9de', 'get_ServiceLocator_NAhe9deService', true],
            'App\\Controller\\IndexController::shopOrder' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\IndexController:shopCart' => ['privates', '.service_locator.luYv1Z7', 'get_ServiceLocator_LuYv1Z7Service', true],
            'App\\Controller\\IndexController:shopCartAdd' => ['privates', '.service_locator.ZQIo_BP', 'get_ServiceLocator_ZQIoBPService', true],
            'App\\Controller\\IndexController:shopCartDelete' => ['privates', '.service_locator.YFvck20', 'get_ServiceLocator_YFvck20Service', true],
            'App\\Controller\\IndexController:shopItem' => ['privates', '.service_locator.haQC.Zg', 'get_ServiceLocator_HaQC_ZgService', true],
            'App\\Controller\\IndexController:shopList' => ['privates', '.service_locator.NAhe9de', 'get_ServiceLocator_NAhe9deService', true],
            'App\\Controller\\IndexController:shopOrder' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\IndexController::shopCart' => '?',
            'App\\Controller\\IndexController::shopCartAdd' => '?',
            'App\\Controller\\IndexController::shopCartDelete' => '?',
            'App\\Controller\\IndexController::shopItem' => '?',
            'App\\Controller\\IndexController::shopList' => '?',
            'App\\Controller\\IndexController::shopOrder' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\IndexController:shopCart' => '?',
            'App\\Controller\\IndexController:shopCartAdd' => '?',
            'App\\Controller\\IndexController:shopCartDelete' => '?',
            'App\\Controller\\IndexController:shopItem' => '?',
            'App\\Controller\\IndexController:shopList' => '?',
            'App\\Controller\\IndexController:shopOrder' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
