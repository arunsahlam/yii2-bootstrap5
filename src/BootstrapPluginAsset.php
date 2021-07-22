<?php
namespace arunsahlam\bootstrap5;

use yii\web\AssetBundle;

class BootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap/dist';
    public $js = [
        'js/bootstrap.bundle.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'arunsahlam\bootstrap5\BootstrapAsset',
    ];
}