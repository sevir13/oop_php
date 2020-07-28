<?php

class AvgHelper
{
    public function getAvg($arr)
    {
        if(is_array($arr)) {
            return array_sum($arr) / count($arr);
        }
    }

    public function getMeanSquare($arr)
    {
        foreach($arr as $key => $value) {
            $arr[$key] = pow($value, 2);
        }
        return pow(array_sum($arr) / count($arr), 1/2);
    }
}