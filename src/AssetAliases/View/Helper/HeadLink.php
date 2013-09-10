<?php


namespace AssetAliases\View\Helper;

use AssetAliases\Config\AssetAliasesConfig;
use Zend\View\Helper\HeadLink as ZendHeadLink;
use Zend\View\Exception;

class HeadLink extends ZendHeadLink
{
    /**
     * @var AssetAliasesConfig
     */
    protected $config;

    /**
     * Constructor
     */
    public function __construct(AssetAliasesConfig $config)
    {
        parent::__construct();

        $this->config = $config;
    }

    /**
     * Create item for stylesheet link item
     *
     * @param  array $args
     * @return stdClass|false Returns false if stylesheet is a duplicate
     */
    public function createDataStylesheet(array $args)
    {
        $href = $args[0];

        if ($this->config->isStyleAliasConfigured($href))
        {
            $args[0] = $this->config->getStyleByAlias($href);
        }

        return parent::createDataStylesheet($args);
    }

}

