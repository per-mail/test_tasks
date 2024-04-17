<?php

// Класс пользователь
class User {
    protected $name;
    protected $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

// Класс пользователь - сотрудник компании
class Employee extends User {
    private $salary;

    public function __construct($name, $email, $salary) {
        parent::__construct($name, $email);
        $this->salary = $salary;
    }  

// Расчет зарплаты сотрудника   
    public function calculateSalary() {             
        return $this->salary;
    }

// Расчет отпускных выплат  сотрудника 
    public function calculateVacationPay() {            
        return; 
    }
}


