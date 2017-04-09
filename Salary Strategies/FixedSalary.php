<?php



class FixedSalary implements SalaryCalculating
{

    private $salary;

    public function __construct(int $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary() : int
    {
        return $this->salary;
    }
}