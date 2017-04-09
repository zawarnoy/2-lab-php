<?php


class DynamicSalary implements SalaryCalculating
{

    private $hours;
    private $salaryPerHour;

    public function __construct(int $salaryPerHour, $hours)
    {
        $this->salaryPerHour = $salaryPerHour;
        $this->hours = $hours;
    }


    public function getSalary() : int
    {
        return $this->salaryPerHour * $this->hours;
    }
}