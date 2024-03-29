<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/prettyPhoto.css',
        'css/price-range.css',
        'css/animate.css',
        'css/responsive.css',
        'css/main.css',
    ];
    public $js = [
        "js/jquery.js",
        "js/bootstrap.min.js",
        "js/jquery.scrollUp.min.js",
        "js/price-range.js",
        "js/jquery.prettyPhoto.js",
        "js/main.js",   
     ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
