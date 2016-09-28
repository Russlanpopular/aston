<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class PartnersForm extends Model
{
    public $src;
    public $id;
    public $description;
    public $action;
    public $defaultimg;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
           
            [['src','description'], 'required'],
           [['src'], 'file', 'extensions' => 'gif, jpg, png','skipOnEmpty' => false,'mimeTypes' => 'image/jpeg, image/png'],
            
        ];
    }

    public function upload(){
        $img = new Partners();



        $img->src = $this->src;


        return $img->save();
    }
}
