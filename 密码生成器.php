<?php
require_once 'tool.php';


function pw($n)
{
  $a = range('a', 'z');
  $b = range('A', 'Z');
  $c = range(0, 9);
  $arr = array_merge($a, $b, $c);
  $str = '';
  for ($i = 0; $i < $n; $i++) {
    $r = mt_rand(0, sizeof($arr) - 1);
    $str .= $arr[$r];
  }
  return $str;
}

out(pw(6));
out(pw(6));
out(pw(6));
out(pw(6));
out(pw(6));
out(pw(6));
out(pw(6));