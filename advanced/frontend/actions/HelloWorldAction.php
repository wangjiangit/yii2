<?php

namespace frontend\actions;

use yii\base\Action;

class HelloWorldAction extends Action
{

    public function run(Array $ids=[])
    {
        //数组采用URL方式http://www.yii2.com/index.php?r=city/helloworld&ids[]=123&ids[]=124
        return 'this is hello world for a  independent action,this params ids is'.implode(',',$ids);
    }

}
