<?php

namespace app\controllers;
use app\models\Service;

class ServicesController extends \yii\web\Controller
{
    public function init()
    {
        $this->layout = 'main2';
    }
    public function actionIndex()
    {
    	$services = new Service();

        $query = (new \yii\db\Query())
            ->select("*")
            ->from('service');

        $command = $query->createCommand();
            
        $services = $command->queryAll(); 

        return $this->render('index',[
        		'services' => $services,
        	]);
    }

}
