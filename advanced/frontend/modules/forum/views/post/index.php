<?php
use yii\helpers\Url;
?>

Hello , Forum Module !

<a  href="<?= Url::home()?>">首页</a> |<a  href="<?= Url::current()?>">当前页</a> |  <a  href="<?= Url::to('country/index')?>">国际列表页| <a  href="<?= Url::to(['default/index'])?>">该模块的默认页
