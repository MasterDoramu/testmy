<?php
error_reporting(E_ALL);
ini_set("display_errors", "on");

class A 
{
    private static $a;
    
    public static function ss($a)
    {
        self::$a = $a;
    }
    
    public static function getss()
    {
       return self::$a;
    }
}
$a = new A;
A::ss(3);
echo '<pre>';
var_dump($a->getss());
echo '</pre>';

class B  extends A
{

}
$b = new B;
echo '<pre>';
print_r($b->getss());
echo '</pre>';