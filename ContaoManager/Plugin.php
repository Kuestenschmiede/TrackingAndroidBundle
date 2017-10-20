<?php

namespace con4gis\TrackingAndroidBundle\ContaoManager;

use con4gis\ApiBundle\Con4gisApiBundle;
use con4gis\CoreBundle\con4gisCoreBundle;
use con4gis\GroupsBundle\con4gisGroupsBundle;
use con4gis\TrackingAndroidBundle\con4gisTrackingAndroidBundle;
use con4gis\TrackingBundle\con4gisTrackingBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\CssSelector\Parser\ParserInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class Plugin implements BundlePluginInterface
{

    /**
     * Gets a list of autoload configurations for this bundle.
     *
     * @param ParserInterface $parser
     *
     * @return ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(con4gisTrackingAndroidBundle::class)
                ->setLoadAfter([con4gisTrackingBundle::class])
        ];
    }
}