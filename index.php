<?php

require_once 'User.php';
require_once 'Employee.php';
require_once 'EmployeesCollection.php';
require_once 'Student.php';
require_once 'Programmer.php';
require_once 'Driver.php';
require_once 'Rectangle.php';
require_once 'City.php';
require_once 'AvgHelper.php';
require_once 'Arr.php';
require_once 'SumHelper.php';
require_once 'ArrayAvgHelper.php';
require_once 'Product.php';
require_once 'Cart.php';

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

// $student = new Student;
// $student->setName('Петр');
// $student->setAge(19);
// $student->setCourse(2);
// echo $student->getName();
// echo '<br>';
// echo $student->getAge();
// echo '<br>';
// echo $student->getCourse();

// $programmer = new Programmer;
// $programmer->setName('Михаил');
// $programmer->setLangs(['PHP', 'JavaScript']);
// echo $programmer->getName() . '<br>';
// echo $programmer->getLangs();

// $driver = new Driver;
// $driver->setDrivingExperience(25);
// $driver->setDrivingCategory('B');
// echo 'Водительский стаж: ' . $driver->getDrivingExperience() . '<br>';
// echo 'Категория вождения: ' . $driver->getDrivingCategory() . '<br>';

// $student = new Student;
// $student->setName('Георгий');
// $student->setCourse(2);
// $student->setAge(20);
// echo 'Имя студента: ' . $student->getName() . '<br>';
// echo 'Возраст: ' . $student->getAge() . '<br>';
// echo 'Курс: ' . $student->getCourse() . '<br>';
// $student->addOneYear();
// echo 'Возраст: ' . $student->getAge() . '<br>';

// $student = new Student;
// $student->setName('Иван');
// echo $student->getName();

// $student = new Student('Иванов', 'Иван', 'Иванович', '1983-08-13', 1);
// echo 'Фамилия студента: ' . $student->getSurname() . '<br>';
// echo 'Имя студента: ' . $student->getName() . '<br>';
// echo 'Отчество студента: ' . $student->getPatronymic() . '<br>';
// echo 'Возраст студента: ' . $student->getAge() . '<br>';
// echo 'Курс: ' . $student->getCourse();

// $employee = new Employee('Иванов', 'Иван', 'Иванович', '1978-03-15', 25000);
// echo 'Фамилия работника: ' . $employee->getSurname();
// echo '<br>';
// echo 'Имя работника: ' . $employee->getName();
// echo '<br>';
// echo 'Отчество работника: ' . $employee->getPatronymic();
// echo '<br>';
// echo 'Возраст работника: ' . $employee->getAge();
// echo '<br>';
// echo 'Заработная плата работника: ' . $employee->getSalary();

// $product1 = new Product('Батон', 20);
// $product2 = $product1;
// echo $product2->getName() . '<br>';
// $product2->setName('Ржаной');
// echo $product1->getName() . '<br>';
// $product2->setPrice(25);
// echo 'Стоимость товара: ' . $product1->getPrice() . ' руб.';

// $arr = new AvgHelper;
// echo $arr->getAvg([3,6,9]);
// echo '<br>';
// echo $arr->getMeanSquare([3,6,9]);
// echo '<br>';
// $arr1 = new Arr;
// $arr1->set([3,6,9]);
// echo $arr1->getAvgMeanSum();

// $cart = new Cart;
// $cart->add(new Product('Батон', 25, 2));
// $cart->add(new Product('Ржаной', 27, 3));
// $cart->add(new Product('Серый', 30, 5));
// foreach($cart->getCart() as $key => $value) {
//     echo ++$key . '. ' . $value['name'] . ' - ' . $value['price'] . ' руб. - ' . $value['quantity'] . ' шт.<br>';
// }
// echo $cart->getTotalCost() . '<br>';
// echo $cart->getTotalQuantity() . '<br>';
// echo $cart->getAvgPrice() . '<br>';
// $cart->remove('Ржаной');
// foreach($cart->getCart() as $key => $value) {
//     echo ++$key . '. ' . $value['name'] . ' - ' . $value['price'] . ' руб. - ' . $value['quantity'] . ' шт.<br>';
// }
// echo $cart->getTotalCost() . '<br>';
// echo $cart->getTotalQuantity() . '<br>';
// echo $cart->getAvgPrice() . '<br>';

// function compare($object1, $object2)
// {
//     if($object1 === $object2) {
//         return 1;
//     } elseif($object1 == $object2) {
//         return 0;
//     } else {
//         return -1;
//     }
// }

// $user1 = new User('Иванов', 'Иван', 'Иванович', '1982-01-05');
// $user2 = new User('Иванов', 'Иван', 'Иванович', '1982-05-05');
// echo compare($user1, $user2);

// $employeeCollection = new EmployeesCollection;
// $employeeCollection->add(new Employee('Иванов', 'Иван', 'Иванович', '1975-05-04', 25000));
// $employeeCollection->add(new Employee('Петров', 'Иван', 'Петрович', '1975-05-04', 30000));
// $employeeCollection->add(new Employee('Иванов', 'Иван', 'Иванович', '1975-05-04', 25000));
// echo '<pre>';
// echo var_dump($employeeCollection->get());