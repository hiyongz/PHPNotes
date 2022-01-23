<?php 
$name = "zhangsan";
echo $name;
echo "<br/>";

// 引用赋值
$foo = 'Bob';              // 将 'Bob' 赋给 $foo
$bar = &$foo;              // 通过 $bar 引用 $foo
$bar = "My name is $bar";  // 修改 $bar 变量
echo $bar;
echo $foo;                 // $foo 的值也被修改
echo "<br/>";

// 变量范围
// global
$a = 1; /* global scope */

function Test()
{
    global $a;
    echo $a; /* reference to local scope variable */
    echo "<br/>";
}

Test();

// $GLOBALS数组
$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum();
echo $b;
echo "<br/>";

// 静态变量
function test2()
{
    static $a = 0; //变量 $a 仅在第一次调用 test() 函数时被初始化，之后每次调用 test() 函数都会输出 $a 的值并加一。
    echo $a;
    echo "<br/>";
    $a++;
}
test2();
test2();

// 递归
function test3()
{
    static $count = 0;

    $count++;
    echo $count;
    echo "<br/>";
    if ($count < 10) {
        test3();
    }
    // $count--;
}
test3();

// 可变变量
$a = 'hello';
$$a = 'world';
echo "$a ${$a}";
echo "<br/>";
echo "$a $hello";
echo "<br/>";

?>
