<?php

class Student extends User
{
    private $course;

    public function __construct($surname, $name, $patronymic, $birthday, $course) 
    {
        parent::__construct($surname, $name, $patronymic, $birthday);
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function setName($name)
    {
        if(mb_strlen($name) < 10) parent::setName($name);
    }

    public function addOneYear()
    {
        $this->age++;
    }

    public function transferToNextCourse() 
    {
        if($this->isCorrectCourse()) {
            $this->course++;
            return 'Студент переведен на ' . $this->course . ' курс!';
        } else {
            return 'Студент закончил вышее учебное заведение!';
        }
    }

    private function isCorrectCourse() 
    {
        if($this->course > 0 && $this->course < 5) {
            return true;
        } else {
            return false;
        } 
    }
}