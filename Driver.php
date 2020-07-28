<?php

class Driver extends Employee
{
    public $driving_experience;
    public $driving_category;

    public function getDrivingExperience()
    {
        return $this->driving_experience;
    }

    public function getDrivingCategory()
    {
        return $this->driving_category;
    }

    public function setDrivingExperience($driving_experience)
    {
        $this->driving_experience = $driving_experience;
    }

    public function setDrivingCategory($driving_category)
    {
        return $this->driving_category = $driving_category;
    }
}