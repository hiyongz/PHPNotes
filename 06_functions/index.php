<?php

$makefoo = true;

/* 不能在此处调用foo()函数，
   因为它还不存在，但可以调用bar()函数。*/

bar();

if ($makefoo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}

/* 现在可以安全调用函数 foo()
   因为 $makefoo 值为真 */

if ($makefoo) foo();

function bar()
{
  echo "I exist immediately upon program start.\n";
}

?>