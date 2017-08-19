<?php

namespace frontend\controllers;

use Yii;
use frontend\filters\TimeActionFilter;
use yii\web\Request;
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
       //var_dump(Yii::$app->urlManager->enableStrictParsing);exit;
        /*Yii::$app->response->statusCode=200;
        Yii::$app->response->headers->set('wj','hahhds');
        Yii::$app->response->format=\yii\web\Response::FORMAT_JSONP;
        Yii::$app->response->data=['data'=>['name'=>'wj','age'=>18],'callback'=>'nihao'];
        Yii::$app->response->send();*/

     /*   return Yii::createObject([
            'class'=>'yii\web\Response',
            'statusCode'=>200,
            'format'=>\yii\web\Response::FORMAT_JSON,
            'data'=>[
                'name'=>'wj',
                'age'=>18
            ]
        ]);*/

       // $this->redirect('http://www.baidu.com')

        //$this->asJson(['NAME'=>'json','X'=>'ss']);
       /* Yii::$app->response->on(\yii\web\Response::EVENT_AFTER_SEND,function(){
           Yii::trace('下载事件监听');
        });
        Yii::$app->response->sendFile(Yii::getAlias('@runtime/image/a.jpg'))->send();*/

        
       return $this->render('index');

    }


}
