<?php

class Arr
{
    private $numbers = [];

    public function __construct($numbers)
    {
        $this->numbers = $numbers;      
    }

    public function add($number)
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function append($input)
    {
        if(is_array($input)) {
            foreach ($input as $value) {
                array_push($this->numbers, $value);
            }
        }
        return $this;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }

    public function getAvg()
    {
        $output = array_sum($this->numbers) / count($this->numbers);
        return $output;
    }
}