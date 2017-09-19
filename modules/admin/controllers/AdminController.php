<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class AdminController extends Controller
{

    public $layout = '@app/modules/admin/views/layouts/main.php';

    public function actions()
    {
        return [
            'error' => ['class' => 'yii\web\ErrorAction'],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
      return $this->render('opotunities-digest');
    }

    public function actionError()
    {
      return $this->render('error');
    }
    
}
