<?php

require_once 'User.php';
require_once 'Employee.php';
require_once 'Student.php';
require_once 'Rectangle.php';
require_once 'City.php';
require_once 'Arr.php';
require_once 'ArraySumHelper.php';
require_once 'ArrayAvgHelper.php';

// $employee = new Employee;
// $employee->salary = 10000;

// $employee1 = new Employee;
// $employee1->salary = 15000;

// $salarySum = $employee->getSalary() + $employee1->getSalary();
// echo 'Итого: ' . $employee1->doubleSalary() . '<br>';

// $user = new User;
// $user->name = 'Коля';
// $user->age = 25;
// echo $user->age . '<br>';
// $user->setAge(18);
// $user->subAge(5);
// echo $user->age;
// echo '<br>';

// $rectangle = new Rectangle;
// $rectangle->width = 15;
// $rectangle->height = 20;
// echo $rectangle->getSquare();
// echo '<br>';
// echo $rectangle->getPerimeter();

// $student = new Student;
// $student->name = 'Alex';
// $student->course = 1;
// echo $student->transferToNextCourse();
// echo '<br>';
// $student->course = 5;
// echo $student->transferToNextCourse();

// $employee = new Employee('Василий', 'Иванов', 'Петрович', 25, 1000);
// $employee1 = new Employee('Петр', 'Сидоров', 'Иванович', 30, 2000);
// echo $employee->getSalary() + $employee1->getSalary();

// $cities = [
//     new City('Москва', '11,92 млн. человек'),
//     new City('Санкт-Петербург', '4,991 млн. человек'),
//     new City('Нижний Новгород', '1,257 млн. человек'),
//     new City('Казань', '1,169 млн. человек'),
//     new City('Чебоксары', '462 669 человек'),
//     new City('Шумерля', '33952 человек')
// ];

// foreach($cities as $city) {
//     echo $city->getName() . ': ' . $city->getPopulation() . '<br>';
// }

// $student = new Student('Иван Иванов');
// echo $student->transferToNextCourse();
// echo '<br>';
// echo $student->transferToNextCourse();
// echo '<br>';
// echo $student->transferToNextCourse();
// echo '<br>';
// echo $student->transferToNextCourse();
// echo '<br>';
// echo $student->transferToNextCourse();
// echo '<br>';
// echo $student->transferToNextCourse();
// echo '<br>';
// echo $student->getCourse();

// $arr = new Arr;
// $arr->add(array(5,3,4));
// echo $arr->getAvg();

// $city = new City('Чебоксары', 1469, 462669);
// $props = array(
//     'name' => "Название города",
//     'foundation' => "Год основания",
//     'population' => "Численность населения"
// );

// foreach ($props as $key => $value) {
//     echo $value . ': ' . $city->$key . '<br>';
// }

// $user = new User('Иванов', 'Иван', 'Иванович', 25);
// $props = array('surname', 'name', 'patronymic', 'age');
// $methods = ['method1' => 'getName', 'method2' => 'getAge'];
// echo $user->{$methods['method1']}();
// echo '<br>';
// echo $user->{$methods['method2']}();

//echo (new Arr([]))->add(5)->add(8)->append([3,5,6])->add(7)->getSum();

//echo (new User)->setName('Николай')->setPatronymic('Иванович')
//		->setSurname('Петров')->getFullName(); // выведет 'ПНИ'

// $obj = new ArrayAvgHelper;
// echo $obj->getAvg4([5, 6, 5]);

// $employee = new Employee;
// $employee->setName('Иван');
// $employee->setAge(25);
// $employee->setSalary(25000);
// echo $employee->getName();
// echo '<br>';
// echo $employee->getAge();
// echo '<br>';
// echo $employee->getSalary();