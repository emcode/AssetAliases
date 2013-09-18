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
     * Overall and default version of all assets
     * It will be used if scripts version or
     * styles version is not configured
     * @var string
     */
    protected $version;

    /**
     * Version of JS assets
     * @var string
     */
    protected $scriptsVersion;

    /**
     * Version of CSS assets
     * @var string
     */
    protected $stylesVersion;

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

    /**
     * Get configured path for asset
     * @param $alias Alias for asset path
     * @return string
     */
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

    /**
     *  Get configured path for asset
     * @param $alias Alias for asset path
     * @return string
     */
    public function getStyleByAlias($alias)
    {
        return $this->styles[$alias];
    }

    /**
     * @param string $scriptsVersion
     */
    public function setScriptsVersion($scriptsVersion)
    {
        $this->scriptsVersion = $scriptsVersion;
    }

    /**
     * Get current version of scripts
     *
     * @return string
     */
    public function getScriptsVersion()
    {
        if (is_null($this->scriptsVersion))
        {
            // fallback to use overall version value
            return $this->getVersion();
        }

        return $this->scriptsVersion;
    }

    public function hasScriptsVersion()
    {
        return !is_null($this->scriptsVersion) || !is_null($this->version);
    }

    /**
     * @param string $stylesVersion
     */
    public function setStylesVersion($stylesVersion)
    {
        $this->stylesVersion = $stylesVersion;
    }

    /**
     * Get current version of styles
     *
     * @return string
     */
    public function getStylesVersion()
    {
        if (is_null($this->stylesVersion))
        {
            // fallback to use overall version value
            return $this->getVersion();
        }

        return $this->stylesVersion;
    }

    public function hasStylesVersion()
    {
        return !is_null($this->stylesVersion) || !is_null($this->version);
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * Get overall / default version of all assets
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}