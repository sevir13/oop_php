<?php

class SumHelper
{
    public function getSum2($num)
    {
        return $this->getSum($num, 2);
    }

    public function getSum3($num)
    {
        return $this->getSum($num, 3);
    }

    public function getSum($num, $power)
    {
        $output = 0;
        if(is_array($num)) {
            foreach($num as $value) {
                $output += pow($value, $power);
            }
        }
        return $output;
    }
}