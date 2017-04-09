<?php


abstract class Worker
{
    private $salary;
    private $name;
    private $surname;
    private $patronymic;

    public function __construct(
        string $surname,
        string $name,
        string $patronymic,
        SalaryCalculating $salaryCalculating
    ) {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
        $this->salary = $salaryCalculating->getSalary();
    }

    public function getSalary()
    {
        return $this->salary;
    }


    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }


}
