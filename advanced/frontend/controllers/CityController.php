<?php

namespace frontend\controllers;

use Yii;
use frontend\filters\TimeActionFilter;
use yii\web\NotFoundHttpException;
use yii\web\Request;
use yii\imagine\Image;

class CityController extends \yii\web\Controller
{

    public $layout = 'main';


    public function behaviors()
    {
        return [
            [
                //      'class'=>'frontend\filters\TimeActionFilter',
                'class' => TimeActionFilter::className(),
                'only' => ['index']
            ]

        ];
    }

    public function actions()
    {
        return [
            'helloworld' => 'frontend\actions\HelloWorldAction',
            'page' => 'yii\web\ViewAction'
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
        /* Yii::beginProfile('profile1');
         for($i=0;$i<10000;$i++){
             echo 'asdf';
         }
         Yii::endProfile('profile1');*/
        /* Yii::trace('trace1');
         Yii::info('this is info message');
         Yii::warning('warning');
         Yii::error('error',__METHOD__);*/
        // $a=10/0;
        //  throw new NotFoundHttpException('亲,你要找的页面不存在哦');
        /*
                Yii::$app->session->open();
               Yii::$app->session->set('name','wj');*/
        //var_dump(Yii::$app->session->get('name'));exit;
        /*Yii::$app->session->remove('name');
        exit;*/

        /* //一次性数据，访问之后即消失
        $session = Yii::$app->session;
        $session->setFlash('postDeleted', 'You have successfully deleted your post.');
        $session->addFlash('postDeleted', 'You have successfully deleted your post2'); //addFlash会将前面同名的转化为数组，以追加
        echo $session->getFlash('postDeleted');
        // $result 为 false，因为flash信息已被自动删除
        $result = $session->hasFlash('postDeleted');
         */


        //读取cookie
        //  $cookies=Yii::$app->request->cookies; //yii\web\CookieCollection
        //  var_dump($cookies->getValue('_csrf-frontend'));exit;
        // echo $cookies->get('_csrf-frontend')->value;exit;
        // echo $cookies['_csrf-frontend'];exit;
        // var_dump($cookies->has('_csrf-frontend'));exit;


        //发送cookie
       $cookies = Yii::$app->response->cookies;
        /*
        $cookies->add(new \yii\web\Cookie([
                    'name' => 'my_name',
                    'value' => 'wj'
                ]
            )
        );
         $cookies->remove('my_name');
        */



        return $this->render('index');

    }


}
