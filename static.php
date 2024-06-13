<?php

class abc {
    public static $objectCount = 0;
    public static function getCount()
    {
        return self::$objectCount;
    }

    public function  __construct()
    {
        self::$objectCount++;
    }
}

$a = new abc();
$b = new abc();
$b = new abc();
echo abc::getCount();

/*class xyz extends abc {
    public static function getCount()
    {
        parent::getCount();
    }
}*/