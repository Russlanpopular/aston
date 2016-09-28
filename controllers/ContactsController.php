<?php

namespace app\controllers;
use app\models\Contacts;
use Yii;

class ContactsController extends \yii\web\Controller
{
    public function init()
    {
        $this->layout = 'main2';
    }
    public function actionIndex()
    {
        $table_contacts = new Contacts;

        $query = (new \yii\db\Query())
            ->select("*")
            ->from('contacts');
        
        $command = $query->createCommand();
        $table_contacts = $command->queryAll();
        return $this->render('index',[
        		'table_contacts' => $table_contacts,
        	]);
    }

}
