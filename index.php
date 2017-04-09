<?php

require 'Salary Strategies/SalaryCalculating.php';
require "Employee/Worker.php";
require "Employee/Designer.php";
require "Employee/SeniorDeveloper.php";
require "Employee/PageMaker.php";
require "Employee/MiddleDeveloper.php";
require "Employee/DevelopmentTeam.php";
require 'Salary Strategies/FixedSalary.php';
require 'Salary Strategies/DynamicSalary.php';



$vlad = new Designer('Demidik', 'Vladislaw', "Anatol'evich", new FixedSalary(3000));
$petr = new SeniorDeveloper('Petrov', 'Petr', 'Petrovich', new DynamicSalary(10, 60));
$ivan = new MiddleDeveloper('Ivanov', 'Ivan', 'Ivanovich', new FixedSalary(1000));
$ivan2 = new MiddleDeveloper('Ivanov', 'Ivan', 'Ivanovich', new FixedSalary(1000));
$hach = new PageMaker('Arsumanov', 'Arsuman', 'Arsumanovich', new DynamicSalary(5, 120));

$teamX = new DevelopmentTeam();

$teamX->addNewWorker($petr);
$teamX->addNewWorker($vlad);
$teamX->addNewWorker($ivan);
$teamX->addNewWorker($ivan2);
$teamX->addNewWorker($hach);
?>

<pre>
<?php


echo $teamX->getPayrollCalculation();

