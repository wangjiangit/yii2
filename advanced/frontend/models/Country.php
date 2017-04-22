<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{

    public static function tableName()
    {
        return 'country';
    }

    public static function getDb()
    {
        return \Yii::$app->frontend_db;  // 使用名为 "frontend" 的应用组件
    }

}