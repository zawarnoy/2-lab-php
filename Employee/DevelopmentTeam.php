<?php

class DevelopmentTeam
{
    private $developers = [];

    public function addNewWorker(Worker $newDeveloper)
    {
        array_push($this->developers, $newDeveloper);
    }

    public function deleteWorker(Worker $removableDeveloper)
    {
        unset($this->developers[(array_search($removableDeveloper, $this->developers))]);
    }

    public function getPayrollCalculation()
    {
        $teamCosts = 0;
        foreach ($this->developers as $developer) {
            $teamCosts += $developer->getSalary();
        }
        return $teamCosts;
    }

}