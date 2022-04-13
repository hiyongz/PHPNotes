<?php

/* array_filter */
$array1 = [0 => '', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five'];
$array1 = array_filter($array1);
echo "<pre>";
print_r($array1);
echo "</pre>";

/* array_values */
$array1 = array_values($array1); // 重新索引
echo "<pre>";
print_r($array1);
echo "</pre>";


function odd($var)
{
    return $var & 1;
}
function even($var)
{
    return !($var & 1);
}

$array1 = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
$array_even = array_filter($array1, "even");
$array_odd = array_filter($array1, "odd");
echo "<pre>";
print_r($array_even);
echo "</pre>";
echo "<pre>";
print_r($array_odd);
echo "</pre>";


$array2 = [1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five'];
$array_even = array_filter($array2,function($var){ return(!($var & 1));},ARRAY_FILTER_USE_KEY);
$array_odd = array_filter($array2,function($var){ return($var & 1);},ARRAY_FILTER_USE_KEY);
echo "<pre>";
print_r($array_even);
echo "</pre>";
echo "<pre>";
print_r($array_odd);
echo "</pre>";

/* in_array */
$array1 = ['one', 'two', 'three', 'four', 'five'];
if (in_array("one", $array1)) {
    echo "Got one";
}

/* array_pop */
$array1 = ['one', 'two', 'three', 'four', 'five'];
$last = array_pop($array1);
echo "<pre>";
print_r($array1);
echo "</pre>";

/* array_shift */
$array1 = ['one', 'two', 'three', 'four', 'five'];
$first = array_shift($array1);
echo "<pre>";
print_r($array1);
echo "</pre>";

/* array_unshift */
$array1 = ['one', 'two', 'three', 'four', 'five'];
array_unshift($array1, '0', 'zero');
echo "<pre>";
print_r($array1);
echo "</pre>";

/* array_push */
$array1 = ['one', 'two', 'three', 'four', 'five'];
array_push($array1, 'six', 'seven');
$array1[] = 'eight';
echo "<pre>";
print_r($array1);
echo "</pre>";

/* array_merge */
$array1 = ['one', 'two', 'three'];
$array2 = ['four', 'five'];
$array3 = array_merge($array1, $array2);
$array1[] = 'eight';
echo "<pre>";
print_r($array3);
echo "</pre>";

echo "<pre>";
print_r("9999999999999999999999999999999999");
echo "</pre>";

/* end */
$array1 = ['one', 'two', 'three'];
$last = end($array1);
echo "<pre>";
print_r($last);
echo "</pre>";

echo current($array1) . "<br />\n"; // 返回数组中的当前值
reset($array1); // 将数组的内部指针指向第一个单元
echo current($array1) . "<br />\n";
next($array1); // 将数组的内部指针向后移动一位
echo current($array1) . "<br />\n";
prev($array1); // 将数组的内部指针向前移动一位
echo current($array1) . "<br />\n";

/* array_key_last */
$array1 = ['one', 'two', 'three'];
$last = array_key_last($array1);
echo "<pre>";
print_r($last);
echo "</pre>";

/* array_slice */
$array1 = ['one', 'two', 'three', 'four', 'five'];
$output = array_slice($array1, 2);  
print_r($output) ;
echo "<br />\n";

$output = array_slice($array1, -3, 2);  // 返回 "d"
print_r($output) ;
echo "<br />\n";

$output = array_slice($array1, 0, 3); 
print_r($output) ;
echo "<br />\n";

$output = array_slice($array1, 1, -3); 
print_r($output) ;
echo "<br />\n";

$output = array_slice($array1, 1, 3); 
print_r($output) ;
echo "<br />\n";

$output = array_slice($array1, 1, 3, true); 
print_r($output) ;
echo "<br />\n";

/* array_diff */
$array1 = ['one', 'two', 'three'];
$array2 = ['one', 'two', 'three', 'four', 'five'];
$output1 = array_diff($array1, $array2);
$output2 = array_diff($array2, $array1);
if (empty($output1) and empty($output2)) {
    echo "The arrays are equal";
} else {
    echo "The arrays are not equal";
}

/* array_replace */
$array1 = ['one', 'two', 'three'];
$array2 = ['four', 'five', 'six'];
$output = array_replace($array1, $array2);
echo "<pre>";
print_r($output);
echo "</pre>";

$array1 = ['one', 'two', 'three', '', '', ''];
$array2 = ['', '', '', 'four', 'five', 'six'];
$output = array_replace($array1,array_slice($array2,3,null,$preserve_keys = true));
echo "<pre>";
print_r($output);
echo "</pre>";

/* array_unique */
$array1 = ['one', 'two', 'three', 'four', 'five', 'five'];
$output = array_unique($array1);
echo "<pre>";
print_r($output);
echo "</pre>";

/* asort */
$array1 = ['two' => 2, 'one' => 1, 'four' => 4, 'three' => 3, 'five' => 5];
asort($array1);
echo "<pre>";
print_r($array1);
echo "</pre>";

/* ksort */
$array1 = [1 => 'one', 3 => 'three', 2 => 'two', 5 => 'five', 4 => 'four'];
ksort($array1);
echo "<pre>";
print_r($array1);
echo "</pre>";

?>
