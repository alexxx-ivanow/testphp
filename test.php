<?php
namespace test;

//use \alex\Alexey as uAlex;
//include 'index.php';

class Alexey {
    static $name = "Alexey_test";
    static function my_print () {
        echo self::$name." - имя в пространстве имен ".__NAMESPACE__;
    }
}

