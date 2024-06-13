<?php

abstract class BaseEmployee {
    
    protected $firstname;
    protected $lastname;
    
    public  function getFullName ()
    {
        return  $this->firstname . " " . $this->lastname;
    }

    public abstract function getMontlySalary();

    public function __construct($f,  $l){
        $this->firstname = $f;
        $this->lastname = $l;
    }
}

class FullTimeEmployee Extends BaseEmployee {
    protected $annualsalary;

    public function hetMonthlySalary()
    {
        return $this->annualsalary /12;
    }
}

class ContractEmployee extends BaseEmployee {
    
    protected $hourlyRate;
    protected $totalhours;
    
    public function getMontlySalary()
    {
        return $this->hourlyRate * $this->totalhours
    }
}

$fulltime = new FullTimeEmployee('fulltime', 'Employee');
$contract = new ConstractEmployee('Contract', 'Employee');

echo $fulltime->getFullName();
echo $contract->getFullName();

echo $fulltime->getMontlySalary();
echo $contract->getMontlySalary();
