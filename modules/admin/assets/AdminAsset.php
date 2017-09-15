<?php
/**
 * @link hos.loc
 * @copyright Copyright (c) 2017 hos
 */

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{

    public $sourcePath = '@app/modules/admin/web/';
    public $css = [
      'css/bootstrap.min.css',
      'css/bootstrap-responsive.min.css',
      'css/datepicker.css',
      'css/uniform.css',
      'css/fullcalendar.css',
      'css/matrix-style.css',
      'css/matrix-media.css',
      'css/jquery.gritter.css',
      'font-awesome/css/font-awesome.css',
      'http://fonts.googleapis.com/css?family=Open+Sans:400,700,800',


'css/colorpicker.css',
'css/select2.css',
'css/bootstrap-wysihtml5.css',


    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.ui.custom.js',
        'js/bootstrap.min.js',
        'js/bootstrap-colorpicker.js',
        'js/bootstrap-datepicker.js',
        'js/jquery.toggle.buttons.js',
        'js/masked.js',
        'js/jquery.uniform.js',
        'js/select2.min.js',
        'js/matrix.js',
        'js/matrix.form_common.js',
        'js/wysihtml5-0.3.0.js',
        // 'js/jquery.peity.min.js',
        // 'js/bootstrap-wysihtml5.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
