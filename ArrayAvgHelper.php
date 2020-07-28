<?php

class ArrayAvgHelper
{
    /*
        Находит сумму первых
        степеней элементов массива:
    */
    public function getAvg1($arr)
    {
        return $this->getSum($arr, 1);
    }
    
    /*
        Находит сумму вторых степеней
        элементов массива и извлекает
        из нее квадратный корень:
    */
    public function getAvg2($arr)
    {
        $sum = $this->getSum($arr, 2);
        $output = $this->calcSqrt($sum, 2);
        return $output;
    }
    
    /*
        Находит сумму третьих степеней
        элементов массива и извлекает
        из нее кубический корень:
    */
    public function getAvg3($arr)
    {
        $sum = $this->getSum($arr, 3);
        $output = $this->calcSqrt($sum, 3);
        return $output;
    }
    
    /*
        Находит сумму четвертых степеней
        элементов массива и извлекает
        из нее корень четвертой степени:
    */
    public function getAvg4($arr)
    {
        $sum = $this->getSum($arr, 4);
        $output = $this->calcSqrt($sum, 4);
        return $output;
    }
    
    /*
        Вспомогательный метод, который параметром
        принимает массив и степень и возвращает
        сумму степеней элементов массива:
    */
    private function getSum($arr, $power)
    {
        $output = 0;
        foreach ($arr as $value) {
            $output += pow($value, $power);
        }
        return $output;
    }
    
    /*
        Вспомогательный метод, который параметром
        принимает целое число и степень и возвращает
        корень заданной степени из числа:
    */
    private function calcSqrt($num, $power)
    {
        return pow($num, 1 / $power);
    }
}