<?php

namespace frontend\controllers;

use EasyWeChat\Support\Arr;
use Yii;
use frontend\filters\TimeActionFilter;
use frontend\helpers\OtherHelper;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\web\Request;
use yii\imagine\Image;
use yii\base\DynamicModel;
use yii\helpers\HtmlPurifier;
use yii\helpers\StringHelper;
use yii\helpers\FileHelper;
use frontend\events\Foo;
use frontend\events\FooEvent;
use yii\base\Event;
use yii\di\ServiceLocator;

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
      // echo OtherHelper::formatNumber(12.3456,OtherHelper::PRECISION_ONE);exit; //使用自定义助手类

       /* $arr=[
            ['id'=>new \stdClass(),'name'=>'wj','age'=>12],
            ['id'=>2,'name'=>'wj21','age'=>20]
        ];
        var_dump(ArrayHelper::getValue($arr,'0'));exit;*/

       // $a=['name'=>'wj','age'=>25];
        $data = [
            ['id' => '123', 'data' => 'abc','name'=>'aaa'],
            ['id' => '456', 'data' => 'def','name'=>'bbb'],
        ];

       /* $b= ArrayHelper::getColumn($data,function($element){
            return $element['id'].'-'.$element['name'];
        });*/

       /* $b=ArrayHelper::index($data,function($element){
            return $element['id'].'-wj';
        });*/

        //$b=ArrayHelper::map($data,'id','data');

        //ArrayHelper::multisort($data,['id','data'],[SORT_ASC,SORT_ASC]);

       // $b=ArrayHelper::isAssociative($data);
       // $b=ArrayHelper::isIndexed($data);
      //  $b=ArrayHelper::htmlEncode($data,false);

        $a=['name'=>'wj','age'=>20];
        $b=[12,'zhongguo'];
        $c=[12,'zhongguo'];
        $d=[
         'asdf'=> ['name'=>'wj','sec'=>1],
          ['name'=>'wj','sec'=>1]
        ];
      //  $b=ArrayHelper::merge($a,$b,$c,$d);
       // $b=ArrayHelper::isIn(20,$a);
       /* $obj=new \stdClass();
        $obj->name='wfsadf';
        $obj->sex='nana';
        $b=ArrayHelper::toArray($obj);
        echo var_dump($b);exit;*/

        //输入验证-----临时验证
     /*   $email='jasdf@163.com';
        $validator=new \yii\validators\EmailValidator();
        $bool=$validator->validate($email,$error);
        if($bool){
            //通过
        }else{
            //不通过
            echo $error;
        }*/

         //对一系列值执行多项验证
      /*  $arr1=['name'=>'zhong','email'=>'jiji@163.com'];

       $dynamicModel= DynamicModel::validateData($arr1,[
            ['name','required','message'=>'不能为空'],
            ['email','email','skipOnEmpty'=>false]
        ]);
       if( $dynamicModel->hasErrors()){
            var_dump($dynamicModel->errors);exit;
       }else{
            exit('asdf');
       }*/

        //自定义的验证输入值
         /*   $validate = new \frontend\validators\CountryValidator();
           $bool= $validate->validate('C',$error);

            var_dump($error);exit;*/

      $formatter= Yii::$app->formatter;

      // echo  $formatter->asDate('2017-9-8','php:Y-n-j');

      /*  echo $formatter->asPercent('0.12354',2);
        echo $formatter->asBoolean(null);
        echo $formatter->asDate(null);
        echo $formatter->format('0.123',['percent',2]);
        echo $formatter->format('2017-8-9',['date','php:Y-m-d']);
        echo $formatter->format('2017-8-9',function($value,$formatter){
            return strtotime($value);
        });*/

       /* echo  $formatter->asDate('2017-9-8','long');
        echo $formatter->asDate('now','yyyy-MM-dd');
        echo $formatter->asTime('14:15:34');
        echo $formatter->asDatetime('2017-9-8 14:15:34');
        echo $formatter->asTimestamp('2017-9-8 00:00:01');
        echo $formatter->asRelativeTime('2017-9-8 00:00:01');
        echo $formatter->asDuration(121);*/

       /* echo $formatter->asInteger(12.65);
        echo $formatter->asDecimal('1356555.4546654555',3);
        echo $formatter->asScientific('155654645655665.2');
       // echo $formatter->asCurrency('15232.12');
        //echo $formatter->asSize(1024*1024);
        echo $formatter->asShortSize(1024*1024);
        echo $formatter->asRaw(null);
        echo $formatter->asNText('<a>zhon \n gg</a>');
        echo $formatter->asParagraphs('asdf');
        echo $formatter->asHtml('<a>http://www.baiud.com</a><script>aaaaa</script>');*/

       // $formatter->booleanFormat=['N','Y'];
        /*   Yii::$app->mailer->compose('home-link')->setFrom('jiji_12342006@163.com')
                ->setSubject('login success')->attach(Yii::getAlias('@runtime/image/a.jpg'))
                ->setTo('www_5izan@163.com')->send();*/
       //echo  Yii::getAlias('@runtime');
       // $fileDependence=new \yii\caching\FileDependency(['fileName'=>'@runtime']);
        //$phpExpressDependence= new \yii\caching\ExpressionDependency(['expression'=>'date("Y-m-d H:i")']);
       // $cache=Yii::$app->cache;
       // $cache->set('person:1:age',23,0,$phpExpressDependence);
       // $cache->add('person:1:age','25');
        // var_dump($cache->get('person:1:age'));
      // $cache->delete('person:1:age');
        //var_dump($cache->exists('person:1:age'));
       // $cache->flush();

       //查询缓存
        /*$count= Yii::$app->db->cache(function($db){
           return  $db->createCommand("SELECT count(*) FROM country")->queryScalar();
        },30);*/

     //  print_r(FileHelper::getMimeType(Yii::getAlias('@runtime/image/a.jpg'))) ;

        //实例级别调用
       /* $fooMessage=new FooEvent();
        $foo=new Foo();
        $foo->on(Foo::EVENT_HELLO,function($event){
           var_dump($event->sender);
        });
        $foo->trigger(Foo::EVENT_HELLO,$fooMessage);
       $foo->off(Foo::EVENT_HELLO); //移除所有事件
       */

        //类级别调用
      /*  Event::on(Foo::className(),Foo::EVENT_HELLO,[Foo::className(),'say'],[1,2,3]);
        Event::trigger(Foo::className(),Foo::EVENT_HELLO);*/

        //全局事件
    /*    Yii::$app->on('bar', function ($event) {
            echo get_class($event->sender);  // 显示 "app\components\Foo"
        });
        Yii::$app->trigger('bar', new Event(['sender' => new Foo()]));*/

       // 当你发布一个 Yii 组件封装一些非 Yii 第三方库时,可采用服务定位器
        //采用服务定位器注册组件方式1
       // $serverContioner=new ServiceLocator();
       /* $serverContioner->set('hello',function(){
            return new \frontend\librarys\Hello();
        });*/
        /*$serverContioner->set('hello',[
            'class'=>'frontend\librarys\Hello',
            'message'=>'ok message'
        ]);*/
      //  var_dump($serverContioner->get('hello')->say());

        //采用服务定位器注册组件方式2,由于 Yii::$app本事也是服务定位器
        /*Yii::$app->set('hello',[
            'class'=>'frontend\librarys\Hello',
            'message'=>'ok message'
        ]);
        //检测组件是否存在
        Yii::$app->has('hello');
        var_dump(Yii::$app->get('hello')->say());

        */

      //  echo StringHelper::byteLength('a中');
        //echo StringHelper::basename('/root/a/asdf.txt/b');
        //echo StringHelper::dirname('/root/a/asdf.txt/b');
       // echo StringHelper::truncate('ab中def',3);
      //  echo StringHelper::startsWith('ab中def','ab');
      //  var_dump( StringHelper::explode('ab中def','ab',true,true));
       // echo StringHelper::countWords('zhong guo  中');
      //  echo StringHelper::normalizeNumber('1234567,89');
      //  echo StringHelper::base64UrlEncode('ok'.time());

       // echo FileHelper::createDirectory(Yii::getAlias('@runtime').DIRECTORY_SEPARATOR.'dir1');
      // $data= Yii::$app->getSecurity()->encryptByPassword('abc','cccc');
       // echo Yii::$app->getSecurity()->decryptByPassword($data,'ccccc');
    exit;
        return $this->render('index');

    }


}
