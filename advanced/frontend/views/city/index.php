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
<?= Yii::getAlias('@webroot')?>
<?php var_dump(Url::isRelative('/post/index'))  ?>


<!-- HTML辅助类使用BEGIN -->
<?= Html::tag('p','中过',['class'=>'red ','style'=>['background-color'=>'red','color'=>'blue']])?>
<?= Html::tag('p','中国',['data'=>['name'=>'wj','age'=>2]])?>
<?= Html::tag('p','安庆',['data'=>['option'=>['web1'=>'web1_value','web2'=>'web2_value'],'scene'=>'web']])?>
<?= Html::tag('p','安庆',['title'=>['option'=>'option1','scene'=>'web']])?>

<?php
$options=['class'=>'btn btn-default','style'=>['width'=>'100px','height'=>'20px']];

/*$type='success';

if($type=='success'){
    Html::removeCssClass($options,'btn-default');
 //   Html::addCssClass($options,['btn-default','btn-lg']);
 //   Html::addCssClass($options,'btn-success btn-lg');
    Html::addCssClass($options,'btn-success');
    Html::removeCssStyle($options,['height']);
    Html::addCssStyle($options,"height: 50px; position: absolute;");
}

echo Html::tag('div','保存',$options);*/

echo Html::encode('<div>"8"代表发财</div>');
?>


<?= Html::beginForm(['post/index','src'=>'web1'])?>
<?=Html::button('按钮1',['class'=>'btn btn-default']) ?>
<?=Html::resetButton('按钮2',['class'=>'btn btn-default'])?>
<?= Html::submitButton('按钮3',['class'=>'btn btn-default'])?>
<?= Html::endForm()?>

<?= Html::input('text','username','zhangsan') ?>
<?= Html::textInput('username1','lisi')?>
<?= Html::radio('habby',true,['value'=>'zuqiu']) ?> 足球
<?= Html::radio('habby',false,['value'=>'taiqiu']) ?>台球
<?= Html::radioList('hobby1',12,[12=>'中国',13=>'美国']) ?>

<?= Html::checkbox('options[]',true,['value'=>'value1']) ?>选项1
<?= Html::checkbox('options[]',false,['value'=>'value1']) ?>选项2
<?= Html::checkboxList('options1[]',[12,13],[12=>'中国',13=>'美国']) ?>

<?= Html::dropDownList('city',13,[12=>'中国',13=>'美国'])?>
<?= Html::listBox('city',1,[12=>'中国',13=>'美国'])?>

<?= Html::label('label标签','female') ?>

<?= Html::style('.danger {color:yellow}  .info {color:#ccc}') ?>
<?= Html::script('console.log("Yii application")') ?>

<?= Html::cssFile('@web/assets/ie5.css',['condition'=>'IE 5']);?>
<?= Html::cssFile('@web/assets/css1.css');?>
<?= Html::jsFile('@web/assets/js1.js') ?>

<?= Html::a('国外',['post/index','id'=>3]);?>
<?= Html::mailto('我的邮件','jiji_12342006@163.com') ?>
<?= Html::img('@web/images/a.jpg')?>
<?= Html::ul(['asdf'=>'one',2=>'two'])?>



<!-- HTML辅助类使用END-->


