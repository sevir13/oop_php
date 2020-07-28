<?php

class User
{
    public $surname;
    public $name;
    public $patronymic;
    public $age;

    // public function __construct($surname, $name, $patronymic, $age)
    // {
    //     $this->surname = $surname;
    //     $this->name = $name;
    //     $this->patronymic = $patronymic;
    //     $this->age = $age;
    // }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPatronymic()
    {
        return $this->patronymic;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
        return $this;
    }

    public function setAge($age) {
        if($this->isCorrectAge($age)) {
            $this->age = $age;
        }
    }

    public function addAge($year) {
        $newAge = $this->age + $year;
        if($this->isCorrectAge($newAge)) {
            $this->age = $newAge;
        }
    }

    public function subAge($year) {
        $newAge = $this->age - $year;
        if($this->isCorrectAge($newAge)) {
            $this->age = $newAge;
        }
    }

    private function isCorrectAge($age) {
        if($age >= 18) {
            return true;
        } else {
            return false;
        }
    }

    public function getFullName()
    {
        return substr($this->surname, 0, 2) . substr($this->name, 0, 2) . substr($this->patronymic, 0, 2);
    }
}