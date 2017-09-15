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
        /* 'session'=>[
           'class'=>'yii\web\DbSession',
           'db'=>'db',
           'sessionTable'=>'session'
         ],*/
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'flushInterval' => 1000,
            'targets' => [
                'file1_log' => [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    // 'enabled'=>false, //或者通过Yii::$app->log->targets['file1_log']->enabled=false来禁用
                    //'logVars'=>[],
                    //  'exportInterval'=>1000
                ],
                /* 'db1_log'=>[
                     'class'=>'yii\log\DbTarget',
                     'levels'=>['error','warning'],
                     'logVars'=>[],
                     'db'=>'db',
                     'logTable'=>'log',
                     'exportInterval'=>1000
                 ]*/
            ],
        ],
        'errorHandler' => [
            //  'maxSourceLines'=>19,
            //   'displayVars'=>[],
            //    'errorView'=>'@yii/views/errorHandler/error.php',//显示不包含函数调用栈信息的错误信息是使用， 当YII_DEBUG 为 false时，所有错误都使用该视图。
            // 'exceptionView'=>@yii/views/errorHandler/exception.php, // 显示包含函数调用栈信息的错误信息时使用。
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
        /*    'formatter'=>[
                'dateFormat' => 'dd.MM.yyyy',
                'decimalSeparator' => ',',
                'thousandSeparator' => ' ',
                'currencyCode' => 'EUR',
            ]*/
      /*  'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.163.com',
                'username' => 'jiji_12342006@163.com',
                'password' => '',
                'port' => '25',
                'encryption' => 'tls',
            ],
        ],*/
    ],
    'params' => $params,
];
