<?php

class DB {

    protected static $table = 'baseTable';
    public function select()
    {
        echo "SELECT * FROM " .static::$table;
    }

    public function insert()
    {
        echo "INSERT INTO". static::$table;
    }
}

class abc extends DB {
    protected static $table = 'abc';
}

class userAccounts extends DB {
    protected static $table = 'user_accounts';
}

$sccounts = new userAccounts();
$abc = new abc ();

$abc->select();

$accounts->select();