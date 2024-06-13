<?php
class TV {
    public $model;
    public $volume;
}
    function volumeup ()
    {
        $this->volume++;
    }

    function volumedown ()
    {
        $this->volume--;    
    }

    function __construct($a, $b)
    {
        $this->model='$a';
        $this->volume='$b';
    }

    class plazmaTV extends TV {
        public $model = 'This is New Tecno MegaTV With 8K QOLED Display.';
        function __construct( )
        {
            
        }
    }

    $plazma = new plazmaTV;
    echo $plazma->model;