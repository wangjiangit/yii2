<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'keyPrefix'=>'frontend_app'
        ],
       /* 'cache1'=>[
            'class'=>'yii\caching\DbCache',
        ],*/
        'authManager'=>[
            'class'=>'yii\rbac\DbManager'
        ]
    ],
];
