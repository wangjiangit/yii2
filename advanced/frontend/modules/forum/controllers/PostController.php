<?php
namespace frontend\modules\forum\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;

class PostController extends Controller
{


    public function actionIndex()
    {
        //  echo    Yii::$app->getModule('forum'); //获取模块实例
        // echo  Yii::$app->controller->module ;  // 获取处理当前请求控制器所属的模块
        //echo $this->module->id;



        return $this->render('index');
    }

}
