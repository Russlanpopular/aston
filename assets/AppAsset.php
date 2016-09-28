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
        'css/animate.css',
        'css/clear.css',
        'css/jquery.bxslider.css',
        'css/jquery.mmenu.all.css',
        'css/style.css',
    ];
    public $js = [
    'js/css3-mediaqueries.js',
    'js/html5.js',
    'js/jquery-2.1.4.min.js',
    'js/jquery.bxslider.js',
    'js/jquery.mmenu.all.min.js',
    'js/wow.min.js',
    'js/javascript.js',
    ];
    public $depends = [
       
    ];
}
