<?php

namespace app\controllers;
use app\models\Results;

class ResultsController extends \yii\web\Controller
{
    public function init()
    {
        $this->layout = 'main2';
    }
    public function actionIndex()
    {


        $sections = new Results;
        $query1 = (new \yii\db\Query())
            ->select("*")
            ->from('results');

        $command1 = $query1->createCommand();

        $sections = $command1->queryAll();
        return $this->render('index',[
            'sections' => $sections,
        ]);
    }

}
