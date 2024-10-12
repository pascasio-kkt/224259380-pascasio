<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Number Counters</title>
</head>
<body>
<?php

echo "Numbers from 1 to 10:\n";
$n = 1;
while ($n <=10) {
    echo $n ." ";
    $n ++;
}
echo "n\n\Even numbers between 1 and 20:\n";
$n = 2;
while ($n <= 20) {
    echo $n . " ";
    $n += 2;
}
?>
</body>
</html>