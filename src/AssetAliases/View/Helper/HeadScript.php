<?php

namespace AssetAliases\View\Helper;

use AssetAliases\Config\AssetAliasesConfig;
use Zend\View\Helper\HeadScript as ZendHeadScript;
use Zend\View\Exception;
use stdClass;

class HeadScript extends ZendHeadScript
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
     * Create data item containing all necessary components of script
     *
     * @param  string $type       Type of data
     * @param  array  $attributes Attributes of data
     * @param  string $content    Content of data
     * @return stdClass
     */
    public function createData($type, array $attributes, $content = null)
    {
        $alias = null;

        if (isset($attributes['src']))
        {
            $alias = $attributes['src'];
        }

        if ($alias && $this->config->isScriptAliasConfigured($alias))
        {
            $attributes['src'] = $this->config->getScriptByAlias($alias);
        }

        return parent::createData($type, $attributes, $content);
    }

}

