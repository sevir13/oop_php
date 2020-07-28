<?php

class Employee extends User
{
    public $salary;

    // public function __construct($name, $surname, $patronymic, $age, $salary)
    // {
    //     $this->name = $name;
    //     $this->surname = $surname;
    //     $this->patronymic = $patronymic;
    //     $this->age = $age;
    //     $this->salary = $salary;
    // }

    function getSalary()
    {
        return $this->salary . '$';
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}