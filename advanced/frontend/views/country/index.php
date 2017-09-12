<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\grid\GridView;

/**
 * @var $this \yii\web\View
 */
?>
    <h1>Countries</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->name} ({$country->code})") ?>:
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>


<?php /* echo GridView::widget([
    'dataProvider'=>$provider
]) ;*/?>

<?php

 $this->registerJsFile('js/js1.js',['position'=>$this::POS_HEAD],'KEY1');
$this->registerJs('var a =3;',$this::POS_END);
//$this->registerJsFile('http://example.com/js/main.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

?>