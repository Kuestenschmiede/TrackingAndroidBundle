<?php

namespace con4gis\TrackingAndroidBundle\ContaoManager;

use con4gis\ApiBundle\Con4gisApiBundle;
use con4gis\TrackingAndroidBundle\con4gisTrackingAndroidBundle;
use con4gis\TrackingBundle\con4gisTrackingBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;

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