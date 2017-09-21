<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\AutosSale;
use app\models\AutosSaleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Autos;
use yii\helpers\ArrayHelper;
use app\models\ImageUpload;
use yii\web\UploadedFile;
/**
 * AutosSaleController implements the CRUD actions for AutosSale model.
 */
class AutosSaleController extends Controller
{

    public $layout = '@app/modules/admin/views/layouts/main.php';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AutosSale models.
     * @return mixed
     */
    public function actionIndex()
    {
        $autos = AutosSale::find()->all();

        foreach ($autos as $auto) {
          $createDate = new \DateTime($auto->date);
          $new_date = $createDate->format('Y-m-d');
          $auto->date = $new_date;
        }

        $autosTypes = Autos::find()->all();
        $types = ArrayHelper::map($autosTypes, 'id', 'type');

        return $this->render('index', [
            'autos' => $autos,
            'types' => $types,
        ]);
    }

    /**
     * Displays a single AutosSale model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AutosSale model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AutosSale();
        $auto = Autos::find()->all();
        $types = ArrayHelper::map($auto, 'id', 'type');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'types' => $types,
            ]);
        }
    }

    /**
     * Updates an existing AutosSale model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $auto = Autos::find()->all();
        $types = ArrayHelper::map($auto, 'id', 'type');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'types' => $types,
            ]);
        }
    }

    /**
     * Deletes an existing AutosSale model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AutosSale model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AutosSale the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AutosSale::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSetImage($id, $tag)
    {

      $model = new ImageUpload;

      if  (Yii::$app->request->isPost)
      {
          $autos = $this->findModel($id);

          $file = UploadedFile::getInstance($model, 'image');

          if ($autos->saveImage($model->uploadFile($file, $autos->$tag), $tag)) {
            return $this->redirect(['update', 'id' => $autos->id]);
          }

      }

      return $this->renderAjax('image', ['model' => $model]);
    }
}
