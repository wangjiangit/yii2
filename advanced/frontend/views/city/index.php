<?php
use frontend\widgets\ListWidget;
use frontend\widgets\HelloWidget;
use yii\base\View;
use yii\helpers\Url;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title='城市';
$this->params['breadcrumbs'][]='城市';
$this->registerMetaTag(['name' => 'keywords', 'content' => '这是一个城市列表1'],'keyword1');
$this->registerMetaTag(['name' => 'keywords', 'content' => '这是一个城市列表2'],'keyword2');
$this->on(View::EVENT_AFTER_RENDER,function($event){
    echo date('当前日期Y-m-d');
});

?>

<h1>/city/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

<?=  ListWidget::widget(['lists'=>['中国馆','美国馆']])?>

<?=  $this->render('part1')?>

<?= \Yii::$app->view->renderFile('@frontend/views/city/part1.php')?>

<?php HelloWidget::begin() //在这之后调用init?>
       hello widgets
<?php HelloWidget::end() ; //此时调用run?>

<?= Url::to(['country/index','src'=>'web_1'],'http')?>
<?= Url::home() ?>
<?= Url::canonical()?>


<!-- HTML辅助类使用BEGIN -->
<?= Html::tag('p','中过',['class'=>'red ','style'=>['background-color'=>'red','color'=>'blue']])?>
<?= Html::tag('p','中国',['data'=>['name'=>'wj','age'=>2]])?>
<?= Html::tag('p','安庆',['data'=>['option'=>['web1'=>'web1_value','web2'=>'web2_value'],'scene'=>'web']])?>
<?= Html::tag('p','安庆',['title'=>['option'=>'option1','scene'=>'web']])?>
<?=  ?>
<!-- HTML辅助类使用END-->


