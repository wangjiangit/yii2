<?php
use frontend\widgets\ListWidget;
use frontend\widgets\HelloWidget;
use yii\base\View;
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


