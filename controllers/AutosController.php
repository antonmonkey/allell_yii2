<?php

namespace app\controllers;

class AutosController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        return $this->render('index', [
          'id' => $id,
        ]);
    }

}
