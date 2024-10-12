<?php
echo "Reverse a String\n\n";

function rvrseString($input) {
    $rvrsd = "";
    for ($i = strlen($input) - 1; $i >= 0; $i--) {
        $rvrsd .= $input[$i];
    }
    return $rvrsd;
}

$inputString = "Krel";
$opString = rvrseString($inputString);
echo "Input: \"$inputString\"\n";
echo "Input: \"$opString\"\n";
?>