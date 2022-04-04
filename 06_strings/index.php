<?php

/* explode */
$str = 'one,two,three';
print_r(explode(',',$str));
echo "<br/>";

print_r(explode(',',$str,2));
echo "<br/>";

$str1 = 'one
         two
         three';
print_r(explode(PHP_EOL,$str1));
echo "<br/>";

/* implode */
$array = ['one', 'two', 'three'];
print_r(implode(",", $array)); 
echo "<br/>";

/* str_replace */
$str="one,two,three";
print_r(str_replace('t','T',$str,$count));
echo "<br/>";
print_r($count);
echo "<br/>";

/* str_ireplace */
$str="one,two,Three";
print_r(str_ireplace('T','3',$str,$count));
echo "<br/>";

/* strtolower */
$str = 'One,Two,Three';
echo strtolower($str) . "<br />\n";

/* strtoupper */
$str = 'one,two,three';
echo strtoupper($str) . "<br />\n";

/* ucfirst */
$str = 'one,two,three';
echo ucfirst($str) . "<br />\n";

/* lcfirst */
$str = 'One,Two,Three';
echo lcfirst($str) . "<br />\n";

/* ucwords */
$str = 'one,two,three';
echo ucwords($str,',') . "<br />\n";

/* parse_str */
$str = 'one=1&two=2&arr[]=3&arr[]=4';
parse_str($str, $output);
print_r($output);
echo "<br />\n";
print_r($output['arr']);
echo "<br />\n";
?>
