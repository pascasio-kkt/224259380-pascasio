<?php
echo "Prime Number Checker\n\n";

function numisPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = ; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "Enter a number: ";
$input = trim(fgets(STDIN));
$num = (int)$input;

if (numisPrime($num)) {
    echo "$num is a prime number.\n";
} else {
    echo "$num is not a prime number.\n";
}
?>