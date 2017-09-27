<?php
/**
 * @var  $this yii\web\View
 */
?>

<div style="background-color:#ccc">
    <?php if ($this->beginCache('fragment1', ['duration' => 20])) { ?>
        hello world
        <?php $this->endCache();
    } ?>
</div>


<div style="background-color:#777">
    <?php if ($this->beginCache('fragment2', ['duration' => 70, 'dependency'=>[
        'class'=>'yii\caching\DbDependency',
        'sql'=>'SELECT COUNT(*) FROM country'
    ]])) { ?>
        这内容s
        <?php $this->endCache();
    } ?>
</div>


<div style="background-color:#777">
    <?php if ($this->beginCache('fragment3', ['duration' => 70])) { ?>

        数量是<?php echo $this->renderDynamic('return Yii::$app->db->createCommand("SELECT COUNT(*) FROM country")->queryScalar();');?>
        <?php $this->endCache();
    } ?>
</div>
