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

/* ord */
$str = 'A';
echo "Char: ". $str .", ASCII: " .ord($str) . "<br />\n";

/* chr */
echo "Char: ". chr(ord($str) + 1) . "<br />\n";

/* sprintf */
echo sprintf("Char: %c <br />\n", ord($str) + 2);

/* parse_str */
$str = 'one=1&two=2&arr[]=3&arr[]=4';
parse_str($str, $output);
print_r($output);
echo "<br />\n";
print_r($output['arr']);
echo "<br />\n";

/* substr */
$str = 'abcdefgh';
echo substr($str, -2) . "<br />\n";     // gh
echo substr($str, -2, 1) . "<br />\n";  // g
echo substr($str, 0, 1) . "<br />\n";   // a
echo substr($str, 0, -1) . "<br />\n";  // abcdefg
echo substr($str, 2, 3) . "<br />\n";   // cde
echo substr($str, -3, -1) . "<br />\n"; // fg


/* substr_count */
$str = 'one,two,three';
echo "substr_count: " . substr_count($str,',') . "<br />\n";

/* strstr */
$str = 'one,two,three';
echo "strstr: " . strstr($str,',') . "<br />\n";
echo "strstr: " . strstr($str,',', true) . "<br />\n";

/* strrchr */
$str = 'one,two,three';
echo "strrchr: " . strrchr($str,',') . "<br />\n";

/* strpos */
$str = 'one,two,Three';
echo "strpos: " . strpos($str,'T') . "<br />\n";

/* stripos */
$str = 'one,two,Three';
echo "stripos: " . stripos($str,'T') . "<br />\n";

/* strrpos */
$str = 'one,two,Three';
echo "strrpos: " . strrpos($str,'t') . "<br />\n";

/* strripos */
$str = 'one,two,Three';
echo "strripos: " . strripos($str,'t') . "<br />\n";

/* strpbrk */
$str = 'one,two,Three';
echo "strpbrk: " . strpbrk($str,'nt') . "<br />\n";

?>
