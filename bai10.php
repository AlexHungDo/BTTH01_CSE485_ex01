<?php
$array = ['a','b','ABC'];
$new_array = array_map('strtoupper', $array);
print_r($new_array);
?>