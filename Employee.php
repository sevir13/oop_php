<?php

class Employee extends User
{
    private $salary;

    public function __construct($surname, $name, $patronymic, $birthday, $salary)
    {
        parent::__construct($surname, $name, $patronymic, $birthday);
        $this->salary = $salary;
    }

    function getSalary()
    {
        return $this->salary . '$';
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}