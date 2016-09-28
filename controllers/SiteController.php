<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Partners;
use app\models\ContactForm;
use app\models\Main;
use app\models\Contacts;
use app\models\Results;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $main = new Main;
       

        $query = (new \yii\db\Query())
            ->select("*")
            ->from('main');
        $command = $query->createCommand();
        $main = $command->queryAll();

        $imgs = new Partners;
        
        $query1 = (new \yii\db\Query())
            ->select("*")
            ->from('partners');

        $command1 = $query1->createCommand();
            
        $imgs = $command1->queryAll();


        /* results */
        $sections = new Results;
        $query1 = (new \yii\db\Query())
            ->select("*")
            ->from('results');

        $command1 = $query1->createCommand();

        $sections = $command1->queryAll();


        return $this->render('index',[
                'main' => $main, 
                'imgs' => $imgs,
                'sections' => $sections
            ]);
    }





    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContacts()
    {

        return $this->render('contacts');
    }


}
