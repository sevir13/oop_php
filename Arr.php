<?php

require_once 'SumHelper.php';

class Arr
{
    private $numbers = [];
    private $sumHelper;
    private $avgHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper;
        $this->avgHelper = new AvgHelper;     
    }

    public function set($numbers)
    {
        $this->numbers = $numbers;
    }

    public function add($number)
    {
        $this->numbers[] = $number;
    }

    public function getSum23()
    {
        $output = $this->sumHelper->getSum2($this->numbers) + $this->sumHelper->getSum3($this->numbers);
        return $output;
    }

    public function getAvgMeanSum()
    {
        $output = $this->avgHelper->getAvg($this->numbers) + $this->avgHelper->getMeanSquare($this->numbers);
        return $output;
    }

    // public function append($input)
    // {
    //     if(is_array($input)) {
    //         foreach ($input as $value) {
    //             array_push($this->numbers, $value);
    //         }
    //     }
    //     return $this;
    // }

    // public function getSum()
    // {
    //     return array_sum($this->numbers);
    // }

    // public function getAvg()
    // {
    //     $output = array_sum($this->numbers) / count($this->numbers);
    //     return $output;
    // }
}