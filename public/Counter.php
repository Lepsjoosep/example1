<?php

class Counter
{
    public static $count = 0;
    public $instanceId;
    
    public function __construct()
    {
        self::$count++;
        $this->instanceId = self::$count;
    }
    
    public static function getCount()
    {
        return self::$count;
    }
}

$obj1 = new Counter();
$obj2 = new Counter();
$obj3 = new Counter();

echo Counter::$count;
echo Counter::getCount(); 
echo $obj1->instanceId; 
echo $obj2->instanceId; 