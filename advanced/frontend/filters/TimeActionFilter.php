<?php
namespace  frontend\filters;
use Yii;
use yii\base\ActionFilter;

class TimeActionFilter extends ActionFilter{

    private $_startTime;

    public function beforeAction($action)
    {
        $this->_startTime = microtime(true);

        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {

        $time = microtime(true) - $this->_startTime;
        Yii::trace("Controller '{$action->controller->id}' Action '{$action->uniqueId}' spent $time second.");
        return parent::afterAction($action, $result);
    }


}