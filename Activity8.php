<?php
echo"Factorial Calculator\n\n";

function calcuFact($num) {
    $factorial = 1;
    for ($i = $num; $i > 0; $i--){
        $factorial *= $i;
    }
    return $factorial; 
}

$num = 6;
$result = calcuFact($num);
echo "Factorial of $num is: $result";
?>