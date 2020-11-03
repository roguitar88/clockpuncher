<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\application\assets;

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
        //'resources/css/ie10-viewport-bug-workaround.css',
        /*
        'resources/css/style.css',
        'resources/owl-carousel-2/assets/owl.carousel.min.css',
        'resources/css/nivo-slider.css',
        'resources/css/themes/default/default.css',
        'resources/css/video.css',
        'resources/slick/slick.css',
        'resources/slick/slick-theme.css',
        'resources/slick/custom.css',              
        'resources/css/css.css',
        'resources/fontawesome/css/all.css',
        'resources/css/newsite.css',
        */
  
    ];
    public $js = [
        //'resources/js/jquery-1.11.1.min.js',
        /*
        'resources/bootstrap/js/bootstrap.min.js',
        //'resources/js/ie10-viewport-bug-workaround.js',
        'resources/mask/jquery.mask.min.js',
        //'resources/js/mask.js',
        'resources/owl-carousel-2/owl.carousel.min.js',
        // 'resources/js/main.js',
        'resources/js/main_old.js',
        '//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5272a52155612742',
        'https://www.google.com/recaptcha/api.js',
        'resources/slick/jquery.easing.1.3.js',       
        'resources/js/jquery.nivo.slider.js',         
        'resources/slick/jquery-migrate-1.2.1.min.js',
        'resources/slick/slick.js',
        'resources/fontawesome/js/js.css', 
        'resources/js/banner.js',
        'resources/js/cookie.js',
        */
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];
}
