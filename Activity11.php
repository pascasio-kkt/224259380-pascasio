<?php
echo "Fibonacci Sequence\n\n";
$fibo1 = 0;
$fibo2 = 1;

echo "$fibo1 $fibo2 ";
$count = 2;

while ($count < 10) {
    $nextFibo = $fibo1 + $fibo2;
    echo "$nextFibo ";

    $fibo1 = $fibo2;
    $fibo2 = $nextFibo;
    $count++;
}
?>