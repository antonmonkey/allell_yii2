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
      // 'css/bootstrap-wysihtml5.css',
      'css/hos-styles.css',
    ];
    public $js = [
      // 'js/excanvas.min.js',
      // 'js/jquery.ui.custom.js',
      'js/bootstrap.min.js',
      // 'js/jquery.flot.min.js',
      // 'js/jquery.flot.resize.min.js',
      // 'js/jquery.peity.min.js',
      // 'js/fullcalendar.min.js',
      'js/matrix.js',
      // 'js/matrix.dashboard.js',
      // 'js/jquery.gritter.min.js',
      // 'js/matrix.interface.js',
      // 'js/matrix.chat.js',
      // 'js/jquery.validate.js',
      // 'js/matrix.form_validation.js',
      // 'js/jquery.wizard.js',
      // 'js/jquery.uniform.js',
      // 'js/select2.min.js',
      // 'js/matrix.popover.js',
      // 'js/jquery.dataTables.min.js',
      // 'js/matrix.tables.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAfrsset',
    ];
}

