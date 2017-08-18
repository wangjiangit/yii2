<?php

namespace frontend\controllers;

use Yii;
use frontend\filters\TimeActionFilter;
use yii\imagine\Image;
class CityController extends \yii\web\Controller
{

    public $layout='main';


    public function behaviors()
    {
        return [
            [
          //      'class'=>'frontend\filters\TimeActionFilter',
                'class'=>TimeActionFilter::className(),
                'only'=>['index']
            ]

        ];
    }

    public function actions()
    {
        return [
            'helloworld'=>'frontend\actions\HelloWorldAction',
            'page'=>'yii\web\ViewAction'
        ];
    }

    public function actionIndex()
    {
        //使用yiisoft/yii2-imagine
        // Image::frame('@runtime/image/a.jpg',5,'4FF',0)->save(Yii::getAlias('@runtime/image/b.jpg'),['jpeg_quality' => 50]);
        //  Image::text('@runtime/image/a.jpg','ABCD','@runtime/image/aicomoon.ttf',[50,50],['color'=>'FFF']);
        return $this->render('index');
    }


}
