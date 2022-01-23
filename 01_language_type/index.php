<?php
$a_bool = TRUE;   // 布尔值 boolean
$a_str  = "foo";  // 字符串 string
$a_str2 = 'foo';  // 字符串 string
$an_int = 12;     // 整型 integer

echo gettype($a_bool); // 输出:  boolean
echo "<br/>";

echo gettype($a_str);  // 输出:  string
echo "<br/>";

echo '<pre>';
var_dump($a_bool, $a_str); //查看某个表达式的值和类型
echo '</pre>';

// 如果是整型，就加上 4
if (is_int($an_int)) {
    $an_int += 4;
}

echo $an_int;
echo "<br/>";
// 如果 $bool 是字符串，就打印出来
// (啥也没打印出来)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}

// 类型强制转换
// 1、方法1
$bar = (boolean) $a_str;   // $bar is a boolean
echo "类型强制转换<br/>";
echo '<pre>';
echo "1、方法1<br/>";

var_dump($bar); 
echo "<br/>";

$foo = 10;            // $foo 是一个整数
$str = "$foo";        // $str 是一个字符串
$fst = (string) $foo; // $fst 也是一个字符串

// 输出 "they are the same"
if ($fst === $str) {
    echo "they are the same";
    echo "<br/>";
}

// 方法2: settype方法
echo "方法2: settype方法<br/>";

$foo = "5bar"; // string
$bar = true;   // boolean
settype($foo, "integer"); // $foo 现在是 5   (integer)
settype($bar, "string");  // $bar 现在是 "1" (string)
var_dump($foo); 
echo "<br/>";
var_dump($bar); 
echo "<br/>";
echo '</pre>';

?>