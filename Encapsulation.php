<?php

class Laptop {

    protected $laptopmodel;
    private $serialNO;
    
    public function volumeUP()
    {
        $this->volume++;
    }

    public function volumeDown ()
    {
        $this->volume--;
    }
    protected function getmodel()
    {
        return $this->laptopmodel;
    }

    public function __construct($l, $s)
    {
        $this->laptopmodel = $l;
        $this->serialNO = $s;
    }
}

    class laptopmodel extends newlaptopmodels {
        protected function getmodel()
        {
            return $this->laptopmodel;
        }
    }

    $newlaptopmodels = new laptopmodel('Lenovo ideapad Gaming 3', 2);
    echo $newlaptopmodels->getmodel();