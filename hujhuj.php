<?php

$a = 3;
$b = 8;

$sum = 0;
for ($i = $a; $i <= $b; $i++) {
    $sum += $i;
}
$avg = $sum/($b - $a + 1);

echo "Średnia arytmetyczna liczb od $a do $b wynosi: $avg";