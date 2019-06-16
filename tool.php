<?php
header("content-type:text/html;charset=utf-8");

function out($s, $t = '')
{
  if (is_array($s)) {
    echo '<pre style="font-family:Consolas">';
    print_r($s);
    // var_dump($s);
    echo '</pre>';
  } else {
    echo '<div style="font-family:Consolas">';
    echo $s;
    echo '</div>';
  }
  echo ($t);
}