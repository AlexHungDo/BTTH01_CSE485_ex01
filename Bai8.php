<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP']; 
$lengths = array_map('strlen', $array); 
$min = min($lengths); 
$max = max($lengths); 
$min_index = array_search($min, $lengths); 
$max_index = array_search($max, $lengths);
echo "Chuỗi ngắn nhất là " . $array[$min_index] . ", độ dài = " . $min . "<br>"; 
echo "Chuỗi dài nhất là " . $array[$max_index] . ", độ dài = " . $max; 
?>