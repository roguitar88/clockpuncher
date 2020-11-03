<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        //'resources/css/site.css',
        'https://fonts.googleapis.com/css?family=Nunito:300,400,700',
        'fonts/icomoon/style.css',
        'css/bootstrap/bootstrap-grid.css',
        'css/bootstrap/bootstrap-reboot.css',
        'css/aos.css',
        'css/bootstrap.min.css',
        'css/bootstrap.min.css.map', //This is the map
        'css/bootstrap-datepicker.css',
        'fonts/flaticon/font/flaticon.css',
        'css/jquery.fancybox.min.css',
        'css/jquery-ui.css',
        'css/magnific-popup.css',
        'css/mediaelementplayer.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/style.css',
        'css/generalstyle.css'
    ];
    public $js = [
        'js/jquery-3.3.1.min.js',
        'js/jquery-ui.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.countdown.min.js',
        'js/bootstrap-datepicker.min.js',
        'js/jquery.easing.1.3.js',
        'js/aos.js',
        'js/jquery.fancybox.min.js',
        'js/jquery.sticky.js',
        'js/main.js',
        'js/mediaelement-and-player.min.js',
        'js/slick.min.js',
        'js/typed.js',
        'js/jquery-migrate-3.0.1.min.js',
        'js/jquery.stellar.min.js',
        'js/jquery.magnific-popup.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
