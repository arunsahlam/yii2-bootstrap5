<?php
namespace arunsahlam\bootstrap5;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 */
class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap/dist';
    public $css = [
        'css/bootstrap.css'
    ];
}