<?php
echo "Key-Value Pairs with foreach\n\n";
$studInfos = [
    "Name" => "Krel",
    "Age" => 20,
    "Grade" => "A",
    "City" => "Baguio"
];
foreach ($studInfos as $key => $value) {
    echo "$key: $value\n";
}
?>