<?php
$array =  ['a','b','ABC'];
$new_array = array_map('strtolower', $array);
print_r($new_array);
