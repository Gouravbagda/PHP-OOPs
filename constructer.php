<?php
class TV {
    public $model;
    public $volume;
}
    function volumeup()
    {
        $this->volume++;
    }

    function volumedown ()
    {
        $this->volume--;    
    }

    function __construct($m, $v)
    {
        $this->model='$m';
        $this->volume='$v';
    }

    $TV = new TV('samsung 4k Tv', 5);
    
    $TV_one = new TV('Redmi LED Based on Android OS, 3');
    $TV->model='Haier New 8K OLED TV';

    echo $TV->model;