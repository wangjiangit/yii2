<?php
namespace frontend\events;

use yii\base\Component;

class Foo extends Component
{

    const EVENT_HELLO = 'hello';

    public static function say($event)
    {
        echo $event->name.'---'.$event->data[0];
    }

}
