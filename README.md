AssetAliases
================
Version 0.0.1

Introduction
------------

AssetAliases is a ZF2 module that lets you configure aliases for your CSS and JS
files and then use them in your view templates instead of hard coding paths.
You can use configured aliases with headLink, headScript and inlineScript view helpers as usual.

It can be useful in situation where you have few different ZF2 modules that depend on the same asset files.

Now you can have all paths configured in one place. You can also take advatange from overriding
configuration using global and local configuration files.


Usage
-----

1. Enable AssetAliases module in your application.config.php
2. In any module config or autoloaded config you can add aliases to assets paths, for ex:

```php
array(
        'asset_aliases' => array(
            'scripts' => array(
                'my-script' => '/assets/abcd/js/some-script.js'
            ),
            'styles' => array(
                'my-style' => '/assets/abcd/css/some-style.css'
            )
        ),
);
```

3. Next you can use configured aliases somewhere in yout template or partial:

```php
    $this->headLink()->appendStylesheet('my-style');
    $this->headScript()->appendFile('my-script')
```