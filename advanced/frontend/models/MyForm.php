<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

class MyForm extends Model
{

    public $country;
    public $token;


    public function rules()
    {

        return [
            ['country', 'validateCountry','skipOnEmpty'=>false,'skipOnError'=>false],
            ['token', function ($attribute, $params) {
                if (!ctype_alnum($this->$attribute)) {
                    $this->addError($attribute, '必须为数字和字母');
                }
            }]
        ];
    }


    public function validateCountry($attribute,$params)
    {
        if(!in_array($this->$attribute,['A','B'])){
            $this->addError($attribute,$attribute.'非法值');
        }
    }


}