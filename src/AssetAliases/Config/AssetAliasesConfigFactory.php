<?php

namespace AssetAliases\Config;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use AssetAliases\Config\AssetAliasesConfig;

class AssetAliasesConfigFactory implements FactoryInterface
{
    protected $configurationKey = 'asset_aliases';

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config');
        $configData = isset($config[$this->configurationKey]) ? $config[$this->configurationKey] : array();
        $assetAliasesConfig = new AssetAliasesConfig($configData);
        return $assetAliasesConfig;
    }
}

