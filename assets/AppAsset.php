<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
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
//        "css/bootstrap.min.css",
        "css/font-awesome.min.css",
        "css/owl.carousel.css",
        "css/owl.theme.css",
        "css/nivo-lightbox/nivo-lightbox.css",
        "css/nivo-lightbox/nivo-lightbox-theme.css",
        "css/animate.css",
        "css/style.css",

    ];
    public $js = [
//        "js/jquery-1.11.2.min.js",
        "js/wow.min.js",
        "js/owl-carousel.js",
        "js/nivo-lightbox.min.js",
        "js/smoothscroll.js",
//        "js/bootstrap.min.js",
        "js/classie.js",
        "js/script.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

class HeadAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        "js/modernizr.custom.js",
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}

class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js",
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js'
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position' => \yii\web\View::POS_HEAD
    ];
}
