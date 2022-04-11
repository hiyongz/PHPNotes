<?php
class SimpleClass
{
    // 声明属性
    public $var = 'property';

    // 声明方法
    public function var() {
        echo $this->var;
        return 'method';
    }    
}

$instance = new SimpleClass();

// 也可以这样做：
$className = 'SimpleClass';
$instance = new $className(); // new SimpleClass()

echo $instance->var, PHP_EOL, $instance->var(), PHP_EOL; //访问 属性和方法


// 创建新对象的几种方法
class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
?>