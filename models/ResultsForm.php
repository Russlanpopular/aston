<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ResultsForm extends Model
{
    public $id;
    public $action;
    public $section;


    public function upload(){
        $res = new Results();



        $res->section = $this->section;


        return $res->save();
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [

            [['section'], 'required'],
//            [['src'], 'file', 'extensions' => 'gif, jpg, png','skipOnEmpty' => false,'mimeTypes' => 'image/jpeg, image/png'],

        ];
    }
}
