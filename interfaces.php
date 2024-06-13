<?php 

abstract class def {

    public $data;

    private function test1() {
        echo 'test1';
    }
}

interface a {
    public function abc();
    private function test2();
}

interface b {
    public function xyz();
}  

class c implements a,b {
    public function abc ()
    {
        echo 'abc function';
    }
    public function xyz ()
    {
        echo 'xyz function';
    }
}