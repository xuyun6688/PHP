<?php
require_once 'tool.php';

$a = mt_rand(0, 1000);

$str = $a . '';
function xx($str)
{
  $l = strlen($str);
  $x = '0';
  $tmp = '';
  for ($i = 0; $i < 6 - $l; $i++) {
    $tmp = $tmp . $x;
  }
  $str = $tmp . $str;
  return $str;
}

out(xx($str));


// 产生n位的随机数
function myRandom($n)
{
  $r = '';
  for ($i = 0; $i < $n; $i++) {
    $r .= mt_rand(0, 9);
  }
  return $r;
}

out(myRandom(6));
out(myRandom(8));