<?php

namespace frontend\models;

use Yii;
use yii\base\Model;


class EntryForm extends Model {
    
    public $name;
    public $email;
    public $subject;
    public $body;
    
    public function rules() {
        
        return [
            [['name','email'], 'required'],
            ['email','email']
        ];
    }
    
    public function sendEmail( $email ) {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
        
    }
}

