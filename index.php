<?php
/*namespace alex;*/

use \test\Alexey as usAlex;
include 'test.php';

$count = 0;

$fall = function($name) use (&$count) {
    $count++;
    return "$name $count<br>";
};

class Alexey {
    static $name = "Alexey";
    static function my_print () {
        echo self::$name." - имя в пространстве имен ".__NAMESPACE__;
    }

    static function getCount(Closure $fall) {
        return $fall('Alexey');
    }
}
$obj = new Alexey;
echo $obj::getCount($fall);
echo $obj::getCount($fall);
echo $obj::getCount($fall);

$obj1 = new usAlex();
$obj1::my_print();
