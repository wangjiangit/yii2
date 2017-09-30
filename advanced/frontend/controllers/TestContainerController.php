<?php

namespace frontend\controllers;

use Yii;
use frontend\librarys\Hello;
use yii\helpers\VarDumper;

class TestContainerController extends \yii\web\Controller
{

    public $hello;

    //构造函数中Hello类型就是通过yii\di\Container自动注入的
    public function __construct($id, $module, Hello $hello, $config = [])
    {
        $this->hello = $hello;
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
       // Yii::$container->set('frontend\librarys\Hello'); //采用单例模式
        Yii::$container->set('frontend\librarys\Hello');
        exit;

        return $this->renderContent('测试依赖注入');
    }




}

