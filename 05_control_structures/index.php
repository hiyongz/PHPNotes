<?php

$a = 1;
$b = 2;

if ($a < $b)
    echo "a is lower than b";
    echo "<br/>";

if ($a > $b) {
  echo "a is greater than b";
  echo "<br/>";
} else {
  echo "a is NOT greater than b";
  echo "<br/>";
}

if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}

echo "<br/>";

// 流程控制的替代语法
if ($a == 1):
    echo "a equals 1";
    echo "...";
elseif ($a == 2):
    echo "a equals 2";
    echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;



/* while */
// 方法1
$i = 1;
while ($i <= 10) {
    echo $i++;  /* 在自增前（后自增）打印的值将会是 $i */
}
echo "<br/>";

// 方法2
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
echo "<br/>";

/* do while */
$i = 0;
do {
   echo $i;
} while ($i > 0);
echo "<br/>";



/* for */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

echo "<br/>";

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

echo "<br/>";

$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

echo "<br/>";

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

echo "<br/>";
/* foreach */
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
echo $arr[2];
// 现在 $arr 是 array(2, 4, 6, 8)
unset($value); // 最后取消掉引用

// 通过引用来遍历数组常量的值
foreach (array(1, 2, 3, 4) as &$value) {
    $value = $value * 2;
}

?>
