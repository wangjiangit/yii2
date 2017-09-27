<?php

namespace frontend\controllers;

use Yii;
use yii\filters\PageCache;
use yii\filters\HttpCache;


class TestCacheController extends \yii\web\Controller
{


    public function behaviors()
    {
        return [
            'pageCache' => [
                'class' => PageCache::className(),//该过滤器是针对页面缓存
                'only' => ['list'],
                'duration' => 60
            ],
            'httpCache' => [
                'class' => HttpCache::className(),
                'only' => ['ok'],
                'cacheControlHeader' => 'public, max-age=3600',
                'lastModified' => function ($action, $params) {
                    return time() + 3600;
                },
                'etagSeed'=> function ($action, $params) {
                   return md5(time()+3600);
                }
            ]
        ];
    }

    public function actionIndex()
    {

        return $this->render('index');

    }


    public function actionList()
    {

        return $this->render('list');
    }


    public function actionOk()
    {
        return $this->render('ok');
    }


}

