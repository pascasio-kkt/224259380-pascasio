<?php
echo "Sum of Numbers\n";

$sum = 0;
$num = 1;

while ($num <= 100) {
    $sum += $num;
    $num++;
}
echo "\nThe sum of numbers from 1 to 100 is: $sum\n";
?>