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
2. In any module config or autoloaded config you can configure aliases to assets paths, for ex:

```php
array(
    'asset_aliases' => array(
        'scripts' => array(
            'jquery' => '/assets/storage/vendor/jquery/jquery-2.0.3.min.js',
            'modernizr' => '/assets/storage/vendor/modernizr/modernizr.js',
            'select2' => '/assets/storage/vendor/select2/select2.js',
            'bootstrap' => '/assets/storage/vendor/bootstrap/js/bootstrap.min.js',
            'bootstrap-editable' => '/assets/storage/vendor/bootstrap-editable/js/bootstrap-editable.js'
        ),
        'styles' => array(
            'bootstrap' => '/assets/storage/vendor/bootstrap/css/bootstrap.min.css',
            'bootstrap-editable' => '/assets/storage/vendor/bootstrap-editable/css/bootstrap-editable.css'
        )
    ),
);
```

3. Next you can use configured aliases somewhere in your template or partial:

```php

<?php echo $this->headLink()
                ->appendStylesheet('bootstrap')
                ->appendStylesheet('bootstrap-editable') ?>

<?php echo $this->headScript()
                ->prependFile('modernizr') ?>

<?php echo $this->inlineScript()
                ->appendFile('jquery')
                ->appendFile('bootstrap')
                ->appendFile('bootstrap-editable')
                ->appendFile('select2') ?>

```