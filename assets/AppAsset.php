<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\bootstrap5\BootstrapIconAsset;
use yii\web\AssetBundle;
use yii\bootstrap5\BootstrapAsset;
use yii\web\YiiAsset;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
//    public $sourcePath = '';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css',
        'https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
//        'css/styles.css'
    ];
    public $js = [
//        Bootstrap core JS
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
//        Core theme JS
        'js/scripts.js',
//        SB Forms JS
        'https://cdn.startbootstrap.com/sb-forms-latest.js'

    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        BootstrapIconsAsset::class
    ];
}
