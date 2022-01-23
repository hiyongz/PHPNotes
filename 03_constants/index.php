<?php
// define定义常量
define("FOO",     "something");

print_r(FOO);
echo "<br/>";

// 使用关键字 const 定义常量
// 简单的标量值
const CONSTANT = 'Hello World';

echo CONSTANT;
echo "<br/>";

// 标量表达式
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;
echo "<br/>";

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // 将输出 "cat"
echo "<br/>";

// 常量数组
define('ANIMALS2', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS2[1]; // 将输出 "cat"
echo "<br/>";


// constant() 获取常量的值
define("MAXSIZE", 100);

echo MAXSIZE;
echo constant("MAXSIZE"); // 和上行一样
echo "<br/>";


interface bar {
    const test = 'foobar!';
}

class foo {
    const test = 'foobar!';
}

$const = 'test';

var_dump(constant('bar::'. $const)); // string(7) "foobar!"
var_dump(constant('foo::'. $const)); // string(7) "foobar!"

print_r(get_defined_constants()); // 返回所有常量的关联数组，键是常量名，值是常量值
?>
