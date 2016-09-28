<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ServiceForm extends Model
{
    public $img;
    public $article_head;
    public $article_text;
    public $id;
    public $action;
    public $defaultimg;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
           
        [['img','article_text','article_head'], 'required'],
        [['img'], 'file', 'extensions' => 'gif, jpg, png','skipOnEmpty' => false,'mimeTypes' => 'image/jpeg, image/png'],
            
        ];
    }

    public function writearticle(){
        $service = new Service();
        $service->img = $this->img;
        $service->article_head = $this->article_head;
        $service->article_text = $this->article_text;


        return $service->save();
    }

}
