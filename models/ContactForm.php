<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $id;
    public $address;
    public $telephone;
    public $action;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
           
            [['address','telephone'], 'required'],
            
        ];
    }

    public function upload(){
        $contact = new Contacts();

        $contact->address = $this->address;
        $contact->telephone = $this->telephone;

        return $contact->save();
    }
}
