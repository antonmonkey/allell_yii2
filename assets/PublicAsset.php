<?php
/**
 * @link hos.loc
 * @copyright Copyright (c) 2017 hos
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      'public/css/style.css',
    ];
    public $js = [
      'public/js/'
    ];
    public $depends = [
      'yii\web\YiiAsset',
      'yii\bootstrap\BootstrapPluginAsset',
      '\rmrevin\yii\fontawesome\AssetBundle',
    ];
}