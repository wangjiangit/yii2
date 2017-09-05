<?php
namespace frontend\validators;

use Yii;
use yii\validators\Validator;

class CountryValidator extends Validator
{


    //支持模型内验证
    public function validateAttribute($model, $attribute)
    {
        if (!in_array($model->$attribute, ['A', 'B'])) {
            $this->addError($model, $attribute, '非法值');
        }
    }

    //如果不支持模型，使用单独的临时验证
    public function validate($value, &$error = null)
    {
        if (!in_array($value, ['A', 'B'])) {
            $error = '非法值';
            return false;
        }
        return true;
    }


}
