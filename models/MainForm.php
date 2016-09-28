<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class MainForm extends Model
{
    public $title;
    public $description;
    public $keywords;
    public $section1;
    public $section2;
    public $section3;
    public $section4;
    public $section5;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
           
            [['title', 'description', 'keywords', 'section1','section2','section3','section4','section5'], 'required'],
            
        ];
    }

}
