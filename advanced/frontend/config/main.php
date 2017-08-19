<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

       /* 'urlManager' => [
            'enablePrettyUrl' => false,
            'showScriptName' => false,
            'enableStrictParsing'=>fasle,
            'suffix'=>'.html',
            'rules' => [
                'city/<id:\d+>'=>'city/index',
                [
                    'pattern'=>'citymap',
                    'route'=>'city/index',
                    'suffix'=>'.json'
                ],
                [
                    'pattern'=>'city/<action:(index|list)>/<id:\d{4}>',
              //      'pattern'=>'GET city/<action:(index|list)>/<id:\d{4}>', //模式前面有HTTP方法的，只对 RESTful APIs 有效
                    'route'=>'city/<action>',
                    'defaults'=>['id'=>1],
                    'suffix'=>'.shtml'
                ],
                'http://www.5izan.com/login'=>'site/login',
                'http://<language:\w+>.5izan.com'=>'site/<language>'
            ],
        ],*/

        /*  'assetManager'=>[
          'bundles'=>[
              'yii\web\JqueryAsset'=>[
                  'sourcePath'=>null,
                  'js'=>[
                      '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'
                  ]
              ]
          ]
      ]*/
    ],
    'params' => $params,
];
