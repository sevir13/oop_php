<?php

class Programmer extends Employee
{
    public $langs = [];

    public function getLangs()
    {
        return implode(' ', $this->langs);
    }

    public function setLangs($langs)
    {
        if(is_array($langs)) {
            $this->langs = $langs;
        }
    }
}