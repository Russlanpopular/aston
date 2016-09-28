<?php

namespace app\controllers;
use app\models\Partners;

class PartnersController extends \yii\web\Controller
{
    public function init()
    {
        $this->layout = 'main2';
    }
    public function actionIndex()
    {


        $imgs = new Partners;
        $query1 = (new \yii\db\Query())
            ->select("*")
            ->from('partners');

        $command1 = $query1->createCommand();
            
        $imgs = $command1->queryAll(); 
        return $this->render('index',[
        	'imgs' => $imgs,
        	]);
    }

}
