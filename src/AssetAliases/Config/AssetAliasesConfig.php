<?php

namespace AssetAliases\Config;

use Zend\Stdlib\AbstractOptions;

class AssetAliasesConfig extends AbstractOptions
{
    /**
     * Aliases of JS files
     * @var array
     */
    protected $scripts;

    /**
     * Aliases of CSS files
     * @var array
     */
    protected $styles;

    /**
     * @param array $scripts
     */
    public function setScripts(array $scripts)
    {
        $this->scripts = $scripts;
    }

    /**
     * @return array
     */
    public function getScripts()
    {
        return $this->scripts;
    }

    /**
     * @param string $alias
     * @return bool
     */
    public function isScriptAliasConfigured($alias)
    {
        return !is_null($alias) && is_array($this->scripts) && isset($this->scripts[$alias]);
    }

    public function getScriptByAlias($alias)
    {
        return $this->scripts[$alias];
    }

    /**
     * @param array $styles
     */
    public function setStyles(array $styles)
    {
        $this->styles = $styles;
    }

    /**
     * @return array
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * @param string $alias
     * @return bool
     */
    public function isStyleAliasConfigured($alias)
    {
        return !is_null($alias) && is_array($this->styles) && isset($this->styles[$alias]);
    }

    public function getStyleByAlias($alias)
    {
        return $this->styles[$alias];
    }


}