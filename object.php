<?php
class TV {
    public $model = 'OnePlus Y1 Plus OLED';
    public $volume = '5';
    public $model2 = 'LG QOLED With Pre-installed Google OS TV ';
    function volumeUP ()
    {
        $this->volume++;
    }
    function volumeDown ()
    {
        $this->volume--;
    }
}
    $TV_One = New TV;
    $TV_Two = New TV;

    $TV_One->volumeUP();
    $TV_Two->volumeDown();

     
    $TV_One->model2 ;
    echo $TV_Two->model ;
    echo '<br>';
    echo $TV_One->model2 ;

    
