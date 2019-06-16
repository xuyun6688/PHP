<?php
require_once 'tool.php';

$arr = [
  'name' => 'Alice',
  'sex' => 'female',
  'score' => [
    'english' => 60,
    'math' => 72
  ]
];
$keyword = 'english';

if (array_key_exists($keyword, $arr)) {
  out($keyword);
} else {
  foreach ($arr as $k => $v) {
    if (is_array($v)) {
      if (array_key_exists($keyword, $v)) {
        out($keyword . 'found!');
      }
    }
  }
}

function getKeys($arr)
{
  $keys = [];
  if (is_array($arr)) {
    foreach ($arr as $key => $value) {
      $keys[] = $key;
    }
  }
  return $keys;
}



if (array_key_exists($keywords, $keys)) {
  out($keywords . 'found!');
}