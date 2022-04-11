<?php

/* preg_match */
$str = 'http://www.baidu.com/ https://www.qq.com/';
$pattern = '/(https|http):\/\//';
$isMatched = preg_match($pattern, $str, $matches);
echo "<pre>";
print_r($matches);
echo "</pre>";

/* preg_match_all */
$isMatched = preg_match_all($pattern, $str, $matches);
echo "<pre>";
print_r($matches);
echo "</pre>";

$isMatched = preg_match_all($pattern, $str, $matches, PREG_SET_ORDER);
echo "<pre>";
print_r($matches);
echo "</pre>";

$isMatched = preg_match_all($pattern, $str, $matches, PREG_PATTERN_ORDER);
echo "<pre>";
print_r($matches);
echo "</pre>";

$str = '<img src="/zentao/file-read-95.png" alt="" /><img src="/zentao/file-read-96.png" alt="" />';
$pattern = '/src=\".*?([0-9]+).(.*?)\"/';
preg_match_all($pattern, $str, $diagrams);
echo "<pre>";
print_r($diagrams);
echo "</pre>";

/* preg_split */
$str = 'http://www.baidu.com/ https://www.qq.com/';
$pattern = '/(https|http):\/\//';
$chars = preg_split($pattern, $str, -1, PREG_SPLIT_NO_EMPTY);
echo "<pre>";
print_r($chars);
echo "</pre>";

$chars = preg_split($pattern, $str, -1, PREG_SPLIT_DELIM_CAPTURE);
echo "<pre>";
print_r($chars);
echo "</pre>";

$chars = preg_split($pattern, $str, -1, PREG_SPLIT_OFFSET_CAPTURE);
echo "<pre>";
print_r($chars);
echo "</pre>";

/* preg_replace */
$str = 'http://www.baidu.com/ https://www.qq.com/';
$pattern = '/(https|http):\/\//';
$replacement = '';
$newStr = preg_replace($pattern, $replacement, $str);
echo $newStr . "<br />\n";

?>
