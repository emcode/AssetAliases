<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'AssetAliases\Config\AssetAliasesConfig' => 'AssetAliases\Config\AssetAliasesConfigFactory',
        )
    ),
    'view_helpers' => array(
        'factories' => array(
            'headLink' => 'AssetAliases\View\Helper\HeadLinkFactory',
            'headScript' => 'AssetAliases\View\Helper\HeadScriptFactory',
            'inlineScript' => 'AssetAliases\View\Helper\InlineScriptFactory'
        )
    ),
);
