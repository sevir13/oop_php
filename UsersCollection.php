<?php

class UsersCollection
{
    private $employees = [];
    private $students = [];

    public function __construct()
    {
        
    }

    public function add($newUser)
    {
        if($newUser instanceof Employee) $this->employees[] = $newUser;
        if($newUser instanceof Student) $this->students[] = $newUser;
    }

    public function getEmployees()
    {
        return $this->employees;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function getTotalSalary()
    {
        $output = 0;
        foreach($this->employees as $value) {
            $output += $value->getSalary();
        }
        return $output;
    }

    public function getTotalScholarship()
    {
        $output = 0;
        foreach($this->students as $value) {
            $output += $value->getScholarship();
        }
        return $output;
    }

    public function getTotalPayment()
    {
        return $this->getTotalSalary() + $this->getTotalScholarship();
    }
}