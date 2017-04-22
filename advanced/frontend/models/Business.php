<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "business".
 *
 * @property string $id
 * @property string $name
 * @property string $address
 * @property string $create_time
 * @property string $update_time
 */
class Business extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'business';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'update_time'], 'safe'],
            [['name'], 'string', 'max' => 5],
            [['address'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
