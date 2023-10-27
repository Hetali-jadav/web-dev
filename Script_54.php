<?php

$a = array(
  array(
    'id' => 1234,
    'first_name' => 'hetali',
    'last_name' => 'jadav',
  ),
  array(
    'id' => 5678,
    'first_name' => 'kajal',
    'last_name' => 'rojala',
  ),
  array(
    'id' => 4567,
    'first_name' => 'reni',
    'last_name' => 'donga',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
?>