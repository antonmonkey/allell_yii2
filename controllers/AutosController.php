<?php

namespace app\controllers;

use app\components\hosslug\hosGetSlug;
use app\models\Autos;

class AutosController extends \yii\web\Controller
{
    public function actionIndex($id)
    {

        $autos = Autos::find()->where(['slug' => $id])->one();

        $r = $autos->autosSale;

        return $this->render('index', [
          'id' => $id,
          'r' => $r,
        ]);
    }

}
