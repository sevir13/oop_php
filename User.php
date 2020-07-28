<?php

class User
{
    private $surname;
    private $name;
    private $patronymic;
    private $birthday;
    private $age;

    public function __construct($surname, $name, $patronymic, $birthday)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge($birthday);
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

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

    private function calculateAge($birthday) {
        $date1 = new DateTime($birthday);
        $date2 = new DateTime(date("Y-m-d"));
        $interval = $date1->diff($date2);
        return $interval->y;
    }
    
    public function getAge()
    {
        return $this->age;
    }

    // public function getAge()
    // {
    //     return $this->age;
    // }

    // public function setSurname($surname)
    // {
    //     $this->surname = $surname;
    //     return $this;
    // }

    // public function setName($name)
    // {
    //     if(mb_strlen($name) > 3) $this->name = $name;
    //     return $this;
    // }

    // public function setPatronymic($patronymic)
    // {
    //     $this->patronymic = $patronymic;
    //     return $this;
    // }

    // public function setAge($age) {
    //     if($this->isCorrectAge($age)) {
    //         $this->age = $age;
    //     }
    // }

    // public function addAge($year) {
    //     $newAge = $this->age + $year;
    //     if($this->isCorrectAge($newAge)) {
    //         $this->age = $newAge;
    //     }
    // }

    // public function subAge($year) {
    //     $newAge = $this->age - $year;
    //     if($this->isCorrectAge($newAge)) {
    //         $this->age = $newAge;
    //     }
    // }

    // private function isCorrectAge($age) {
    //     if($age >= 18) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public function getFullName()
    // {
    //     return substr($this->surname, 0, 2) . substr($this->name, 0, 2) . substr($this->patronymic, 0, 2);
    // }
}