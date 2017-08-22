<?php

namespace frontend\helpers;

class BaseOtherHelper
{

    const PRECISION_ONE = 1;
    const PRECISION_TWO = 2;
    const PRECSION_THREE = 3;

    /**
     * 格式化数字
     * @param $var int|float  这是一个整数和浮点数
     * @return integer|float
     */
    public static function formatNumber($var, $precison = 2)
    {
        return number_format($var, $precison);
    }
}
