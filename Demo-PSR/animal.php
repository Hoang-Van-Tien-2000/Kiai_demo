<?php

namespace App;

interface Animal
{
    const RUN = true;
    public function Move();
}

class Person
{
    protected $name;
    protected $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
   
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAge()
    {
        return $this->age;
    }
   
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function showInfo()
    {
        echo 'Name' . $this->name;
        echo 'Age' . $this->age;
    }
    
};

class Employee extends Person implements Animal 
{
    private $salary;  

    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
 
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function showInfo()
    {
        echo 'Name' . $this->name;
        echo 'Age' . $this->age;
        echo 'Salary' . $this->salary;
        parent::showInfo();
    }
    public function Move()
    {
        echo self::RUN;
    }
}

$employee  = new Employee('Tien',11, '20k');
echo $employee->showInfo();
