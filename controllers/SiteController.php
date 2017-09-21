<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Autos;

class SiteController extends Controller
{
     public function beforeAction($action) {
        if (!parent::beforeAction($action))
            return false;
        Yii::$app->view->title = 'Allell - ' . ucfirst($this->action->id);

        return true;
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {

      return $this->render('contact');
    
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAuto()
    {
        $autos = Autos::find()->all();

        return $this->render('auto',[
            'autos' => $autos,
          ]);
    }

    public function actionBlog()
    {
        return $this->render('blog');
    }

    public function actionEshop()
    {
        return $this->render('e-shop');
    }

    public function actionServices()
    {
        return $this->render('services');
    }

}
